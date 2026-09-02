import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # Replace HTML
    content = content.replace(
        '<div class="preloader-logo-aw">AW</div>',
        '<div class="preloader-logo-aw"><img src="images/logo.png" alt="Logo AW"></div>'
    )

    # Replace CSS
    old_css = """        .preloader-logo-aw {
            font-family: 'Inter', sans-serif;
            font-size: 48px;
            font-weight: 900;
            letter-spacing: 4px;
            color: transparent;
            -webkit-text-stroke: 1.5px var(--accent-color);
            text-stroke: 1.5px var(--accent-color);
            animation: pulseAwLogo 1.5s ease-in-out infinite alternate;
            will-change: opacity, text-shadow;
        }
        @keyframes pulseAwLogo {
            0% { text-shadow: 0 0 10px rgba(16, 185, 129, 0); opacity: 0.5; }
            100% { text-shadow: 0 0 20px rgba(16, 185, 129, 0.8); opacity: 1; }
        }"""

    new_css = """        .preloader-logo-aw {
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: pulseAwLogo 1.5s ease-in-out infinite alternate;
            will-change: opacity, transform, filter;
        }
        .preloader-logo-aw img {
            width: 100%;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 0 10px var(--accent-color));
        }
        @keyframes pulseAwLogo {
            0% { 
                transform: scale(0.9);
                opacity: 0.6; 
                filter: drop-shadow(0 0 5px transparent);
            }
            100% { 
                transform: scale(1.1);
                opacity: 1; 
                filter: drop-shadow(0 0 20px var(--accent-color));
            }
        }"""
        
    content = content.replace(old_css, new_css)
    
    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Updated preloader logo in {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
