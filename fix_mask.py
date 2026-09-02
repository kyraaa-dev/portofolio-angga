import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # Fix the CSS grid-background mask so it doesn't rely on vars that don't update
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
    print(f"Fixed mask in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
