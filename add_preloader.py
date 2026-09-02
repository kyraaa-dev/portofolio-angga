import re
import sys

def optimize_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    css_code = """
    <style>
        .preloader-new {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: var(--bg-base);
            z-index: 999999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, visibility;
        }
        .preloader-new.fade-out {
            opacity: 0;
            visibility: hidden;
        }
        .preloader-logo-aw {
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
        }
        .preloader-bar-bg {
            width: 150px;
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }
        .preloader-bar-fill {
            position: absolute;
            top: 0; left: 0; height: 100%; width: 100%;
            background: var(--accent-color);
            box-shadow: 0 0 10px var(--accent-color);
            transform-origin: left;
            transform: scaleX(0);
            will-change: transform;
        }
    </style>
</head>"""

    html_code = """<body>
    <!-- Lightweight Modern Preloader -->
    <div id="preloaderNew" class="preloader-new">
        <div class="preloader-logo-aw">AW</div>
        <div class="preloader-bar-bg">
            <div id="preloaderFill" class="preloader-bar-fill"></div>
        </div>
    </div>"""

    old_js = """            // Trigger reveal animations directly since preloader is removed
            setTimeout(() => {
                document.querySelectorAll('.reveal').forEach((el, index) => {
                    setTimeout(() => { el.classList.add('active'); }, index * 100);
                });
            }, 100);"""

    new_js = """            // Lightweight Preloader Logic
            const preloaderNew = document.getElementById('preloaderNew');
            const preloaderFill = document.getElementById('preloaderFill');
            
            if (preloaderNew && preloaderFill) {
                let progress = 0;
                let lastTime = 0;
                
                function simulateLoading(timestamp) {
                    if (!lastTime) lastTime = timestamp;
                    const deltaTime = timestamp - lastTime;
                    
                    // Progress faster for smoother UX (takes ~0.8 seconds to load)
                    if (deltaTime > 16) {
                        progress += Math.random() * 4 + 2; 
                        lastTime = timestamp;
                    }
                    
                    if (progress > 100) progress = 100;
                    
                    preloaderFill.style.transform = `scaleX(${progress / 100})`;
                    
                    if (progress < 100) {
                        window.requestAnimationFrame(simulateLoading);
                    } else {
                        setTimeout(() => {
                            preloaderNew.classList.add('fade-out');
                            setTimeout(() => {
                                preloaderNew.style.display = 'none';
                                document.querySelectorAll('.reveal').forEach((el, index) => {
                                    setTimeout(() => { el.classList.add('active'); }, index * 80);
                                });
                            }, 600); 
                        }, 200); 
                    }
                }
                window.requestAnimationFrame(simulateLoading);
            } else {
                document.querySelectorAll('.reveal').forEach((el, index) => {
                    setTimeout(() => { el.classList.add('active'); }, index * 80);
                });
            }"""

    content = content.replace('</head>', css_code)
    content = content.replace('<body>', html_code)
    content = content.replace(old_js, new_js)

    with open(filepath, 'w') as f:
        f.write(content)
    print(f"Added preloader to {filepath}")

for f in sys.argv[1:]:
    optimize_file(f)
