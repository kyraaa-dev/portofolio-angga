import sys
import os

files_to_check = [
    "index.html",
    "public/index.html",
    "PROFILE_README.md",
    "README.md",
    "resources/views/welcome.blade.php",
    "update_schema.py",
    "../portfolio-static/index.html",
    "../portfolio-static/README.md"
]

for filepath in files_to_check:
    if os.path.exists(filepath):
        with open(filepath, 'r') as f:
            content = f.read()
        
        # Replace occurrences
        new_content = content.replace("kyraaa.pages.dev", "anggawiranata.my.id")
        new_content = new_content.replace("kyraaadev.pages.dev", "anggawiranata.my.id")
        
        if new_content != content:
            with open(filepath, 'w') as f:
                f.write(new_content)
            print(f"Updated {filepath}")
