import sys
import re

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Grid Background Mouse Tracker
    # It updates --mouse-x and --mouse-y. We will just comment out the event listener content.
    content = re.sub(
        r'const gridBg = document\.getElementById\(\'gridBackground\'\);\s*window\.addEventListener\(\'mousemove\', \(e\) => \{\s*if \(gridBg\) \{\s*gridBg\.style\.setProperty\(\'--mouse-x\', `\$\{e\.clientX\}px`\);\s*gridBg\.style\.setProperty\(\'--mouse-y\', `\$\{e\.clientY\}px`\);\s*\}\s*\}\);',
        'const gridBg = document.getElementById(\'gridBackground\');\n// Mouse tracking for grid disabled for performance',
        content, flags=re.DOTALL
    )

    # 2. Custom Cursor Logic
    content = re.sub(
        r'const cursorDot = document\.getElementById\(\'cursorDot\'\);.*?// Magnet Button Effect',
        '// Custom cursor disabled for performance\n// Magnet Button Effect',
        content, flags=re.DOTALL
    )

    # 3. 3D Tilt Effect on Cards (Custom)
    content = re.sub(
        r'// 3D Tilt Effect on Cards\s*const hoverElements = document\.querySelectorAll\(.*?\);\s*hoverElements\.forEach\(card => \{.*?\}\);\n',
        '// 3D Tilt Effect disabled for performance\n',
        content, flags=re.DOTALL
    )

    # 4. Magnet Button Effect
    content = re.sub(
        r'// Magnet Button Effect\s*const magnetBtns = document\.querySelectorAll\(\'\.magnet-btn\'\);\s*magnetBtns\.forEach\(btn => \{.*?\}\);\n',
        '// Magnet Button Effect disabled for performance\n',
        content, flags=re.DOTALL
    )
    
    # 5. Fix the CSS grid-background mask so it doesn't rely on vars that don't update
    content = content.replace(
        '-webkit-mask-image: radial-gradient(500px circle at var(--mouse-x, 50vw) var(--mouse-y, 50vh), black 0%, transparent 100%);',
        '-webkit-mask-image: radial-gradient(800px circle at 50vw 50vh, black 0%, transparent 100%);'
    )
    content = content.replace(
        'mask-image: radial-gradient(500px circle at var(--mouse-x, 50vw) var(--mouse-y, 50vh), black 0%, transparent 100%);',
        'mask-image: radial-gradient(800px circle at 50vw 50vh, black 0%, transparent 100%);'
    )

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Nuked mousemove lag in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
