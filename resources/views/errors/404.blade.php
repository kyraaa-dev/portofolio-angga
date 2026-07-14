<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | SYSTEM FAILURE</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0f172a;
            --text-primary: #f8fafc;
            --accent-green: #10b981;
            --accent-red: #ef4444;
        }

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Matrix Background */
        .grid-bg {
            position: absolute;
            width: 200vw;
            height: 200vh;
            background-image: 
                linear-gradient(rgba(16, 185, 129, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(16, 185, 129, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 0;
            transform: perspective(500px) rotateX(60deg) translateY(-100px) translateZ(-200px);
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: perspective(500px) rotateX(60deg) translateY(0) translateZ(-200px); }
            100% { transform: perspective(500px) rotateX(60deg) translateY(50px) translateZ(-200px); }
        }

        .container {
            position: relative;
            z-index: 10;
            text-align: center;
            max-width: 600px;
            padding: 40px;
        }

        .glitch-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 120px;
            font-weight: 900;
            margin: 0;
            line-height: 1;
            letter-spacing: -5px;
            position: relative;
            color: var(--text-primary);
            text-shadow: 0 0 20px rgba(255,255,255,0.1);
        }

        /* Glitch Effect */
        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--bg-dark);
        }

        .glitch::before {
            left: 3px;
            text-shadow: -2px 0 var(--accent-red);
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }

        .glitch::after {
            left: -3px;
            text-shadow: -2px 0 var(--accent-green);
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(78px, 9999px, 86px, 0); }
            5% { clip: rect(13px, 9999px, 8px, 0); }
            10% { clip: rect(61px, 9999px, 87px, 0); }
            15% { clip: rect(45px, 9999px, 15px, 0); }
            20% { clip: rect(98px, 9999px, 16px, 0); }
            25% { clip: rect(2px, 9999px, 4px, 0); }
            30% { clip: rect(31px, 9999px, 58px, 0); }
            35% { clip: rect(82px, 9999px, 30px, 0); }
            40% { clip: rect(21px, 9999px, 92px, 0); }
            45% { clip: rect(47px, 9999px, 25px, 0); }
            50% { clip: rect(6px, 9999px, 94px, 0); }
            55% { clip: rect(99px, 9999px, 55px, 0); }
            60% { clip: rect(49px, 9999px, 60px, 0); }
            65% { clip: rect(86px, 9999px, 9px, 0); }
            70% { clip: rect(70px, 9999px, 36px, 0); }
            75% { clip: rect(27px, 9999px, 81px, 0); }
            80% { clip: rect(17px, 9999px, 46px, 0); }
            85% { clip: rect(92px, 9999px, 18px, 0); }
            90% { clip: rect(51px, 9999px, 66px, 0); }
            95% { clip: rect(74px, 9999px, 20px, 0); }
            100% { clip: rect(35px, 9999px, 84px, 0); }
        }

        @keyframes glitch-anim2 {
            0% { clip: rect(36px, 9999px, 7px, 0); }
            5% { clip: rect(98px, 9999px, 22px, 0); }
            10% { clip: rect(12px, 9999px, 56px, 0); }
            15% { clip: rect(68px, 9999px, 38px, 0); }
            20% { clip: rect(41px, 9999px, 83px, 0); }
            25% { clip: rect(7px, 9999px, 14px, 0); }
            30% { clip: rect(82px, 9999px, 91px, 0); }
            35% { clip: rect(25px, 9999px, 50px, 0); }
            40% { clip: rect(96px, 9999px, 2px, 0); }
            45% { clip: rect(54px, 9999px, 76px, 0); }
            50% { clip: rect(18px, 9999px, 64px, 0); }
            55% { clip: rect(88px, 9999px, 49px, 0); }
            60% { clip: rect(3px, 9999px, 31px, 0); }
            65% { clip: rect(61px, 9999px, 98px, 0); }
            70% { clip: rect(44px, 9999px, 12px, 0); }
            75% { clip: rect(73px, 9999px, 87px, 0); }
            80% { clip: rect(15px, 9999px, 53px, 0); }
            85% { clip: rect(90px, 9999px, 28px, 0); }
            90% { clip: rect(39px, 9999px, 71px, 0); }
            95% { clip: rect(8px, 9999px, 45px, 0); }
            100% { clip: rect(66px, 9999px, 95px, 0); }
        }

        p.desc {
            color: #94a3b8;
            font-size: 18px;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .terminal {
            background: rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 8px;
            font-family: monospace;
            text-align: left;
            margin-bottom: 40px;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.8);
        }

        .terminal p {
            margin: 5px 0;
            color: var(--accent-green);
        }
        .terminal .error { color: var(--accent-red); }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--accent-green);
            color: var(--bg-dark);
            padding: 16px 32px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.4);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.6);
            background: #34d399;
        }

        @media (max-width: 600px) {
            h1 { font-size: 80px; }
        }
    </style>
</head>
<body>
    <div class="grid-bg"></div>
    
    <div class="container">
        <div class="glitch-wrapper">
            <h1 class="glitch" data-text="404">404</h1>
        </div>
        
        <div class="terminal">
            <p>> initializing system diagnostic...</p>
            <p class="error">> ERROR: Destination coordinates lost.</p>
            <p>> Attempting to locate requested sector...</p>
            <p class="error">> FAILED. Sector does not exist.</p>
            <p>> Awaiting user input_</p>
        </div>

        <p class="desc">Whoops! Sepertinya Anda tersesat di dimensi lain. Halaman yang Anda cari tidak dapat ditemukan di dalam sistem ini.</p>
        
        <a href="/" class="btn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Kembali ke Beranda
        </a>
    </div>

    <script>
        // Blinking cursor in terminal
        const terminal = document.querySelector('.terminal');
        setInterval(() => {
            const lastP = terminal.lastElementChild;
            if(lastP.innerHTML.endsWith('_')) {
                lastP.innerHTML = lastP.innerHTML.slice(0, -1) + '&nbsp;';
            } else {
                lastP.innerHTML = lastP.innerHTML.slice(0, -6) + '_';
            }
        }, 500);
    </script>
</body>
</html>
