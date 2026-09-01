import sys
import os

files_to_check = [
    "index.html",
    "public/index.html",
    "../portfolio-static/index.html"
]

for filepath in files_to_check:
    if os.path.exists(filepath):
        with open(filepath, 'r') as f:
            content = f.read()
        
        # Replace og:site_name
        content = content.replace(
            '<meta property="og:site_name" content="Angga Wiranata Portfolio">',
            '<meta property="og:site_name" content="anggawiranata.my.id">'
        )
        
        # Replace WebSite schema name
        content = content.replace(
            '"name": "Angga Wiranata",\n        "alternateName": "Portfolio Angga Wiranata",',
            '"name": "anggawiranata.my.id",\n        "alternateName": "Angga Wiranata Portfolio",'
        )
        
        with open(filepath, 'w') as f:
            f.write(content)
        print(f"Updated {filepath}")
