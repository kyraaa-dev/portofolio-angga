import re
import sys

def clean(filepath):
    with open(filepath, 'r') as f:
        content = f.read()
        
    # Remove Matrix Canvas HTML
    content = re.sub(r'[ \t]*<canvas id="matrixCanvas"></canvas>\n', '', content)
    
    # Remove cursor blob HTML
    content = re.sub(r'[ \t]*<!-- Interactive Background Glow -->\n[ \t]*<div class="cursor-blob" id="cursorBlob"></div>\n', '', content)

    # Remove Matrix Canvas CSS
    content = re.sub(r'[ \t]*#matrixCanvas \{[^}]+\}\n', '', content)
    
    # Remove cursor blob CSS
    content = re.sub(r'[ \t]*/\* Interactive background elements \*/\n[ \t]*\.cursor-blob \{[^}]+\}\n', '', content)

    # Disable Matrix JS
    content = re.sub(r'const canvas = document\.getElementById\(\'matrixCanvas\'\);.*?(?=// --- Matrix Data Stream Simulation ---)', '', content, flags=re.DOTALL)
    
    # Disable Cursor Blob JS
    content = re.sub(r'const cursorBlob = document\.getElementById\(\'cursorBlob\'\);.*?animateCursor\(\);\n', '', content, flags=re.DOTALL)

    # Disable 3D Tilt JS
    content = re.sub(r'// 3D Tilt Effect on Cards.*?card\.addEventListener\(\'mouseleave\', \(\) => \{[^}]+\}\);\n[ \t]*\}\);\n', '', content, flags=re.DOTALL)

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Cleaned {filepath}")

for f in sys.argv[1:]:
    clean(f)
