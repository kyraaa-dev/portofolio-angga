import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    old_code = """                window.addEventListener('scroll', () => {
                    const scrollTotal = document.documentElement.scrollTop || document.body.scrollTop;
                    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    const scrollPercent = height > 0 ? scrollTotal / height : 0;
                    const offset = circumference - scrollPercent * circumference;
                    circle.style.strokeDashoffset = offset;

                    if (scrollTotal > 300) {
                        backToTop.classList.add('show');
                    } else {
                        backToTop.classList.remove('show');
                    }
                });"""

    new_code = """                let isBackToTopScrolling = false;
                window.addEventListener('scroll', () => {
                    if (!isBackToTopScrolling) {
                        window.requestAnimationFrame(() => {
                            const scrollTotal = document.documentElement.scrollTop || document.body.scrollTop;
                            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                            const scrollPercent = height > 0 ? scrollTotal / height : 0;
                            const offset = circumference - scrollPercent * circumference;
                            circle.style.strokeDashoffset = offset;

                            if (scrollTotal > 300) {
                                backToTop.classList.add('show');
                            } else {
                                backToTop.classList.remove('show');
                            }
                            isBackToTopScrolling = false;
                        });
                        isBackToTopScrolling = true;
                    }
                }, { passive: true });"""

    content = content.replace(old_code, new_code)
    
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
