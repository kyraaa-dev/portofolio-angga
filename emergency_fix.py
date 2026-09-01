import re
import sys

def fix_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # The broken code is:
    #             if (preloader) {
    #                 const ctx = canvas.getContext('2d');
    #                 canvas.width = window.innerWidth;
    #                 ...
    #                 let progress = 0;
    
    # We want to replace from `const ctx = canvas.getContext('2d');` up to `});` just before `let progress = 0;`
    # Let's just use regex to remove it safely.
    pattern = r"const ctx = canvas\.getContext\('2d'\);.*?window\.addEventListener\('resize', \(\) => \{\s*canvas\.width = window\.innerWidth;\s*canvas\.height = window\.innerHeight;\s*\}\);"
    
    content = re.sub(pattern, '', content, flags=re.DOTALL)
    
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed {filepath}")

for f in sys.argv[1:]:
    fix_file(f)
