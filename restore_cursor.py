import re
import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Remove cursor: none CSS
    content = content.replace('body { cursor: none; }', '')
    content = content.replace('a, button, .filter-btn, .logo { cursor: none !important; }', '')
    
    # Optional: We could just remove the entire block from @media (pointer: fine) { up to the closing brace,
    # but the simplest fix is just removing the cursor: none rules so the system cursor comes back.
    
    # 2. Remove Custom Cursor HTML (just to be clean)
    content = re.sub(r'<!-- Custom Cursor -->\n[ \t]*<div class="cursor-dot" id="cursorDot"></div>\n[ \t]*<div class="cursor-outline" id="cursorOutline"></div>\n', '', content)

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Restored cursor in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
