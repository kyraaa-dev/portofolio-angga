import sys

def remove_blocks(filepath):
    with open(filepath, 'r') as f:
        lines = f.readlines()
        
    out = []
    skip = False
    brace_count = 0
    
    for line in lines:
        if "addEventListener('mousemove'" in line:
            skip = True
            brace_count = line.count('{') - line.count('}')
            continue
            
        if skip:
            brace_count += line.count('{') - line.count('}')
            if brace_count <= 0:
                skip = False
            continue
            
        out.append(line)
        
    with open(filepath, 'w') as f:
        f.writelines(out)

for f in sys.argv[1:]:
    remove_blocks(f)
