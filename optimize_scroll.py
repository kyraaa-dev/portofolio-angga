import re
import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # Remove backdrop-filter completely to prevent compositing lag
    content = re.sub(r'[ \t]*backdrop-filter:[^;]+;\n?', '', content)
    content = re.sub(r'[ \t]*-webkit-backdrop-filter:[^;]+;\n?', '', content)

    # Wrap scroll event logic in requestAnimationFrame for Scroll Progress Bar
    old_scroll_1 = r"""            window\.addEventListener\('scroll', \(\) => \{
                const winScroll = document\.body\.scrollTop \|\| document\.documentElement\.scrollTop;
                const height = document\.documentElement\.scrollHeight - document\.documentElement\.clientHeight;
                const scrolled = \(winScroll / height\) \* 100;
                document\.getElementById\('scrollBar'\)\.style\.width = scrolled \+ "%";
            \}\);"""
            
    new_scroll_1 = """            let isScrolling = false;
            window.addEventListener('scroll', () => {
                if (!isScrolling) {
                    window.requestAnimationFrame(() => {
                        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                        const scrolled = (winScroll / height) * 100;
                        const bar = document.getElementById('scrollBar');
                        if (bar) bar.style.width = scrolled + "%";
                        isScrolling = false;
                    });
                    isScrolling = true;
                }
            }, { passive: true });"""
            
    content = content.replace(old_scroll_1, new_scroll_1)
    
    # Wrap scroll event logic for Parallax Hero
    old_scroll_2 = r"""                window\.addEventListener\('scroll', \(\) => \{
                    const scrolled = window\.scrollY;
                    if\(document\.querySelector\('\.hero'\)\) \{
                        document\.querySelector\('\.hero'\)\.style\.transform = `translateY\(\{scrolled \* 0\.1\}px\)`\s*;
                    \}
                \}\);"""
                
    new_scroll_2 = """                let isHeroScrolling = false;
                window.addEventListener('scroll', () => {
                    if (!isHeroScrolling) {
                        window.requestAnimationFrame(() => {
                            const scrolled = window.scrollY;
                            const hero = document.querySelector('.hero');
                            if(hero) {
                                hero.style.transform = `translateY(${scrolled * 0.1}px)`;
                            }
                            isHeroScrolling = false;
                        });
                        isHeroScrolling = true;
                    }
                }, { passive: true });"""

    # We might need to use regex for the second scroll because of the backticks and dynamic variable
    content = re.sub(r"[ \t]*window\.addEventListener\('scroll', \(\) => \{\s*const scrolled = window\.scrollY;\s*if\(document\.querySelector\('\.hero'\)\) \{\s*document\.querySelector\('\.hero'\)\.style\.transform = `translateY\(\$\{scrolled \* 0\.1\}px\)`;\s*\}\s*\}\);", new_scroll_2, content)

    # Let's also make sure 'will-change: transform' is on '.hero' for hardware acceleration
    # and '.scroll-progress-bar'
    
    # Let's write back
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Optimized {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
