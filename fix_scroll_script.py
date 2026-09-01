import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # Replace scroll 1
    old_scroll_1 = "            window.addEventListener('scroll', () => {\n                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;\n                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;\n                const scrolled = (winScroll / height) * 100;\n                document.getElementById('scrollBar').style.width = scrolled + \"%\";\n            });"
    
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
    
    # Replace scroll 2
    old_scroll_2 = "                window.addEventListener('scroll', () => {\n                    const scrolled = window.scrollY;\n                    if(document.querySelector('.hero')) {\n                        document.querySelector('.hero').style.transform = `translateY(${scrolled * 0.1}px)`;\n                    }\n                });"
    
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
                
    content = content.replace(old_scroll_2, new_scroll_2)

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
