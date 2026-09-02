import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # Find .preloader-new and add transform: translateZ(9999px);
    content = content.replace(
        'z-index: 999999;',
        'z-index: 999999;\n            transform: translateZ(9999px);'
    )
    
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Fixed z-index in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
