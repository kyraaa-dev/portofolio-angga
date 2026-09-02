import re
import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Hardware acceleration for reveal elements
    content = content.replace('.reveal {', '.reveal {\n            will-change: transform, opacity;\n            -webkit-backface-visibility: hidden;\n            backface-visibility: hidden;')
    
    # 2. Add loading="lazy" to all images (if not already there)
    # Be careful not to add it twice
    content = re.sub(r'<img(?![^>]*loading=)([^>]+)>', r'<img loading="lazy"\1>', content)

    # 3. Replace transition: all with specific properties for typical elements
    # Since transition: all is used widely, we can replace it with:
    content = content.replace('transition: all 0.3s ease', 'transition: transform 0.3s ease, opacity 0.3s ease, background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease')
    content = content.replace('transition: all 0.5s ease', 'transition: transform 0.5s ease, opacity 0.5s ease, background-color 0.5s ease')
    
    # 4. Box shadow is heavily used on cards. We can add hardware acceleration to project cards
    content = content.replace('.project-card {', '.project-card {\n            will-change: transform, box-shadow;')
    
    # Let's save the changes
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Deep optimized {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
