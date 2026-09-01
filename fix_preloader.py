import re
import sys

def fix_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # We need to change 'if (preloader && canvas) {' to 'if (preloader) {'
    content = content.replace("if (preloader && canvas) {", "if (preloader) {")
    
    # We need to remove the drawMatrix definition and call
    # It is roughly:
    #                 const ctx = canvas.getContext('2d');
    #                 ...
    #                 drawMatrix();
    #                 window.addEventListener('resize', () => {
    #                     canvas.width = window.innerWidth;
    #                     canvas.height = window.innerHeight;
    #                 });
    
    # Let's use regex to remove that block up to let progress = 0;
    pattern = r"const ctx = canvas\.getContext\('2d'\);.*?drawMatrix\(\);[ \t]*\n[ \t]*window\.addEventListener\('resize', \(\) => \{[^}]+\}\);\n"
    content = re.sub(pattern, '', content, flags=re.DOTALL)
    
    # Also there is "const canvas = document.getElementById('matrixCanvas');"
    content = content.replace("const canvas = document.getElementById('matrixCanvas');", "")

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed {filepath}")

for f in sys.argv[1:]:
    fix_file(f)
