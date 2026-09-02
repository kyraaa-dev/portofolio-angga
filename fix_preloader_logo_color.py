import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # The issue: the image itself needs to be white in dark mode
    # Let's replace the CSS for .preloader-logo-aw img
    
    old_css = """        .preloader-logo-aw img {
            width: 100%;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 0 10px var(--accent-color));
        }"""
        
    new_css = """        .preloader-logo-aw img {
            width: 100%;
            height: auto;
            object-fit: contain;
            /* Make it white in dark mode */
            filter: brightness(0) invert(1);
        }
        [data-theme="light"] .preloader-logo-aw img {
            /* Keep original color in light mode */
            filter: none;
        }"""
        
    content = content.replace(old_css, new_css)
    
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed preloader logo color in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
