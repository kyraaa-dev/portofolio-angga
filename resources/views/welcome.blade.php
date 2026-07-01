<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title>{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}</title>
    <meta name="title" content="{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}">
    <meta name="description" content="{{ $settings['description'] ?? 'Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses.' }}">
    <meta name="keywords" content="Web Developer, Software Engineer, Frontend Developer, Laravel, React, Portfolio, Angga Wiranata, Programmer Indonesia">
    <meta name="author" content="{{ $settings['name'] ?? 'Angga Wiranata' }}">
    <meta name="theme-color" content="#000000">

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}">
    <meta property="og:description" content="{{ $settings['description'] ?? 'Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses.' }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}">
    <meta property="twitter:description" content="{{ $settings['description'] ?? 'Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses.' }}">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-base: #000000;
            --bg-surface: #0a0a0a;
            --bg-surface-hover: #111111;
            --text-primary: #ffffff;
            --text-secondary: #888888;
            --accent-color: #0070f3; /* Vercel Blue */
            --accent-glow: rgba(0, 112, 243, 0.3);
            --border-color: rgba(255, 255, 255, 0.1);
            --border-hover: rgba(255, 255, 255, 0.2);
            --glass-bg: rgba(10, 10, 10, 0.6);
            --nav-bg: rgba(0, 0, 0, 0.7);
            --hero-gradient: linear-gradient(to right, #FFFFFF 20%, #888888 50%, #FFFFFF 80%);
            --filter-invert: invert(1);
            --mesh-opacity: 1;
            --font-family: 'Inter', sans-serif;
        }

        [data-theme="light"] {
            --bg-base: #ffffff;
            --bg-surface: #f9fafb;
            --bg-surface-hover: #f3f4f6;
            --text-primary: #000000;
            --text-secondary: #6b7280;
            --accent-color: #0070f3;
            --accent-glow: rgba(0, 112, 243, 0.1);
            --border-color: rgba(0, 0, 0, 0.1);
            --border-hover: rgba(0, 0, 0, 0.2);
            --glass-bg: rgba(255, 255, 255, 0.7);
            --nav-bg: rgba(255, 255, 255, 0.8);
            --hero-gradient: linear-gradient(to right, #000000 20%, #666666 50%, #000000 80%);
            --filter-invert: invert(0);
            --mesh-opacity: 0.5;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body { 
            font-family: var(--font-family); 
            background-color: var(--bg-base); 
            color: var(--text-primary); 
            line-height: 1.6; 
            position: relative; 
            overflow-x: hidden; 
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        /* Subtle Background Mesh / Glow */
        .bg-mesh {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background: 
                radial-gradient(circle at 15% 50%, rgba(136, 136, 136, 0.05), transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(0, 112, 243, 0.05), transparent 25%);
            opacity: var(--mesh-opacity);
            pointer-events: none;
            transition: opacity 0.5s ease;
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

        /* Typography */
        h1, h2, h3, h4 { font-weight: 700; letter-spacing: -0.02em; }
        
        /* Buttons */
        .btn { 
            display: inline-flex; align-items: center; justify-content: center; gap: 8px; 
            padding: 12px 28px; border-radius: 8px; font-weight: 500; font-size: 15px; 
            text-decoration: none; transition: all 0.2s ease; cursor: pointer; 
        }
        .btn-primary { 
            background: var(--text-primary); color: var(--bg-base); border: 1px solid var(--text-primary); 
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }
        .btn-primary:hover { 
            background: transparent; color: var(--text-primary);
        }
        .btn-outline { 
            background: transparent; color: var(--text-secondary); border: 1px solid var(--border-color); 
        }
        .btn-outline:hover { 
            background: var(--bg-surface-hover); color: var(--text-primary); border-color: var(--text-secondary); 
        }

        /* Navbar */
        .navbar { 
            display: flex; align-items: center; justify-content: space-between; 
            padding: 20px 0; position: sticky; top: 0; z-index: 100; 
            background: var(--nav-bg); backdrop-filter: saturate(180%) blur(12px); 
            border-bottom: 1px solid var(--border-color); 
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .logo { display: flex; align-items: center; gap: 16px; cursor: pointer; }
        .logo-img-wrapper {
            height: 48px; 
            display: flex; align-items: center; justify-content: center;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .logo:hover .logo-img-wrapper { transform: scale(1.08) rotate(-2deg); }
        .logo-img {
            height: 100%; width: auto; object-fit: contain;
            /* Force white color in dark mode */
            filter: brightness(0) invert(1) drop-shadow(0 4px 12px rgba(255,255,255,0.1));
            transition: filter 0.3s ease;
        }
        [data-theme="light"] .logo-img { 
            /* Return to original color in light mode */
            filter: drop-shadow(0 2px 8px rgba(0,0,0,0.08)); 
        }
        
        .logo-text { 
            font-weight: 700; font-size: 20px; letter-spacing: -0.5px; 
            color: var(--text-primary); transition: color 0.3s ease;
        }

        .theme-toggle {
            background: transparent; border: 1px solid var(--border-color); color: var(--text-primary);
            width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: all 0.3s ease;
        }
        .theme-toggle:hover {
            background: var(--bg-surface-hover); border-color: var(--text-secondary);
        }

        /* Scroll Progress Bar */
        .scroll-progress-container { position: fixed; top: 0; left: 0; width: 100vw; height: 3px; z-index: 1001; background: transparent; }
        .scroll-progress-bar { height: 100%; width: 0%; background: var(--text-primary); box-shadow: 0 0 10px var(--text-primary); transition: width 0.1s ease-out; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-base); }
        ::-webkit-scrollbar-thumb { background: rgba(128,128,128,0.3); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(128,128,128,0.5); }

        /* Glowing Interactive Grid Background */
        .grid-background {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -2; pointer-events: none;
            background-image: 
                linear-gradient(var(--border-color) 1px, transparent 1px),
                linear-gradient(90deg, var(--border-color) 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.4;
            -webkit-mask-image: radial-gradient(500px circle at var(--mouse-x, 50vw) var(--mouse-y, 50vh), black 0%, transparent 100%);
            mask-image: radial-gradient(500px circle at var(--mouse-x, 50vw) var(--mouse-y, 50vh), black 0%, transparent 100%);
        }

        /* Preloader */
        .preloader {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            background: #050505; z-index: 999999; display: flex; justify-content: center; align-items: center;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }
        .preloader-content { text-align: left; display: flex; flex-direction: column; align-items: flex-start; max-width: 500px; width: 90%; }
        
        .hacker-logo { font-family: monospace; font-size: 56px; color: #0f0; margin-bottom: 24px; font-weight: bold; animation: glitch 1.5s linear infinite; }
        
        .preloader-text {
            font-size: 28px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
            color: #0f0; margin-bottom: 8px; font-family: 'Courier New', Courier, monospace;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.4);
            min-height: 34px;
        }
        .preloader-subtitle {
            font-size: 14px; font-weight: 500; text-transform: uppercase;
            color: #00ff00; margin-bottom: 32px; font-family: 'Courier New', Courier, monospace;
            border-right: 10px solid #0f0; padding-right: 8px;
            animation: blink-caret 0.75s step-end infinite;
            min-height: 20px;
        }
        
        @keyframes glitch {
            2%, 64% { transform: translate(2px,0) skew(0deg); }
            4%, 60% { transform: translate(-2px,0) skew(0deg); }
            62% { transform: translate(0,0) skew(5deg); }
        }
        @keyframes blink-caret { from, to { border-color: transparent; } 50% { border-color: #0f0; } }

        .preloader-status {
            font-family: 'Courier New', Courier, monospace; font-size: 14px; color: #0f0;
            line-height: 1.8; text-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
            min-height: 120px; display: flex; flex-direction: column; justify-content: flex-end; width: 100%;
        }
        .log-line { opacity: 0; transform: translateY(10px); animation: logAppear 0.2s forwards; }
        @keyframes logAppear { to { opacity: 1; transform: translateY(0); } }

        .nav-links { display: none; gap: 32px; align-items: center; }
        .nav-link { color: var(--text-secondary); text-decoration: none; font-size: 15px; font-weight: 500; transition: color 0.3s ease; }
        .nav-link:hover { color: var(--text-primary); }
        .nav-actions { display: flex; align-items: center; gap: 16px; }

        /* Hero Section */
        .hero { 
            padding-top: 120px; padding-bottom: 100px; display: flex; flex-direction: column; 
            align-items: center; text-align: center; min-height: 90vh; justify-content: center; 
        }
        .hero-badge { 
            display: inline-flex; align-items: center; gap: 8px; padding: 6px 16px; 
            border-radius: 20px; border: 1px solid var(--border-color); background: var(--bg-surface);
            font-size: 12px; font-weight: 500; color: var(--text-secondary); margin-bottom: 32px; 
            letter-spacing: 1px; text-transform: uppercase;
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .hero-badge::before {
            content: ''; width: 8px; height: 8px; background: var(--accent-color); 
            border-radius: 50%; box-shadow: 0 0 10px var(--accent-color);
        }
        .hero-title { 
            font-size: 72px; font-weight: 800; line-height: 1.05; margin-bottom: 24px; 
            letter-spacing: -3px; 
            background: var(--hero-gradient);
            background-size: 200% auto;
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; 
            transition: background 0.5s ease;
            animation: textShimmer 6s linear infinite;
        }
        @keyframes textShimmer {
            to { background-position: 200% center; }
        }
        .hero-subtitle { 
            font-size: 24px; font-weight: 400; color: var(--text-secondary); margin-bottom: 32px; 
            transition: color 0.5s ease;
        }
        .hero-description { 
            font-size: 18px; color: var(--text-secondary); max-width: 600px; margin: 0 auto 48px; line-height: 1.6; 
            transition: color 0.5s ease;
        }

        /* 3D Glass Access Card */
        .digital-id-perspective {
            perspective: 1000px;
            margin-bottom: 80px;
        }
        .digital-id-card {
            width: 320px;
            height: 480px;
            background: var(--glass-bg);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            backdrop-filter: blur(20px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
            padding: 30px;
            display: flex;
            flex-direction: column;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.1s, background-color 0.5s ease, border-color 0.5s ease;
        }
        .digital-id-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 24px;
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, transparent 100%);
            pointer-events: none;
            z-index: 1;
        }
        .id-reflection {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 24px;
            background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.15), transparent 60%);
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
            z-index: 5;
            mix-blend-mode: overlay;
        }
        .digital-id-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            transform: translateZ(30px);
        }
        .id-chip {
            width: 40px;
            height: 30px;
            background: linear-gradient(135deg, #d4af37, #aa801e);
            border-radius: 6px;
            position: relative;
            overflow: hidden;
            box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        }
        .id-chip::after {
            content: ''; position: absolute; top: 50%; left: 0; right: 0; height: 1px; background: rgba(0,0,0,0.2);
        }
        .id-logo {
            font-size: 14px; font-weight: 700; color: var(--text-secondary);
            letter-spacing: 2px;
        }
        .digital-id-image-wrapper {
            width: 140px; height: 140px; border-radius: 50%;
            margin: 0 auto 32px;
            padding: 4px;
            background: linear-gradient(135deg, var(--text-secondary), transparent);
            transform: translateZ(40px);
        }
        .digital-id-image {
            width: 100%; height: 100%; border-radius: 50%; object-fit: cover;
            background: var(--bg-base);
        }
        .digital-id-info {
            text-align: center;
            transform: translateZ(30px);
        }
        .digital-id-name {
            font-size: 24px; font-weight: 700; margin-bottom: 4px; letter-spacing: -0.5px;
        }
        .digital-id-role {
            font-size: 13px; font-weight: 500; color: var(--accent-color);
            text-transform: uppercase; letter-spacing: 2px;
        }
        .digital-id-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transform: translateZ(20px);
        }
        .id-barcode {
            width: 100px; height: 20px;
            background: repeating-linear-gradient(90deg, var(--text-primary), var(--text-primary) 2px, transparent 2px, transparent 4px, var(--text-primary) 4px, var(--text-primary) 5px, transparent 5px, transparent 8px);
            opacity: 0.5;
            transition: background 0.5s ease;
        }
        .id-access {
            font-size: 10px; font-weight: 600; color: var(--text-secondary); letter-spacing: 1px; border: 1px solid var(--border-color); padding: 4px 8px; border-radius: 4px;
        }

        /* Stats */
        .stats { 
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 1px; 
            background: var(--border-color); border: 1px solid var(--border-color);
            border-radius: 16px; overflow: hidden; margin-bottom: 100px;
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .stat-item { 
            background: var(--bg-surface); padding: 48px 24px; text-align: center; 
            transition: background-color 0.5s ease;
        }
        .stat-item:hover { background: var(--bg-surface-hover); }
        .stat-number { font-size: 40px; font-weight: 700; margin-bottom: 8px; letter-spacing: -1px; }
        .stat-number span { color: var(--text-secondary); }
        .stat-label { font-size: 13px; color: var(--text-secondary); font-weight: 500; letter-spacing: 1px; text-transform: uppercase; }

        /* Marquee */
        .marquee-container { 
            overflow: hidden; white-space: nowrap; padding: 32px 0; 
            border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);
            transition: border-color 0.5s ease;
        }
        .marquee-content { 
            display: inline-block; animation: marquee 30s linear infinite; 
            font-size: 20px; font-weight: 500; color: var(--text-secondary); letter-spacing: 1px; 
        }
        .marquee-content span { display: inline-block; transition: color 0.3s; }
        .marquee-content span:hover { color: var(--text-primary); }
        .separator { color: var(--border-color); margin: 0 32px; font-weight: 300; transition: color 0.5s ease;}
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        /* About Section */
        .about { padding-top: 120px; padding-bottom: 60px; }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
        .about-text h2 { font-size: 36px; font-weight: 700; margin-bottom: 24px; letter-spacing: -1px; }
        .about-text p { font-size: 18px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px; transition: color 0.5s ease; }
        .about-visual { 
            position: relative; border-radius: 16px; overflow: hidden; padding: 0; 
            background: var(--bg-surface); border: 1px solid var(--border-color); 
            box-shadow: 0 30px 60px rgba(0,0,0,0.2);
            animation: floatCode 6s ease-in-out infinite;
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        @keyframes floatCode {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .mac-header {
            background: rgba(0,0,0,0.2); padding: 16px 20px; display: flex; gap: 8px;
            border-bottom: 1px solid var(--border-color); transition: background 0.5s ease;
        }
        [data-theme="light"] .mac-header { background: rgba(0,0,0,0.05); }
        .mac-dot { width: 12px; height: 12px; border-radius: 50%; }
        .mac-dot.red { background: #ff5f56; }
        .mac-dot.yellow { background: #ffbd2e; }
        .mac-dot.green { background: #27c93f; }
        
        .code-container { padding: 40px; position: relative; z-index: 1; }

        /* Github Heatmap */
        .github-heatmap { margin-top: 64px; text-align: center; width: 100%; }
        .github-heatmap h3 { font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px; }
        .heatmap-container { 
            display: inline-block; padding: 24px; background: var(--bg-surface);
            border: 1px solid var(--border-color); border-radius: 12px;
            overflow-x: auto; max-width: 100%; box-shadow: 0 10px 30px var(--accent-glow);
            transition: transform 0.3s ease;
        }
        .heatmap-container:hover { transform: translateY(-5px); }
        .heatmap-container img { max-width: 100%; height: auto; display: block; }
        
        /* Marquee Brand Hover Colors */
        .marquee-content span { transition: color 0.3s ease, text-shadow 0.3s ease; cursor: default; }
        .marquee-content span[data-skill="laravel"]:hover { color: #FF2D20; text-shadow: 0 0 15px rgba(255,45,32,0.6); }
        .marquee-content span[data-skill="react native"]:hover { color: #61DAFB; text-shadow: 0 0 15px rgba(97,218,251,0.6); }
        .marquee-content span[data-skill="typescript"]:hover { color: #3178C6; text-shadow: 0 0 15px rgba(49,120,198,0.6); }
        .marquee-content span[data-skill="mysql"]:hover { color: #4479A1; text-shadow: 0 0 15px rgba(68,121,161,0.6); }
        .marquee-content span[data-skill="php"]:hover { color: #777BB4; text-shadow: 0 0 15px rgba(119,123,180,0.6); }
        .marquee-content span[data-skill="tailwindcss"]:hover { color: #06B6D4; text-shadow: 0 0 15px rgba(6,182,212,0.6); }

        /* Project Modal */
        .project-modal-overlay {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.6); backdrop-filter: blur(15px); z-index: 10000;
            display: flex; justify-content: center; align-items: center;
            opacity: 0; visibility: hidden; transition: all 0.4s ease; padding: 20px;
        }
        [data-theme="light"] .project-modal-overlay { background: rgba(255,255,255,0.4); }
        .project-modal-overlay.active { opacity: 1; visibility: visible; }
        .project-modal-content {
            background: var(--bg-surface); border: 1px solid var(--border-color);
            padding: 40px; border-radius: 20px; max-width: 600px; width: 100%;
            transform: scale(0.9) translateY(30px); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3); position: relative;
        }
        .project-modal-overlay.active .project-modal-content { transform: scale(1) translateY(0); }
        .project-modal-close {
            position: absolute; top: 24px; right: 24px; background: none; border: none;
            color: var(--text-secondary); cursor: pointer; transition: color 0.2s ease;
        }
        .project-modal-close:hover { color: var(--text-primary); }
        .project-modal-logo { margin-bottom: 24px; text-align: left; }
        .project-modal-title { font-size: 28px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -0.5px; }
        .project-modal-desc { color: var(--text-secondary); line-height: 1.8; font-size: 16px; margin-bottom: 24px; }


        /* Back to Top Progress Ring */
        .back-to-top {
            position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px;
            border-radius: 50%; background: var(--bg-surface); z-index: 9999; cursor: pointer;
            display: flex; justify-content: center; align-items: center;
            opacity: 0; visibility: hidden; transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2); transform: translateY(20px); border: 1px solid var(--border-color);
        }
        .back-to-top.visible { opacity: 1; visibility: visible; transform: translateY(0); }
        .back-to-top:hover { transform: translateY(-5px); box-shadow: 0 15px 35px var(--accent-glow); }
        .progress-ring { position: absolute; top: -1px; left: -1px; transform: rotate(-90deg); }
        .progress-ring__circle { stroke-dasharray: 138.2; stroke-dashoffset: 138.2; transition: stroke-dashoffset 0.1s linear; }

        .about-visual::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, var(--accent-glow), transparent 70%); pointer-events: none; }
        .code-snippet { font-family: monospace; font-size: 15px; color: var(--text-primary); line-height: 1.7; transition: color 0.5s ease;}
        .code-snippet span.keyword { color: #c678dd; font-weight: 600; }
        .code-snippet span.string { color: #98c379; }
        .code-snippet span.function { color: #61afef; }
        .code-snippet span.property { color: #e5c07b; }

        /* Projects */
        .projects { padding-top: 120px; padding-bottom: 120px; }
        .section-header { margin-bottom: 64px; }
        .section-title { font-size: 36px; font-weight: 700; margin-bottom: 16px; letter-spacing: -1px; }
        .section-description { font-size: 18px; color: var(--text-secondary); max-width: 600px; transition: color 0.5s ease;}
        
        .filters { display: flex; gap: 12px; margin-bottom: 48px; flex-wrap: wrap; }
        .filter-btn { 
            background: transparent; border: 1px solid var(--border-color); border-radius: 8px; 
            padding: 8px 20px; font-size: 14px; font-weight: 500; color: var(--text-secondary); 
            cursor: pointer; transition: all 0.2s; 
        }
        .filter-btn:hover { border-color: var(--border-hover); color: var(--text-primary); }
        .filter-btn.active { 
            background: var(--text-primary); color: var(--bg-base); border-color: var(--text-primary); 
        }
        .filter-btn .badge { opacity: 0.7; font-size: 12px; margin-left: 6px; }
        
        .project-grid { 
            display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 24px; 
        }
        .project-card { 
            background: var(--bg-surface); border: 1px solid var(--border-color); border-radius: 16px; 
            padding: 32px; display: flex; flex-direction: column; min-height: 320px; 
            transition: all 0.3s ease, background-color 0.5s ease, border-color 0.5s ease; position: relative; overflow: hidden; 
        }
        .project-card:hover { 
            border-color: var(--border-hover); background: var(--bg-surface-hover);
            transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        /* Flashlight Effect */
        .project-card::after {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(255,255,255,0.06), transparent 40%);
            opacity: 0; transition: opacity 0.3s; pointer-events: none; z-index: 0;
        }
        [data-theme="light"] .project-card::after {
            background: radial-gradient(600px circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0,0,0,0.04), transparent 40%);
        }
        .project-card:hover::after { opacity: 1; }
        
        .project-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 40px; position: relative; z-index: 1; }
        .project-tag { 
            font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 6px; 
            background: var(--border-color); color: var(--text-secondary); letter-spacing: 0.5px;
            border: 1px solid var(--border-color); transition: background-color 0.5s ease;
        }
        
        .project-logo { 
            margin-bottom: 40px; color: var(--text-primary); opacity: 0.8; transition: opacity 0.3s; position: relative; z-index: 1;
        }
        .project-card:hover .project-logo { opacity: 1; }
        /* invert logos in light mode automatically to stay visible */
        .project-logo svg { filter: var(--filter-invert); transition: filter 0.5s ease;}
        
        .project-footer { margin-top: auto; border-top: 1px solid var(--border-color); padding-top: 24px; display: flex; justify-content: space-between; align-items: center; transition: border-color 0.5s ease; position: relative; z-index: 1; }
        .project-title { font-size: 18px; font-weight: 600; line-height: 1.4; color: var(--text-primary); transition: color 0.5s ease;}
        .project-link { 
            color: var(--text-secondary); transition: color 0.2s; display: flex; align-items: center;
        }
        .project-link:hover { color: var(--text-primary); }

        /* Contact Section */
        .contact { padding-bottom: 120px; }
        .contact-card {
            background: var(--bg-surface); border: 1px solid var(--border-color);
            border-radius: 24px; padding: 64px; position: relative; overflow: hidden;
            display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 40px;
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .contact-card::before {
            content: ''; position: absolute; top: -50%; right: -20%; width: 60%; height: 200%;
            background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
            opacity: 0.5; pointer-events: none; transition: background 0.5s ease;
        }
        .contact-content { max-width: 500px; position: relative; z-index: 1; }
        .contact-actions { display: flex; align-items: center; gap: 32px; margin-top: 40px; }
        .social-links { display: flex; gap: 16px; }
        .social-links a { color: var(--text-secondary); transition: all 0.3s ease; display: flex; }
        .social-links a:hover { color: var(--text-primary); transform: translateY(-2px); }
        
        .status-badge {
            display: inline-flex; align-items: center; gap: 12px; padding: 12px 24px;
            background: rgba(0, 0, 0, 0.2); border: 1px solid var(--border-color); border-radius: 100px;
            font-size: 14px; font-weight: 500; color: var(--text-primary); position: relative; z-index: 1;
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        [data-theme="light"] .status-badge { background: rgba(255, 255, 255, 0.5); }
        .pulse { 
            width: 8px; height: 8px; background-color: #10b981; border-radius: 50%; 
            box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); animation: pulse 2s infinite; 
        }
        @keyframes pulse { 
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); } 
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); } 
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); } 
        }

        /* Footer */
        .footer { padding: 32px 0; border-top: 1px solid var(--border-color); margin-top: 40px; transition: border-color 0.5s ease; }
        .footer-content { display: flex; justify-content: space-between; align-items: center; color: var(--text-secondary); font-size: 14px; }
        .footer-links a { color: var(--text-secondary); text-decoration: none; transition: color 0.3s ease; font-weight: 500;}
        .footer-links a:hover { color: var(--text-primary); }

        /* Custom Cursor */
        @media (pointer: fine) {
            body { cursor: none; }
            a, button, .filter-btn, .logo { cursor: none !important; }
            .cursor-dot, .cursor-outline {
                position: fixed; top: 0; left: 0; transform: translate(-50%, -50%);
                border-radius: 50%; z-index: 9999; pointer-events: none;
            }
            .cursor-dot { width: 8px; height: 8px; background-color: var(--text-primary); transition: background-color 0.5s ease; }
            .cursor-outline { 
                width: 40px; height: 40px; border: 1px solid var(--text-secondary); 
                transition: width 0.2s, height 0.2s, border-color 0.5s ease, background-color 0.2s; 
            }
        }

        /* Smooth Reveal */
        .reveal { opacity: 0; transform: translateY(20px); transition: all 0.8s cubic-bezier(0.2, 0, 0, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }

        @media (min-width: 768px) {
            .nav-links { display: flex; }
        }
        @media (max-width: 768px) {
            .hero-title { font-size: 48px; }
            .stats { grid-template-columns: repeat(2, 1fr); }
            .about-grid { grid-template-columns: 1fr; gap: 40px; }
            .project-grid { grid-template-columns: 1fr; }
            .contact-card { padding: 32px; flex-direction: column; align-items: flex-start; }
            .footer-content { flex-direction: column; gap: 16px; text-align: center; }
        }
    </style>

    <!-- Prevent Theme Flash -->
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (savedTheme === 'light' || (!savedTheme && !systemPrefersDark)) {
                document.documentElement.setAttribute('data-theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>
<body>
    <!-- Hacker Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="hacker-logo">AW_</div>
            <h2 class="preloader-text" id="hackerName"></h2>
            <div class="preloader-subtitle" id="hackerTitle"></div>
            <div class="preloader-status" id="hackerLogs"></div>
        </div>
    </div>

    <!-- Interactive Grid Background -->
    <div class="grid-background" id="gridBackground"></div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollBar"></div>
    </div>

    <!-- Custom Cursor Elements -->
    <div class="cursor-dot" id="cursorDot"></div>
    <div class="cursor-outline" id="cursorOutline"></div>

    <div class="bg-mesh"></div>
    
    <header class="navbar container reveal active">
        <div class="logo">
            <div class="logo-img-wrapper">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
            </div>
            <span class="logo-text">{{ $settings['name'] ?? 'Angga Wiranata' }}</span>
        </div>
        
        <nav class="nav-links">
            <a href="#" class="nav-link">Home</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle Theme">
                <!-- Sun Icon (shows in dark mode) -->
                <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <!-- Moon Icon (shows in light mode) -->
                <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>
        </div>
    </header>

    <section class="hero container">
        <h1 class="hero-title reveal active delay-1">{!! str_replace(' ', '<br>', $settings['name'] ?? 'ANGGA WIRANATA') !!}</h1>
        <div class="hero-badge reveal active delay-1">WEB DEVELOPER</div>
        <p class="hero-description reveal active delay-2">
            {{ $settings['description'] ?? 'Membangun aplikasi web yang efisien dan tangguh.' }}
        </p>
        
        <div class="hero-buttons reveal active delay-2" style="display: flex; gap: 16px; margin-bottom: 100px;">
            <a href="#projects" class="btn btn-primary">
                View Work
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
            </a>
            <a href="#contact" class="btn btn-outline">
                Contact Me
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </a>
        </div>

        <!-- Sleek 3D Digital Access Card -->
        <div class="digital-id-perspective reveal active delay-2">
            <div class="digital-id-card" id="digitalCard">
                <div class="id-reflection" id="cardReflection"></div>
                <div class="digital-id-header">
                    <div class="id-chip"></div>
                    <div class="id-logo">DEV_ACCESS</div>
                </div>
                
                <div class="digital-id-image-wrapper">
                    <img src="{{ asset('images/profile.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop'" alt="{{ $settings['name'] ?? 'Profile' }}" class="digital-id-image">
                </div>
                
                <div class="digital-id-info">
                    <h4 class="digital-id-name">{{ $settings['name'] ?? 'ANGGA WIRANATA' }}</h4>
                    <p class="digital-id-role">{{ $settings['title'] ?? 'WEB DEVELOPER' }}</p>
                </div>

                <div class="digital-id-footer">
                    <div class="id-barcode"></div>
                    <div class="id-access">LEVEL 05</div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats container reveal">
        @foreach($stats as $index => $stat)
        <div class="stat-item">
            <h3 class="stat-number">{{ preg_replace('/[^0-9]/', '', $stat->number) }}<span>{{ preg_replace('/[0-9]/', '', $stat->number) }}</span></h3>
            <p class="stat-label">{{ $stat->label }}</p>
        </div>
        @endforeach
    </section>

    <div class="marquee-container reveal delay-1">
        <div class="marquee-content">
            @foreach($skills as $skill)
            <span data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
            <span class="separator">+</span>
            @endforeach
            @foreach($skills as $skill)
            <span data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
            <span class="separator">+</span>
            @endforeach
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="about container reveal">
        <div class="about-grid">
            <div class="about-text">
                <h2>Lebih Dekat Dengan Saya</h2>
                <p>Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses. Fokus saya tidak hanya pada fungsionalitas, namun juga pada estetika visual yang mampu memberikan pengalaman terbaik bagi pengguna.</p>
                <p>Dengan latar belakang yang kuat di bidang teknik informatika, saya selalu berusaha untuk terus mengikuti perkembangan teknologi terbaru dan mengimplementasikannya dalam setiap proyek yang saya kerjakan.</p>
                <a href="#contact" class="btn btn-outline" style="margin-top: 16px;">Mari Berkolaborasi</a>
            </div>
            <div class="about-visual">
                <div class="mac-header">
                    <span class="mac-dot red"></span>
                    <span class="mac-dot yellow"></span>
                    <span class="mac-dot green"></span>
                </div>
                <div class="code-container">
                    <div class="code-snippet">
                        <span class="keyword">const</span> <span class="property">developer</span> = {<br>
                        &nbsp;&nbsp;<span class="property">name</span>: <span class="string">'Angga Wiranata'</span>,<br>
                        &nbsp;&nbsp;<span class="property">role</span>: <span class="string">'Web Developer'</span>,<br>
                        &nbsp;&nbsp;<span class="property">passion</span>: [<span class="string">'Design'</span>, <span class="string">'Code'</span>, <span class="string">'Innovation'</span>],<br>
                        &nbsp;&nbsp;<span class="function">solveProblem</span>: <span class="keyword">function</span>() {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="string">"Elegant Solutions"</span>;<br>
                        &nbsp;&nbsp;}<br>
                        };
                    </div>
                </div>
            </div>
        </div>

        <div class="github-heatmap reveal delay-2">
            <h3>GitHub Activity</h3>
            <div class="heatmap-container">
                <img src="https://ghchart.rshah.org/kyraaa-dev" alt="Angga Wiranata Github Chart" loading="lazy">
            </div>
        </div>
    </section>

    <section id="projects" class="projects container">
        <div class="section-header reveal">
            <h2 class="section-title">Selected Projects</h2>
            <p class="section-description">Engineered solutions for enterprise clients and institutions.</p>
        </div>
        
        <div class="filters reveal delay-1">
            <button class="filter-btn active" data-filter="all">All <span class="badge">{{ $projects->count() }}</span></button>
            <button class="filter-btn" data-filter="Unggulan">Featured <span class="badge">{{ $projects->where('category', 'Unggulan')->count() }}</span></button>
            <button class="filter-btn" data-filter="Selesai">Completed <span class="badge">{{ $projects->where('category', 'Selesai')->count() }}</span></button>
            <button class="filter-btn" data-filter="Berjalan">In Progress <span class="badge">{{ $projects->where('category', 'Berjalan')->count() }}</span></button>
        </div>

        <div class="project-grid">
            @foreach($projects as $index => $project)
            <div class="project-card reveal delay-{{ $index % 3 }}" data-category="{{ $project->category }}">
                <div class="project-header">
                    <div class="project-tag">{{ $project->category }}</div>
                </div>
                
                <div class="project-logo">
                    {!! $project->logo_svg !!}
                </div>
                
                <div class="project-footer">
                    <h3 class="project-title">{{ $project->title }}</h3>
                    <a href="{{ $project->link }}" class="project-link" aria-label="Visit project">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact container reveal">
        <div class="contact-card">
            <div class="contact-content">
                <h2 class="section-title">Let's build something great.</h2>
                <p class="section-description">Available for freelance work and full-time opportunities. If you have a project that needs some creative engineering, let's talk.</p>
                <div class="contact-actions">
                    <a href="mailto:anggawiranatafti@gmail.com" class="btn btn-primary">
                        Say Hello
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </a>
                    <div class="social-links">
                        <a href="https://github.com/kyraaa-dev" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
                        <a href="#" aria-label="LinkedIn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                    </div>
                </div>
            </div>
            <div class="status-badge">
                <span class="pulse"></span>
                Available for work
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer container reveal">
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} {{ $settings['name'] ?? 'Angga Wiranata' }}. Crafted with precision.</p>

        </div>
    </footer>

    <!-- Project Modal -->
    <div class="project-modal-overlay" id="projectModal">
        <div class="project-modal-content">
            <button class="project-modal-close" id="closeModal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <div class="project-modal-header">
                <div class="project-tag" id="modalTag"></div>
            </div>
            <div class="project-modal-logo" id="modalLogo"></div>
            <h2 class="project-modal-title" id="modalTitle"></h2>
            <p class="project-modal-desc">This is a comprehensive project built to solve complex business logic. The architecture involves custom backend API integration, seamless frontend user experience, and optimized database queries ensuring fast load times and scalability.</p>
            <a href="#" class="btn btn-primary" id="modalLink" target="_blank" style="margin-top: 24px;">Visit Project</a>
        </div>
    </div>

    <!-- Back to Top Progress Ring -->
    <div class="back-to-top" id="backToTop">
        <svg class="progress-ring" width="50" height="50">
            <circle class="progress-ring__circle" stroke="var(--text-primary)" stroke-width="3" fill="transparent" r="23" cx="25" cy="25"/>
        </svg>
        <svg class="arrow-up" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--text-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="position: relative; z-index: 2;">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Hacker Preloader Logic
            const preloader = document.getElementById('preloader');
            const logsContainer = document.getElementById('hackerLogs');
            const hackerName = document.getElementById('hackerName');
            const hackerTitle = document.getElementById('hackerTitle');
            
            const logs = [
                "[ OK ] Initializing core systems...",
                "[ OK ] Bypassing mainframe security protocols...",
                "[ OK ] Decrypting portfolio assets...",
                "[ OK ] Establishing secure connection...",
                "[ OK ] Access Granted. Welcome."
            ];

            let logIndex = 0;
            
            class TextScramble {
              constructor(el) {
                this.el = el; this.chars = '!<>-_\\\\/[]{}—=+*^?#________'; this.update = this.update.bind(this);
              }
              setText(newText) {
                const oldText = this.el.innerText; const length = Math.max(oldText.length, newText.length);
                const promise = new Promise((resolve) => this.resolve = resolve); this.queue = [];
                for (let i = 0; i < length; i++) {
                  const from = oldText[i] || ''; const to = newText[i] || '';
                  const start = Math.floor(Math.random() * 40); const end = start + Math.floor(Math.random() * 40);
                  this.queue.push({ from, to, start, end });
                }
                cancelAnimationFrame(this.frameRequest); this.frame = 0; this.update(); return promise;
              }
              update() {
                let output = ''; let complete = 0;
                for (let i = 0, n = this.queue.length; i < n; i++) {
                  let { from, to, start, end, char } = this.queue[i];
                  if (this.frame >= end) { complete++; output += to; } 
                  else if (this.frame >= start) {
                    if (!char || Math.random() < 0.28) { char = this.randomChar(); this.queue[i].char = char; }
                    output += `<span style="opacity:0.5">${char}</span>`;
                  } else { output += from; }
                }
                this.el.innerHTML = output;
                if (complete === this.queue.length) { this.resolve(); } else {
                  this.frameRequest = requestAnimationFrame(this.update); this.frame++;
                }
              }
              randomChar() { return this.chars[Math.floor(Math.random() * this.chars.length)]; }
            }

            if(preloader) {
                const fxName = new TextScramble(hackerName);
                const fxTitle = new TextScramble(hackerTitle);

                setTimeout(() => { fxName.setText("ANGGA WIRANATA"); }, 100);
                setTimeout(() => { fxTitle.setText("WEB DEVELOPER"); }, 800);

                const logInterval = setInterval(() => {
                    if (logIndex < logs.length) {
                        const line = document.createElement('div');
                        line.className = 'log-line';
                        line.innerText = logs[logIndex];
                        logsContainer.appendChild(line);
                        logIndex++;
                    } else {
                        clearInterval(logInterval);
                        setTimeout(() => {
                            preloader.style.opacity = '0';
                            preloader.style.visibility = 'hidden';
                        }, 800);
                    }
                }, 500); // 500ms per log = 2.5s total animation + 0.8s fade
            }

            // Global Mouse Tracker for Grid Background
            const gridBg = document.getElementById('gridBackground');
            window.addEventListener('mousemove', (e) => {
                if (gridBg) {
                    gridBg.style.setProperty('--mouse-x', `${e.clientX}px`);
                    gridBg.style.setProperty('--mouse-y', `${e.clientY}px`);
                }
            });

            // Scroll Progress Bar Logic
            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                document.getElementById('scrollBar').style.width = scrolled + "%";
            });

            // Custom Cursor Logic
            const cursorDot = document.getElementById('cursorDot');
            const cursorOutline = document.getElementById('cursorOutline');
            
            if (cursorDot && cursorOutline && window.matchMedia("(pointer: fine)").matches) {
                let mouseX = 0, mouseY = 0;
                let outlineX = 0, outlineY = 0;
                
                window.addEventListener('mousemove', (e) => {
                    mouseX = e.clientX;
                    mouseY = e.clientY;
                    
                    // Dot follows instantly
                    cursorDot.style.left = `${mouseX}px`;
                    cursorDot.style.top = `${mouseY}px`;
                });
                
                // Outline follows with spring physics lag
                function animateCursor() {
                    let distX = mouseX - outlineX;
                    let distY = mouseY - outlineY;
                    
                    outlineX += distX * 0.2;
                    outlineY += distY * 0.2;
                    
                    cursorOutline.style.left = `${outlineX}px`;
                    cursorOutline.style.top = `${outlineY}px`;
                    
                    requestAnimationFrame(animateCursor);
                }
                animateCursor();

                // Hover magnetic effects
                const hoverElements = document.querySelectorAll('a, button, .filter-btn, .logo, .digital-id-card');
                hoverElements.forEach(el => {
                    el.addEventListener('mouseenter', () => {
                        cursorOutline.style.width = '60px';
                        cursorOutline.style.height = '60px';
                        const isLight = document.documentElement.getAttribute('data-theme') === 'light';
                        cursorOutline.style.backgroundColor = isLight ? 'rgba(0,0,0,0.05)' : 'rgba(255,255,255,0.05)';
                    });
                    el.addEventListener('mouseleave', () => {
                        cursorOutline.style.width = '40px';
                        cursorOutline.style.height = '40px';
                        cursorOutline.style.backgroundColor = 'transparent';
                    });
                });
            }

            // Theme Toggle Logic
            const themeToggle = document.getElementById('themeToggle');
            const iconSun = document.getElementById('icon-sun');
            const iconMoon = document.getElementById('icon-moon');
            const htmlElement = document.documentElement;

            // Project Card Flashlight Effect (Vercel Style)
            const pCards = document.querySelectorAll('.project-card');
            pCards.forEach(card => {
                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });

            // Set initial toggle icons based on the theme already set in <head>
            if (htmlElement.getAttribute('data-theme') === 'light') {
                iconMoon.style.display = 'block';
                iconSun.style.display = 'none';
            }

            themeToggle.addEventListener('click', () => {
                const currentTheme = htmlElement.getAttribute('data-theme');
                if (currentTheme === 'dark') {
                    setTheme('light');
                } else {
                    setTheme('dark');
                }
            });

            function setTheme(theme) {
                htmlElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                
                if (theme === 'light') {
                    iconSun.style.display = 'none';
                    iconMoon.style.display = 'block';
                } else {
                    iconSun.style.display = 'block';
                    iconMoon.style.display = 'none';
                }
            }

            // 3D Card Hover Effect (Vercel/Stripe style)
            const card = document.getElementById('digitalCard');
            const reflection = document.getElementById('cardReflection');
            
            if(card) {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left; // x position within the element
                    const y = e.clientY - rect.top;  // y position within the element
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -10; // Max rotation 10deg
                    const rotateY = ((x - centerX) / centerX) * 10;
                    
                    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                    
                    // Update reflection position based on theme
                    const isLight = document.documentElement.getAttribute('data-theme') === 'light';
                    const reflectColor = isLight ? 'rgba(0,0,0,0.05)' : 'rgba(255,255,255,0.15)';
                    
                    reflection.style.opacity = '1';
                    reflection.style.background = `radial-gradient(circle at ${x}px ${y}px, ${reflectColor}, transparent 60%)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = `rotateX(0deg) rotateY(0deg)`;
                    reflection.style.opacity = '0';
                    card.style.transition = 'transform 0.5s ease-out';
                });
                
                card.addEventListener('mouseenter', () => {
                    card.style.transition = 'none'; // Remove transition when actively hovering for instant response
                });
            }

            // Filters
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    e.currentTarget.classList.add('active');

                    const filter = e.currentTarget.getAttribute('data-filter');
                    
                    projectCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'flex';
                            setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'translateY(0)'; }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(10px)';
                            setTimeout(() => { card.style.display = 'none'; }, 300);
                        }
                    });
                });
            });

            // Reveal Animations
            const revealElements = document.querySelectorAll('.reveal');
            const revealOptions = { threshold: 0.1, rootMargin: "0px 0px -20px 0px" };
            const revealOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);

            revealElements.forEach(el => {
                revealOnScroll.observe(el);
            });

            // Project Modals
            const projectModal = document.getElementById('projectModal');
            const closeModal = document.getElementById('closeModal');
            
            pCards.forEach(card => {
                card.style.cursor = 'pointer';
                card.addEventListener('click', () => {
                    const title = card.querySelector('.project-title').innerText;
                    const category = card.getAttribute('data-category');
                    const link = card.querySelector('.project-link').getAttribute('href');
                    const logoHtml = card.querySelector('.project-logo').innerHTML;
                    
                    document.getElementById('modalTitle').innerText = title;
                    document.getElementById('modalTag').innerText = category;
                    document.getElementById('modalLogo').innerHTML = logoHtml;
                    document.getElementById('modalLink').setAttribute('href', link);
                    
                    projectModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });
            
            closeModal.addEventListener('click', () => {
                projectModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
            
            projectModal.addEventListener('click', (e) => {
                if(e.target === projectModal) {
                    projectModal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });

            // Back to Top Progress Ring
            const backToTop = document.getElementById('backToTop');
            const circle = document.querySelector('.progress-ring__circle');
            if(circle) {
                const radius = circle.r.baseVal.value;
                const circumference = radius * 2 * Math.PI;
                circle.style.strokeDasharray = `${circumference} ${circumference}`;
                circle.style.strokeDashoffset = `${circumference}`;

                window.addEventListener('scroll', () => {
                    const scrollTotal = document.documentElement.scrollTop || document.body.scrollTop;
                    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    const scrollPercent = height > 0 ? scrollTotal / height : 0;
                    const offset = circumference - scrollPercent * circumference;
                    circle.style.strokeDashoffset = offset;

                    if (scrollTotal > 300) {
                        backToTop.classList.add('visible');
                    } else {
                        backToTop.classList.remove('visible');
                    }
                });

                backToTop.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }

            // Magnetic Buttons
            const magneticBtns = document.querySelectorAll('.hero-actions .btn, .hero-buttons .btn');
            magneticBtns.forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    btn.style.transition = 'none';
                });
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transition = 'transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), background 0.3s ease, border-color 0.3s ease, color 0.3s ease';
                    btn.style.transform = `translate(0, 0)`;
                });
            });

        });
    </script>
</body>
</html>
