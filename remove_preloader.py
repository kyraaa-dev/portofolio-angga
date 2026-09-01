import re
import sys

def process(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Remove CSS
    content = re.sub(r'[ \t]*\.preloader \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader\.fade-out \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader::after \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader\.overload::after \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader-percentage-new \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader-percentage-new::before \{[^}]+\}\n', '', content, flags=re.DOTALL)
    content = re.sub(r'[ \t]*\.preloader\.slide-up \.preloader-percentage-new \{[^}]+\}\n', '', content, flags=re.DOTALL)

    # 2. Remove HTML
    content = re.sub(r'[ \t]*<!-- The Matrix Code Rain Preloader -->\n[ \t]*<div class="preloader" id="preloader">\n[ \t]*<div class="preloader-percentage-new" id="preloaderPerc" data-text="0%">0%</div>\n[ \t]*</div>\n', '', content)

    # 3. Replace JS Logic
    old_js = r"""            // Matrix Preloader Logic
            const preloader = document\.getElementById\('preloader'\);
            const preloaderPerc = document\.getElementById\('preloaderPerc'\);
            
            
            if \(preloader\) \{
                

                let progress = 0;
                
                // Cinematic Cyberpunk Startup Sound \(Web Audio API Synthesizer\)
                function playStartupSound\(\) \{
                    // Sound removed per user request
                \}

                setTimeout\(\(\) => \{
                    const interval = setInterval\(\(\) => \{
                        progress \+= Math\.floor\(Math\.random\(\) \* 5\) \+ 2; 
                        
                        if \(progress >= 100\) \{
                            progress = 100;
                            clearInterval\(interval\);
                            
                            if \(preloaderPerc\) preloaderPerc\.style\.display = 'none';
                            
                            isOverloaded = true;
                            preloader\.classList\.add\('overload'\);
                            
                            setTimeout\(\(\) => \{
                                preloader\.classList\.add\('fade-out'\);
                                setTimeout\(\(\) => \{
                                    preloader\.style\.display = 'none';
                                    document\.querySelectorAll\('\.reveal'\)\.forEach\(\(el, index\) => \{
                                        setTimeout\(\(\) => \{ el\.classList\.add\('active'\); \}, index \* 100\);
                                    \}\);
                                \}, 1500\);
                            \}, 500\);
                        \}
                        if\(preloaderPerc && progress < 100\) \{
                            preloaderPerc\.innerText = progress \+ '%';
                            preloaderPerc\.setAttribute\('data-text', progress \+ '%'\);
                            preloaderPerc\.style\.setProperty\('--progress', progress \+ '%'\);
                        \}
                    \}, 40\);
                \}, 500\);
            \}"""

    new_js = """            // Trigger reveal animations directly since preloader is removed
            setTimeout(() => {
                document.querySelectorAll('.reveal').forEach((el, index) => {
                    setTimeout(() => { el.classList.add('active'); }, index * 100);
                });
            }, 100);"""

    content = re.sub(old_js, new_js, content, flags=re.DOTALL)

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Removed preloader from {filepath}")

for f in sys.argv[1:]:
    process(f)
