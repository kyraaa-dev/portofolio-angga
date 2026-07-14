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
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://kyraaa.pages.dev/">
    <meta name="theme-color" content="#000000">

    <!-- Schema.org JSON-LD for Google -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ProfilePage",
      "mainEntity": {
        "@@type": "Person",
        "name": "{{ $settings['name'] ?? 'Angga Wiranata' }}",
        "jobTitle": "Web Developer",
        "url": "https://kyraaa.pages.dev/",
        "image": "https://kyraaa.pages.dev/images/profile.jpg",
        "sameAs": [
          "https://github.com/kyraaa-dev",
          "https://www.linkedin.com/in/angga-wiranata-320837420"
        ],
        "description": "Professional Web Developer based in Indonesia, specializing in building modern web applications with Laravel, React, and modern CSS."
      }
    }
    </script>

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kyraaa.pages.dev/">
    <meta property="og:site_name" content="Angga Wiranata Portfolio">
    <meta property="og:title" content="{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}">
    <meta property="og:description" content="{{ $settings['description'] ?? 'Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses.' }}">
    <meta property="og:image" content="https://kyraaa.pages.dev/images/og-image.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="fb:app_id" content="0">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $settings['name'] ?? 'Angga Wiranata' }} | {{ $settings['title'] ?? 'Professional Web Developer' }}">
    <meta property="twitter:description" content="{{ $settings['description'] ?? 'Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses.' }}">
    <meta property="twitter:image" content="https://kyraaa.pages.dev/images/og-image.png">

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

        /* ===== COLLAB BUTTON ===== */
        .btn-collab {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 14px 32px;
            border-radius: 100px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid rgba(16, 185, 129, 0.4);
            background: linear-gradient(135deg, rgba(16,185,129,0.08) 0%, rgba(52,211,153,0.04) 100%);
            color: #10b981;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 20px;
            letter-spacing: 0.3px;
        }
        /* Shimmer sweep */
        .btn-collab::before {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
            transform: skewX(-20deg);
            transition: none;
        }
        .btn-collab:hover::before {
            left: 160%;
            transition: left 0.6s ease;
        }
        /* Glow on hover */
        .btn-collab:hover {
            background: linear-gradient(135deg, rgba(16,185,129,0.18) 0%, rgba(52,211,153,0.1) 100%);
            border-color: rgba(16, 185, 129, 0.8);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.3), 0 0 40px rgba(16, 185, 129, 0.1);
            transform: translateY(-2px);
            color: #34d399;
        }
        /* Pulse ring */
        .btn-collab::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 100px;
            border: 1px solid rgba(16, 185, 129, 0.3);
            animation: collabRing 2s ease-out infinite;
            pointer-events: none;
        }
        @keyframes collabRing {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.15); opacity: 0; }
        }
        /* Arrow icon animation */
        .btn-collab .collab-arrow {
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }
        .btn-collab:hover .collab-arrow {
            transform: translateX(4px) rotate(-45deg);
        }
        /* Dot indicator */
        .btn-collab .collab-dot {
            width: 7px;
            height: 7px;
            background: #10b981;
            border-radius: 50%;
            box-shadow: 0 0 6px #10b981;
            animation: dotPulse 1.5s ease-in-out infinite;
            flex-shrink: 0;
        }
        @keyframes dotPulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(0.8); }
        }

        /* Navbar */
        .navbar { 
            display: flex; align-items: center; justify-content: space-between; 
            padding: 20px 0; position: sticky; top: 0; z-index: 100; 
            background: var(--nav-bg); backdrop-filter: saturate(180%) blur(12px); 
            border-bottom: 1px solid var(--border-color); 
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .logo { display: flex; align-items: center; gap: 16px; cursor: pointer; flex: 1; }
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

        /* Scroll Progress Bar - Premium Neon */
        .scroll-progress-container { 
            position: fixed; top: 0; left: 0; width: 100vw; height: 3px; 
            z-index: 9999; background: transparent; 
        }
        .scroll-progress-bar { 
            height: 100%; width: 0%; 
            background: linear-gradient(90deg, #10b981 0%, #34d399 40%, #6ee7b7 70%, #10b981 100%);
            background-size: 200% 100%;
            box-shadow: 0 0 8px rgba(16, 185, 129, 0.8), 0 0 20px rgba(16, 185, 129, 0.4), 0 0 40px rgba(16, 185, 129, 0.2);
            transition: width 0.08s linear;
            border-radius: 0 2px 2px 0;
            animation: shimmerBar 2s linear infinite;
            position: relative;
        }
        .scroll-progress-bar::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 6px;
            height: 6px;
            background: #a7f3d0;
            border-radius: 50%;
            box-shadow: 0 0 6px #10b981, 0 0 12px #10b981;
        }
        @keyframes shimmerBar {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

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

        /* Cinematic Preloader */
        .preloader {
            position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
            background: #050505; z-index: 999999; display: flex; justify-content: center; align-items: center;
            overflow: hidden;
            transition: opacity 1.5s ease-out, visibility 1.5s ease-out;
        }
        #matrixCanvas {
            position: absolute; top: 0; left: 0; width: 100vw; height: 100vh;
            display: block; z-index: 1; background: #000;
        }
        .preloader.fade-out {
            opacity: 0; visibility: hidden;
        }
        .preloader::after {
            content: ''; position: absolute; top: 0; left: 0; width: 100vw; height: 100vh;
            background: #fff; z-index: 100; opacity: 0; pointer-events: none;
            transition: opacity 0.2s ease-out;
        }
        .preloader.overload::after { opacity: 1; }

        .preloader-percentage-new {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            font-size: 8vw; font-weight: 900; color: transparent;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); z-index: 10;
            font-family: 'Inter', sans-serif; pointer-events: none;
            transition: opacity 0.5s ease;
        }
        .preloader-percentage-new::before {
            content: attr(data-text); position: absolute; top: 0; left: 0; color: #fff;
            width: var(--progress, 0%); overflow: hidden; white-space: nowrap;
        }
        .preloader.slide-up .preloader-percentage-new { opacity: 0; }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }

        .nav-links { display: none; gap: 32px; align-items: center; }
        .nav-link { color: var(--text-secondary); text-decoration: none; font-size: 15px; font-weight: 500; transition: color 0.3s ease; }
        .nav-link:hover { color: var(--text-primary); }
        .nav-actions { display: flex; align-items: center; justify-content: flex-end; gap: 16px; flex: 1; }

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

        /* 🎙️ Voice Introduction */
        .voice-intro { display: flex; justify-content: center; align-items: center; gap: 12px; margin-bottom: 48px; margin-top: -24px; flex-wrap: wrap; }
        .voice-lang-group { display: flex; gap: 6px; }
        .voice-lang-btn {
            padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 600;
            font-family: 'Inter', sans-serif; cursor: pointer; border: 1px solid var(--border-color);
            background: var(--bg-surface); color: var(--text-secondary);
            transition: all 0.3s ease;
        }
        .voice-lang-btn:hover { border-color: var(--accent-color); color: var(--accent-color); }
        .voice-lang-btn.active { background: var(--accent-color); border-color: var(--accent-color); color: #000; font-weight: 700; }
        .voice-btn {
            display: flex; align-items: center; gap: 14px;
            background: rgba(16, 185, 129, 0.07); border: 1px solid rgba(16, 185, 129, 0.25);
            color: var(--text-primary); font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 600;
            padding: 12px 22px 12px 12px; border-radius: 100px; cursor: pointer;
            transition: all 0.3s ease; backdrop-filter: blur(8px); letter-spacing: 0.3px;
        }
        .voice-btn:hover { background: rgba(16, 185, 129, 0.15); border-color: var(--accent-color); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(16,185,129,0.2); }
        .voice-btn.playing { background: rgba(16, 185, 129, 0.2); border-color: var(--accent-color); box-shadow: 0 0 20px rgba(16,185,129,0.3); }
        .voice-icon-wrap {
            width: 38px; height: 38px; border-radius: 50%;
            background: var(--accent-color); display: flex; align-items: center; justify-content: center;
            position: relative; flex-shrink: 0; color: #000;
        }
        .voice-pulse {
            position: absolute; inset: -4px; border-radius: 50%;
            border: 2px solid var(--accent-color); opacity: 0.5;
            animation: voicePulse 2s ease-out infinite;
        }
        @keyframes voicePulse {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.6); opacity: 0; }
        }
        .voice-btn.playing .voice-pulse { animation-duration: 0.8s; }
        .equalizer { display: flex; align-items: flex-end; gap: 3px; height: 18px; }
        .eq-bar {
            width: 3px; border-radius: 2px; background: #000;
            animation: eqDance 0.6s ease-in-out infinite alternate;
        }
        .eq-bar:nth-child(1) { animation-delay: 0s; height: 8px; }
        .eq-bar:nth-child(2) { animation-delay: 0.1s; height: 14px; }
        .eq-bar:nth-child(3) { animation-delay: 0.2s; height: 10px; }
        .eq-bar:nth-child(4) { animation-delay: 0.15s; height: 16px; }
        .eq-bar:nth-child(5) { animation-delay: 0.05s; height: 7px; }
        @keyframes eqDance {
            0% { transform: scaleY(0.3); }
            100% { transform: scaleY(1.2); }
        }
        .voice-label { color: var(--text-primary); transition: color 0.3s ease; }

        /* 3D Glass Access Card (Optimized & Premium) */
        .digital-id-perspective {
            perspective: 1000px;
            margin-bottom: 80px;
            position: relative;
        }
        /* Static premium glow instead of animated pulse */
        .digital-id-perspective::before {
            content: ''; position: absolute; top: 50%; left: 50%; width: 100%; height: 100%;
            background: linear-gradient(45deg, rgba(0, 255, 249, 0.15), rgba(255, 0, 193, 0.15));
            transform: translate(-50%, -50%); filter: blur(50px);
            z-index: -1; pointer-events: none; border-radius: 50%;
        }
        .digital-id-card {
            width: 320px;
            height: 480px;
            background: linear-gradient(135deg, rgba(20,20,20,0.8) 0%, rgba(5,5,5,0.9) 100%);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top-color: rgba(255, 255, 255, 0.2);
            border-left-color: rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.1);
            padding: 30px;
            display: flex;
            flex-direction: column;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.1s; /* Only for JS mouse move */
        }
        /* Subtle inner noise/texture */
        .digital-id-card::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 24px;
            background-image: url('data:image/svg+xml,%3Csvg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"%3E%3Cfilter id="noiseFilter"%3E%3CfeTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="3" stitchTiles="stitch"/%3E%3C/filter%3E%3Crect width="100%25" height="100%25" filter="url(%23noiseFilter)" opacity="0.05"/%3E%3C/svg%3E');
            pointer-events: none; z-index: 1; opacity: 0.5;
        }
        .id-reflection {
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 24px;
            background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.1), transparent 60%);
            opacity: 0; transition: opacity 0.3s; pointer-events: none; z-index: 5; mix-blend-mode: overlay;
        }
        .digital-id-header {
            display: flex; justify-content: space-between; align-items: flex-start;
            margin-bottom: 40px; transform: translateZ(20px);
        }
        .id-chip {
            width: 44px; height: 32px;
            background: linear-gradient(135deg, #e5c07b, #d4af37, #aa801e);
            border-radius: 6px; position: relative; overflow: hidden;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.4), 0 2px 4px rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .id-chip::after {
            content: ''; position: absolute; top: 50%; left: 0; right: 0; height: 1px; background: rgba(0,0,0,0.3);
        }
        .id-chip::before {
            content: ''; position: absolute; top: 0; bottom: 0; left: 50%; width: 1px; background: rgba(0,0,0,0.3);
        }
        .id-logo {
            font-size: 14px; font-weight: 800; color: #fff; letter-spacing: 3px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        .digital-id-image-wrapper {
            width: 140px; height: 140px; border-radius: 50%;
            margin: 0 auto 32px; padding: 4px;
            background: linear-gradient(135deg, rgba(255,255,255,0.4), rgba(255,255,255,0.05));
            transform: translateZ(30px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            position: relative;
        }
        .digital-id-image {
            width: 100%; height: 100%; border-radius: 50%; object-fit: cover;
            background: #111; position: relative; z-index: 2;
        }
        .digital-id-info {
            text-align: center; transform: translateZ(25px);
        }
        .digital-id-name {
            font-size: 24px; font-weight: 800; margin-bottom: 4px; letter-spacing: -0.5px;
            color: #ffffff; text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .digital-id-role {
            font-size: 13px; font-weight: 700; color: #00fff9;
            text-transform: uppercase; letter-spacing: 4px;
        }
        .glitch-role {
            position: relative;
            display: inline-block;
            text-shadow: 0 0 10px rgba(0, 255, 249, 0.8);
            animation: textFlicker 3s infinite alternate;
        }
        .glitch-role::before, .glitch-role::after {
            content: attr(data-text);
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        }
        .glitch-role::before {
            left: 2px; text-shadow: -1px 0 rgba(255,0,0,0.7);
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim-2 3s infinite linear alternate-reverse;
        }
        .glitch-role::after {
            left: -2px; text-shadow: -1px 0 rgba(0,0,255,0.7);
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2.5s infinite linear alternate-reverse;
        }
        @keyframes glitch-anim {
            0% { clip: rect(10px, 9999px, 8px, 0); }
            20% { clip: rect(32px, 9999px, 86px, 0); }
            40% { clip: rect(65px, 9999px, 12px, 0); }
            60% { clip: rect(12px, 9999px, 90px, 0); }
            80% { clip: rect(78px, 9999px, 43px, 0); }
            100% { clip: rect(3px, 9999px, 25px, 0); }
        }
        @keyframes glitch-anim-2 {
            0% { clip: rect(65px, 9999px, 100px, 0); }
            20% { clip: rect(10px, 9999px, 32px, 0); }
            40% { clip: rect(45px, 9999px, 73px, 0); }
            60% { clip: rect(87px, 9999px, 12px, 0); }
            80% { clip: rect(34px, 9999px, 56px, 0); }
            100% { clip: rect(12px, 9999px, 89px, 0); }
        }
        @keyframes textFlicker {
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { opacity: 1; text-shadow: 0 0 10px rgba(0, 255, 249, 0.8), 0 0 20px rgba(0, 255, 249, 0.4); }
            20%, 24%, 55% { opacity: 0.8; text-shadow: none; }
        }
        
        .glitch-text {
            position: relative;
            display: inline-block;
            animation: glitchTextFlicker 3s infinite alternate;
        }
        .glitch-text::before, .glitch-text::after {
            content: attr(data-text);
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        }
        .glitch-text::before {
            left: 2px; text-shadow: -1px 0 rgba(255,0,0,0.7);
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim-2 3s infinite linear alternate-reverse;
        }
        .glitch-text::after {
            left: -2px; text-shadow: -1px 0 rgba(0,0,255,0.7);
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2.5s infinite linear alternate-reverse;
        }
        @keyframes glitchTextFlicker {
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { opacity: 1; }
            20%, 24%, 55% { opacity: 0.8; }
        }

        .digital-id-footer {
            margin-top: auto; display: flex; justify-content: space-between; align-items: center;
            transform: translateZ(20px);
        }
        .id-barcode {
            width: 100px; height: 24px;
            background: repeating-linear-gradient(90deg, #fff, #fff 2px, transparent 2px, transparent 4px, #fff 4px, #fff 5px, transparent 5px, transparent 8px);
            opacity: 0.4;
        }
        .id-access {
            font-size: 10px; font-weight: 700; color: #fff; letter-spacing: 2px; 
            border: 1px solid rgba(255,255,255,0.2); padding: 6px 10px; border-radius: 4px;
            background: rgba(255,255,255,0.05);
        }
        
        /* Light Mode Overrides for Digital ID Card */
        [data-theme="light"] .digital-id-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.85) 0%, rgba(245,245,245,0.95) 100%);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top-color: rgba(255, 255, 255, 1);
            border-left-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 30px 60px rgba(0,0,0,0.1), inset 0 1px 0 rgba(255,255,255,1);
        }
        [data-theme="light"] .digital-id-perspective::before {
            background: linear-gradient(45deg, rgba(0, 112, 243, 0.15), rgba(0, 255, 249, 0.15));
        }
        [data-theme="light"] .digital-id-name {
            color: #111111;
            text-shadow: none;
        }
        [data-theme="light"] .digital-id-role {
            color: var(--accent-color);
        }
        [data-theme="light"] .id-logo {
            color: #444444;
            text-shadow: none;
        }
        [data-theme="light"] .id-barcode {
            background: repeating-linear-gradient(90deg, #444, #444 2px, transparent 2px, transparent 4px, #444 4px, #444 5px, transparent 5px, transparent 8px);
        }
        [data-theme="light"] .id-access {
            color: #444444;
            border-color: rgba(0,0,0,0.15);
            background: rgba(0,0,0,0.03);
        }
        [data-theme="light"] .digital-id-image-wrapper {
            background: linear-gradient(135deg, rgba(0,0,0,0.1), transparent);
        }
        [data-theme="light"] .digital-id-card::before {
            opacity: 0.15; /* Reduce noise visibility in light mode */
        }
        
        /* Light Mode Overrides for Preloader */


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

        /* 3D Giant Marquee */
        .marquee-section {
            padding: 80px 0; overflow: hidden; background: var(--bg-base);
            border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);
            position: relative; display: flex; flex-direction: column; gap: 24px;
            transform: rotate(-5deg) scale(1.1); transform-origin: center; margin: 120px 0;
            box-shadow: inset 0 20px 50px rgba(0,0,0,0.5), inset 0 -20px 50px rgba(0,0,0,0.5);
            z-index: 10;
        }
        [data-theme="light"] .marquee-section { box-shadow: inset 0 20px 50px rgba(0,0,0,0.05), inset 0 -20px 50px rgba(0,0,0,0.05); }
        .marquee-container { 
            overflow: hidden; white-space: nowrap; display: flex; width: 100vw;
        }
        .marquee-content { 
            display: inline-flex; animation: marquee-left 40s linear infinite; 
            align-items: center; padding-right: 48px;
            will-change: transform;
        }
        .marquee-content.reverse { animation: marquee-right 40s linear infinite; }
        
        .marquee-item {
            font-size: 3vw; font-weight: 900; letter-spacing: -1px; text-transform: uppercase;
            margin-right: 48px; line-height: 1; font-family: 'Inter', sans-serif; font-style: italic;
            color: transparent; -webkit-text-stroke: 1.5px var(--text-secondary); opacity: 0.5;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), color 0.3s ease, text-shadow 0.3s ease; cursor: default;
        }
        @media (max-width: 768px) { .marquee-item { font-size: 5vw; } }
        .marquee-item.solid {
            color: var(--text-primary); -webkit-text-stroke: 0px; opacity: 1;
        }
        .marquee-item:hover {
            color: var(--text-primary); -webkit-text-stroke: 0px; opacity: 1;
            transform: scale(1.1) rotate(2deg); text-shadow: 0 10px 30px var(--accent-glow);
        }
        
        @keyframes marquee-left { 0% { transform: translate3d(0, 0, 0); } 100% { transform: translate3d(-50%, 0, 0); } }
        @keyframes marquee-right { 0% { transform: translate3d(-50%, 0, 0); } 100% { transform: translate3d(0, 0, 0); } }

        /* Marquee Brand Hover Colors */
        .marquee-item { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), color 0.3s ease, text-shadow 0.3s ease; cursor: default; }
        .marquee-item[data-skill="laravel"]:hover { color: #FF2D20 !important; text-shadow: 0 0 15px rgba(255,45,32,0.6) !important; }
        .marquee-item[data-skill="react native"]:hover { color: #61DAFB !important; text-shadow: 0 0 15px rgba(97,218,251,0.6) !important; }
        .marquee-item[data-skill="typescript"]:hover { color: #3178C6 !important; text-shadow: 0 0 15px rgba(49,120,198,0.6) !important; }
        .marquee-item[data-skill="mysql"]:hover { color: #4479A1 !important; text-shadow: 0 0 15px rgba(68,121,161,0.6) !important; }
        .marquee-item[data-skill="php"]:hover { color: #777BB4 !important; text-shadow: 0 0 15px rgba(119,123,180,0.6) !important; }
        .marquee-item[data-skill="tailwindcss"]:hover { color: #06B6D4 !important; text-shadow: 0 0 15px rgba(6,182,212,0.6) !important; }
        .marquee-item[data-skill="interface design"]:hover { color: #F24E1E !important; text-shadow: 0 0 15px rgba(242,78,30,0.6) !important; }

        /* About Section */
        .about { padding-top: 120px; padding-bottom: 60px; }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
        .about-text h2 { font-size: 36px; font-weight: 700; margin-bottom: 24px; letter-spacing: -1px; }
        .about-text p { font-size: 18px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px; transition: color 0.5s ease; }
        .about-visual { 
            position: relative; border-radius: 16px; overflow: hidden; padding: 0; 
            background: var(--bg-surface); border: 1px solid var(--border-color); 
            box-shadow: 0 30px 60px rgba(0,0,0,0.2);
            transition: background-color 0.5s ease, border-color 0.5s ease;
        }
        .radar-wrapper { padding: 0 24px 24px 24px; }
        /* Profile Photo Neon Ring */
        @keyframes glowPulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
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

        /* ===== RADAR CHART ===== */
        .radar-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 28px;
        }
        .radar-chart-container {
            position: relative;
            width: 280px;
            height: 280px;
            flex-shrink: 0;
        }
        .radar-chart-container svg {
            overflow: visible;
            filter: drop-shadow(0 0 16px rgba(16, 185, 129, 0.2));
        }
        /* Polygon data area */
        .radar-data-polygon {
            fill: rgba(16, 185, 129, 0.12);
            stroke: #10b981;
            stroke-width: 1.5;
            stroke-linejoin: round;
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .radar-grid-polygon {
            fill: none;
            stroke: rgba(255,255,255,0.06);
            stroke-width: 1;
        }
        .radar-axis-line {
            stroke: rgba(255,255,255,0.08);
            stroke-width: 1;
        }
        .radar-dot {
            fill: #10b981;
            filter: drop-shadow(0 0 4px #10b981);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .radar-label-group text {
            font-family: var(--font-family);
            font-size: 11px;
            font-weight: 600;
            fill: var(--text-secondary);
            text-anchor: middle;
            dominant-baseline: central;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        /* Skill bars below */
        .radar-skill-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .radar-skill-item {
            display: grid;
            grid-template-columns: 110px 1fr 36px;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 4px 0;
        }
        .radar-skill-name {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }
        .radar-skill-item:hover .radar-skill-name { color: #10b981; }
        .radar-skill-track {
            height: 4px;
            background: rgba(255,255,255,0.06);
            border-radius: 100px;
            overflow: hidden;
        }
        .radar-skill-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #10b981, #34d399);
            border-radius: 100px;
            transition: width 1.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 0 6px rgba(16, 185, 129, 0.6);
        }
        .radar-skill-pct {
            font-size: 12px;
            font-weight: 700;
            color: #10b981;
            text-align: right;
        }

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
        
        /* Services Section */
        .services { padding-top: 120px; padding-bottom: 60px; }
        .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 64px; }
        .service-card {
            background: var(--bg-surface); border: 1px solid var(--border-color);
            border-radius: 16px; padding: 40px; position: relative; overflow: hidden;
            transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
            backdrop-filter: blur(10px);
        }
        .service-card::before {
            content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
            background: radial-gradient(circle at center, var(--accent-glow) 0%, transparent 60%);
            opacity: 0; transition: opacity 0.5s ease; pointer-events: none; z-index: 0;
        }
        .service-card:hover {
            transform: translateY(-10px); border-color: var(--accent-color);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .service-card:hover::before { opacity: 0.15; }
        .service-icon {
            width: 60px; height: 60px; border-radius: 12px; background: rgba(16, 185, 129, 0.1);
            display: flex; align-items: center; justify-content: center; margin-bottom: 24px;
            color: var(--accent-color); position: relative; z-index: 1;
            transition: transform 0.4s ease, background 0.4s ease;
        }
        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg); background: var(--accent-color); color: #000;
        }
        .service-title { font-size: 24px; font-weight: 700; margin-bottom: 16px; color: var(--text-primary); position: relative; z-index: 1; }
        .service-desc { font-size: 16px; color: var(--text-secondary); line-height: 1.6; position: relative; z-index: 1; }

        /* ⚡ Build My Site Replay Mode */
        .replay-btn {
            position: fixed; bottom: 32px; left: 32px; z-index: 9000;
            display: flex; align-items: center; gap: 10px;
            background: rgba(0, 0, 0, 0.8); border: 1px solid var(--accent-color);
            color: var(--accent-color); font-size: 13px; font-weight: 600;
            font-family: 'Inter', sans-serif; padding: 12px 20px; border-radius: 100px;
            cursor: pointer; backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(16,185,129,0.2);
            transition: all 0.3s ease; letter-spacing: 0.5px;
        }
        .replay-btn:hover {
            background: var(--accent-color); color: #000;
            box-shadow: 0 0 40px rgba(16,185,129,0.5); transform: translateY(-3px);
        }
        .replay-btn svg { transition: transform 0.3s ease; }
        .replay-btn:hover svg { transform: scale(1.2); }

        .replay-terminal {
            position: fixed; bottom: 90px; left: 32px; width: 380px;
            background: #0d0d0d; border: 1px solid rgba(16,185,129,0.3);
            border-radius: 12px; z-index: 9001; overflow: hidden;
            opacity: 0; pointer-events: none; transform: translateY(20px) scale(0.95);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 20px 60px rgba(0,0,0,0.5), 0 0 30px rgba(16,185,129,0.1);
        }
        .replay-terminal.visible { opacity: 1; pointer-events: all; transform: translateY(0) scale(1); }
        .replay-terminal-header {
            background: #1a1a1a; padding: 10px 16px;
            display: flex; align-items: center; gap: 8px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        .t-dot { width: 12px; height: 12px; border-radius: 50%; }
        .t-red { background: #ff5f56; } .t-yellow { background: #ffbd2e; } .t-green { background: #27c93f; }
        .t-title { font-size: 12px; color: rgba(255,255,255,0.4); font-family: monospace; margin-left: 4px; }
        .replay-terminal-body {
            padding: 20px; font-family: 'Courier New', monospace; font-size: 13px;
            color: #10b981; line-height: 2; min-height: 160px; max-height: 220px; overflow-y: auto;
        }
        .t-line { display: flex; align-items: center; gap: 8px; opacity: 0; animation: tLineIn 0.3s forwards; }
        .t-prompt { color: rgba(255,255,255,0.3); }
        .t-check { color: #27c93f; }
        .t-error { color: #ff5f56; }
        @keyframes tLineIn { to { opacity: 1; } }

        .replay-skip {
            position: fixed; top: 24px; right: 24px; z-index: 99999;
            background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2);
            color: #fff; font-size: 13px; font-weight: 600; font-family: 'Inter', sans-serif;
            padding: 8px 16px; border-radius: 100px; cursor: pointer;
            backdrop-filter: blur(10px); transition: all 0.3s ease;
        }
        .replay-skip:hover { background: rgba(255,255,255,0.2); }

        /* Replay animation classes */
        .replay-hiding .reveal { opacity: 0 !important; transform: translateY(30px) !important; transition: all 0.5s ease !important; }
        .replay-hiding .reveal.active { opacity: 0 !important; transform: translateY(30px) !important; }
        
        /* Orbit Ecosystem */
        .orbit-section {
            padding: 80px 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .orbit-container {
            position: relative;
            width: 400px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px auto;
        }
        .orbit-center {
            position: absolute;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--text-primary), var(--accent-color));
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 800;
            font-size: 24px;
            color: var(--bg-base);
            box-shadow: 0 0 40px rgba(0, 255, 249, 0.4);
            z-index: 10;
        }
        .orbit-ring {
            position: absolute;
            border-radius: 50%;
            border: 1px dashed rgba(255, 255, 255, 0.15);
            animation: orbit-spin linear infinite;
        }
        [data-theme="light"] .orbit-ring {
            border-color: rgba(0, 0, 0, 0.15);
        }
        .orbit-ring-1 { width: 220px; height: 220px; animation-duration: 15s; }
        .orbit-ring-2 { width: 340px; height: 340px; animation-duration: 25s; animation-direction: reverse; }
        .orbit-ring-3 { width: 460px; height: 460px; animation-duration: 35s; }
        
        .orbit-item {
            position: absolute;
            width: 44px;
            height: 44px;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 50%; left: 50%;
            transform-origin: center;
            font-size: 11px;
            font-weight: 600;
            color: var(--text-primary);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .orbit-item.rev {
            /* Reverse the rotation so text/logo stays upright */
            animation: orbit-spin-rev linear infinite;
        }
        .orbit-ring-1 .orbit-item.rev { animation-duration: 15s; }
        .orbit-ring-2 .orbit-item.rev { animation-duration: 25s; animation-direction: reverse; }
        .orbit-ring-3 .orbit-item.rev { animation-duration: 35s; }

        @keyframes orbit-spin {
            100% { transform: rotate(360deg); }
        }
        @keyframes orbit-spin-rev {
            100% { transform: rotate(-360deg); }
        }

        /* Responsive Orbit */
        @media (max-width: 768px) {
            .orbit-container {
                transform: scale(0.8);
                margin: 0 auto;
            }
            .orbit-section {
                padding: 40px 0;
            }
        }
        @media (max-width: 480px) {
            .orbit-container {
                transform: scale(0.65);
                margin: -40px auto;
            }
        }

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
        .project-modal-title { font-size: 20px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -0.5px; line-height: 1.4; }
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
        /* Timeline */
        .experience { padding-top: 120px; padding-bottom: 120px; }
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 20px;
            width: 2px;
            background: var(--border-color);
            transition: background-color 0.5s ease;
        }
        @media (min-width: 768px) {
            .timeline::before {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        .timeline-item {
            position: relative;
            margin-bottom: 48px;
            width: 100%;
        }
        .timeline-item:last-child {
            margin-bottom: 0;
        }
        .timeline-dot {
            position: absolute;
            left: 20px;
            top: 16px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--bg-base);
            border: 2px solid var(--accent-color);
            transform: translateX(-50%);
            box-shadow: 0 0 10px rgba(0, 255, 249, 0.5);
            z-index: 2;
            transition: all 0.3s ease;
        }
        .timeline-item:hover .timeline-dot {
            background: var(--accent-color);
            box-shadow: 0 0 20px rgba(0, 255, 249, 0.8);
            transform: translateX(-50%) scale(1.2);
        }
        @media (min-width: 768px) {
            .timeline-dot {
                left: 50%;
            }
        }
        .timeline-content {
            margin-left: 50px;
            padding: 24px;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .timeline-item:hover .timeline-content {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        [data-theme="dark"] .timeline-item:hover .timeline-content {
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        @media (min-width: 768px) {
            .timeline-content {
                width: 45%;
                margin-left: 0;
            }
            .timeline-item:nth-child(odd) .timeline-content {
                margin-left: auto;
            }
            .timeline-item:nth-child(even) .timeline-content {
                text-align: right;
            }
        }
        .timeline-date {
            font-size: 14px;
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        .timeline-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
        }
        .timeline-subtitle {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 12px;
            font-weight: 500;
        }
        .timeline-desc {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

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
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; 
            transform-style: preserve-3d;
        }
        .project-card > * {
            transform: translateZ(30px);
        }
        .project-card:hover { 
            border-color: var(--accent-color); background: var(--bg-surface-hover);
            box-shadow: 0 15px 40px rgba(16, 185, 129, 0.3), inset 0 0 20px rgba(16, 185, 129, 0.1);
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
        .contact-content { flex: 1; min-width: 320px; max-width: 600px; position: relative; z-index: 1; }
        
        /* Contact Form Styles */
        .contact-layout { display: flex; flex-direction: column; gap: 32px; margin-top: 40px; width: 100%; margin-left: 0; }
        .telegram-form { display: flex; flex-direction: column; gap: 20px; width: 100%; }
        .contact-sidebar { display: flex; flex-direction: row; align-items: center; justify-content: flex-start; gap: 24px; width: 100%; flex-wrap: wrap; }
        
        /* Contact Terminal */
        .contact-terminal-wrapper {
            flex: 1; min-width: 300px; max-width: 450px;
            perspective: 1000px;
            display: flex;
            align-items: stretch;
            margin-top: 40px; /* Align with form */
        }
        .contact-terminal {
            background: rgba(10, 15, 25, 0.65); /* More transparent for glassmorphism */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            border-left: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5), 0 0 30px rgba(16, 185, 129, 0.1), inset 0 0 20px rgba(255,255,255,0.02);
            backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
            transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.6s ease;
            height: 100%;
            width: 100%;
            min-height: 380px;
            display: flex;
            flex-direction: column;
            cursor: crosshair;
            position: relative;
            animation: float-terminal 6s ease-in-out infinite;
        }
        
        /* CRT Scanlines Overlay */
        .contact-terminal::after {
            content: " ";
            display: block;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%);
            background-size: 100% 4px;
            z-index: 10;
            pointer-events: none;
            opacity: 0.6;
        }

        @keyframes float-terminal {
            0% { transform: rotateY(-8deg) rotateX(4deg) translateY(0px); }
            50% { transform: rotateY(-8deg) rotateX(4deg) translateY(-15px); }
            100% { transform: rotateY(-8deg) rotateX(4deg) translateY(0px); }
        }

        .contact-terminal:hover {
            animation-play-state: paused;
            transform: rotateY(0) rotateX(0) translateY(-10px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.6), 0 0 50px rgba(16, 185, 129, 0.2), inset 0 0 20px rgba(255,255,255,0.05);
        }
        [data-theme="light"] .contact-terminal { background: rgba(250, 250, 250, 0.8); border-color: rgba(0,0,0,0.1); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .c-term-header {
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 16px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        [data-theme="light"] .c-term-header { background: rgba(0, 0, 0, 0.05); border-bottom: 1px solid rgba(0,0,0,0.05); }
        .c-term-buttons { display: flex; gap: 8px; }
        .c-term-buttons span { width: 12px; height: 12px; border-radius: 50%; }
        .c-term-buttons span:nth-child(1) { background: #ff5f56; }
        .c-term-buttons span:nth-child(2) { background: #ffbd2e; }
        .c-term-buttons span:nth-child(3) { background: #27c93f; }
        .c-term-title { flex: 1; text-align: center; font-family: monospace; font-size: 12px; color: var(--text-secondary); opacity: 0.8; }
        .c-term-body {
            padding: 20px;
            font-family: 'Fira Code', 'Courier New', monospace;
            font-size: 13px;
            color: #10b981;
            flex: 1;
            overflow-y: auto;
            line-height: 1.6;
        }
        .c-term-line { display: flex; gap: 10px; margin-bottom: 8px; opacity: 0; animation: cTypeLine 0.1s forwards; }
        .c-term-prompt { color: #34d399; font-weight: bold; }
        .c-term-text { color: var(--text-primary); }
        .c-term-cursor {
            display: inline-block; width: 8px; height: 15px; background: #10b981;
            animation: blink 1s step-end infinite; vertical-align: middle; margin-left: 4px;
        }
        @keyframes cTypeLine { to { opacity: 1; } }
        
        .form-group { width: 100%; position: relative; }
        .form-input {
            width: 100%; padding: 16px 24px; background: rgba(0, 0, 0, 0.3); 
            border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px;
            color: var(--text-primary); font-family: var(--font-family); font-size: 16px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); resize: vertical; box-sizing: border-box;
            backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
        }
        [data-theme="light"] .form-input { background: rgba(255, 255, 255, 0.7); border-color: rgba(0,0,0,0.1); }
        
        .form-input:focus { 
            outline: none; 
            border-color: var(--accent-color); 
            background: rgba(0, 0, 0, 0.5); 
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.15), inset 0 0 20px rgba(16, 185, 129, 0.05);
            transform: translateY(-2px);
        }
        [data-theme="light"] .form-input:focus { background: #ffffff; }
        .form-input::placeholder { color: var(--text-secondary); }
        .btn-submit { width: 100%; justify-content: center; position: relative; overflow: hidden; }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; }
        .loader {
            border: 2px solid rgba(255, 255, 255, 0.3); border-radius: 50%;
            border-top: 2px solid #fff; width: 16px; height: 16px;
            animation: spin 1s linear infinite; position: absolute; left: 50%; top: 50%;
            transform: translate(-50%, -50%);
        }
        @keyframes spin { 0% { transform: translate(-50%, -50%) rotate(0deg); } 100% { transform: translate(-50%, -50%) rotate(360deg); } }
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
        .footer { padding: 40px 0; border-top: 1px solid rgba(255,255,255,0.05); margin-top: 60px; background: rgba(0,0,0,0.3); backdrop-filter: blur(10px); }
        .footer-content { display: flex; justify-content: space-between; align-items: center; }
        .footer-brand { display: flex; align-items: center; gap: 12px; }
        .footer-logo { background: transparent; border: 1px solid var(--accent-color); color: var(--accent-color); font-weight: 700; font-size: 14px; padding: 4px 8px; border-radius: 4px; font-family: 'Courier New', monospace; box-shadow: 0 0 10px rgba(16,185,129,0.2); letter-spacing: 2px; }
        .blinking-cursor-logo { display: inline-block; animation: blink 1s step-end infinite; }
        .footer-text { color: var(--text-secondary); font-size: 14px; font-weight: 500; font-family: 'Inter', sans-serif; letter-spacing: 0.5px; }
        .footer-tagline { color: var(--text-secondary); font-size: 14px; font-family: 'Courier New', monospace; }
        .accent-precision { color: var(--accent-color); font-weight: 600; text-shadow: 0 0 10px rgba(16,185,129,0.4); }
        .blinking-cursor { display: inline-block; width: 8px; height: 14px; background: var(--accent-color); vertical-align: middle; margin-left: 2px; animation: blink 1s step-end infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }




        /* Custom Cursor */
        @media (pointer: fine) {
            body { cursor: none; }
            a, button, .filter-btn, .logo { cursor: none !important; }
            
            .cursor-dot, .cursor-outline {
                position: fixed; top: 0; left: 0; transform: translate3d(-50%, -50%, 0);
                border-radius: 50%; z-index: 999999; pointer-events: none;
                will-change: transform;
            }
            .cursor-dot { width: 8px; height: 8px; background-color: var(--text-primary); transition: background-color 0.5s ease; }
            .cursor-outline { 
                width: 40px; height: 40px; border: 1px solid var(--text-secondary); 
                transition: width 0.2s, height 0.2s, border-color 0.5s ease, background-color 0.2s; 
            }
            .cursor-glow {
                position: fixed; top: 0; left: 0;
                width: 800px; height: 800px;
                background: radial-gradient(circle, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 40%, transparent 70%);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                pointer-events: none;
                z-index: 999998;
                will-change: transform;
                mix-blend-mode: screen;
            }
        }

        [data-theme="light"] .cursor-glow { display: none; } /* Subtle glow only works well on dark themes */

        /* Smooth Reveal */
        .reveal { opacity: 0; transform: translateY(20px); transition: all 0.8s cubic-bezier(0.2, 0, 0, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }

        @media (min-width: 768px) {
            .nav-links { display: flex; }
        }
        @media (max-width: 1024px) {
            .contact-card { flex-direction: column; }
            .contact-content { max-width: 100%; }
            .contact-terminal-wrapper { max-width: 100%; margin-top: 0; }
            .contact-terminal { animation: none; transform: none; min-height: 350px; }
            .contact-terminal:hover { transform: translateY(-5px); }
            .contact-card::before { right: -10%; top: -20%; width: 120%; height: 120%; background: radial-gradient(circle, var(--accent-glow) 0%, transparent 60%); }
        }
        @media (max-width: 768px) {
            h1 { font-size: 56px; line-height: 1.1; }
            h2 { font-size: 32px; }
            .orbit-container { transform: scale(0.7); }
            .hero-title { font-size: 48px; }
            .stats { grid-template-columns: repeat(2, 1fr); }
            .about-grid { grid-template-columns: 1fr; gap: 40px; }
            .services-grid { grid-template-columns: 1fr; }
            .project-grid { grid-template-columns: 1fr; }
            .contact-card { padding: 32px; flex-direction: column; align-items: stretch; gap: 32px; }
            .contact-content { max-width: 100%; min-width: 100%; }
            .contact-layout { gap: 24px; margin-top: 24px; }
            .contact-sidebar { flex-direction: column; justify-content: center; text-align: center; gap: 20px; }
            .contact-terminal-wrapper { max-width: 100%; min-width: 100%; margin-top: 0; }
            .contact-terminal { 
                transform: none; 
                min-height: 300px;
            }
            .contact-terminal:hover {
                transform: translateY(-5px);
            }
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
    <!-- The Matrix Code Rain Preloader -->
    <div class="preloader" id="preloader">
        <canvas id="matrixCanvas"></canvas>
        <div class="preloader-percentage-new" id="preloaderPerc" data-text="0%">0%</div>
    </div>
    
    <!-- Interactive Grid Background -->
    <div class="grid-background" id="gridBackground"></div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollBar"></div>
    </div>

    <!-- Custom Cursor Elements -->
    <div class="cursor-glow" id="cursorGlow"></div>
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
            <a href="#" class="nav-link" data-i18n="nav_home">Beranda</a>
            <a href="#projects" class="nav-link" data-i18n="nav_projects">Proyek</a>
            <a href="#contact" class="nav-link" data-i18n="nav_contact">Kontak</a>
        </nav>

        <div class="nav-actions">
            <!-- Available for Hire Badge -->
            <a href="#contact" class="availability-badge" style="display: flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: color 0.3s ease; margin-right: 12px;">
                <span style="width: 6px; height: 6px; background-color: #10B981; border-radius: 50%; display: inline-block;"></span>
                <span class="avail-text" data-i18n="nav_avail">Tersedia untuk proyek</span>
                <style>
                    .availability-badge:hover { color: var(--text-primary) !important; }
                    @media (max-width: 640px) { .avail-text { display: none; } .availability-badge { margin-right: 8px; } }
                </style>
            </a>

            <!-- Language Toggle -->
            <button class="lang-toggle" id="langToggle" aria-label="Toggle Language" style="background: none; border: 1px solid var(--border-color); color: var(--text-primary); font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 700; cursor: pointer; border-radius: 8px; padding: 4px 8px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; min-width: 40px; margin-right: 4px;">
                ID
            </button>

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

    <style>
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
        }
        .hero { position: relative; }
        .hero-title, .hero-badge, .hero-description, .hero-buttons, .digital-id-perspective {
            position: relative;
            z-index: 1;
        }
        [data-i18n], [data-i18n-btn] {
            transition: opacity 0.15s ease-in-out !important;
        }
    </style>
    <section class="hero container">
        <div id="particles-js"></div>
        <h1 class="hero-title reveal active delay-1">{!! str_replace(' ', '<br>', $settings['name'] ?? 'ANGGA WIRANATA') !!}</h1>
        <div class="hero-badge reveal active delay-1"><span class="glitch-text" data-text="PENGEMBANG WEB" data-i18n="hero_badge" id="heroBadgeText">PENGEMBANG WEB</span></div>
        <p class="hero-description reveal active delay-2" data-i18n="hero_desc">
            {{ $settings['description'] ?? 'Membangun aplikasi web yang efisien dan tangguh dengan estetika modern.' }}
        </p>
        
        <div class="hero-buttons reveal active delay-2" style="display: flex; gap: 16px; margin-bottom: 100px;">
            <a href="#projects" class="btn btn-primary" data-i18n="hero_btn_work">
                Lihat Karya
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
            </a>
            <a href="#contact" class="btn btn-outline" data-i18n="hero_btn_contact">
                Hubungi Saya
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </a>
        </div>




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
                    <p class="digital-id-role glitch-role" data-text="{{ $settings['title'] ?? 'WEB DEVELOPER' }}">{{ $settings['title'] ?? 'WEB DEVELOPER' }}</p>
                </div>

                <div class="digital-id-footer">
                    <div class="id-barcode"></div>
                    <div class="id-access">LEVEL 05</div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats container reveal" id="stats-section">
        @foreach($stats as $index => $stat)
        <div class="stat-item">
            <h3 class="stat-number"><span class="counter" data-target="{{ preg_replace('/[^0-9]/', '', $stat->number) }}">0</span><span>{{ preg_replace('/[0-9]/', '', $stat->number) }}</span></h3>
            <p class="stat-label">{{ $stat->label }}</p>
        </div>
        @endforeach
    </section>

    <div class="marquee-section reveal delay-1">
        <!-- Row 1: Left to Right -->
        <div class="marquee-container">
            <div class="marquee-content">
                @foreach($skills as $index => $skill)
                <span class="marquee-item {{ $index % 2 == 0 ? 'solid' : '' }}" data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
                @endforeach
                @foreach($skills as $index => $skill)
                <span class="marquee-item {{ $index % 2 == 0 ? 'solid' : '' }}" data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
        <!-- Row 2: Right to Left -->
        <div class="marquee-container">
            <div class="marquee-content reverse">
                @foreach($skills as $index => $skill)
                <span class="marquee-item {{ $index % 2 != 0 ? 'solid' : '' }}" data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
                @endforeach
                @foreach($skills as $index => $skill)
                <span class="marquee-item {{ $index % 2 != 0 ? 'solid' : '' }}" data-skill="{{ strtolower($skill->name) }}">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Tech Stack Orbit Section -->
    <section class="orbit-section container reveal delay-2">
        <div class="section-header reveal">
            <h2 class="section-title" data-i18n="tech_title">Tech <span class="highlight">Ecosystem</span></h2>
            <p class="section-description" data-i18n="tech_desc">Teknologi yang berputar dan mendukung setiap project saya.</p>
        </div>
        
        <div class="orbit-container">
            <!-- Central Core (Cooler) -->
            <div class="orbit-center" style="box-shadow: 0 0 50px rgba(0, 255, 249, 0.6), inset 0 0 20px rgba(255, 255, 255, 0.4); animation: core-pulse 2s infinite alternate; overflow: visible;">
                <style>
                    @keyframes core-pulse {
                        0% { transform: scale(1); box-shadow: 0 0 40px rgba(0, 255, 249, 0.5), inset 0 0 15px rgba(255, 255, 255, 0.3); }
                        100% { transform: scale(1.05); box-shadow: 0 0 70px rgba(0, 255, 249, 0.8), inset 0 0 25px rgba(255, 255, 255, 0.5); }
                    }
                </style>
                <!-- Glowing Code Symbol SVG -->
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="filter: drop-shadow(0 0 8px rgba(255,255,255,0.8));">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
            </div>
            
            <!-- Ring 1 (Inner) -->
            <div class="orbit-ring orbit-ring-1">
                <div class="orbit-item rev" style="top: -22px; left: calc(50% - 22px);">
                    <!-- Laravel -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF2D20" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                </div>
                <div class="orbit-item rev" style="top: auto; bottom: -22px; left: calc(50% - 22px);">
                    <!-- React -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#61DAFB" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </div>
            </div>
            
            <!-- Ring 2 (Middle) -->
            <div class="orbit-ring orbit-ring-2">
                <div class="orbit-item rev" style="top: calc(50% - 22px); left: -22px;">
                    <!-- Database -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4479A1" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                </div>
                <div class="orbit-item rev" style="top: calc(50% - 22px); right: -22px; left: auto;">
                    <!-- Code -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3178C6" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                </div>
                <div class="orbit-item rev" style="top: 15px; left: 50px;">
                    <!-- Design/Figma -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F24E1E" stroke-width="2"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"></path><path d="M7 7h.01"></path></svg>
                </div>
            </div>
            
            <!-- Ring 3 (Outer) -->
            <div class="orbit-ring orbit-ring-3">
                <div class="orbit-item rev" style="top: -22px; left: calc(50% - 22px);">
                    <!-- Tailwind/CSS -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="2"><path d="M12 2.69l5.66 4.2c.2.15.34.38.34.64v8.94c0 .26-.14.49-.34.64L12 21.31l-5.66-4.2a.8.8 0 0 1-.34-.64V7.53c0-.26.14-.49.34-.64L12 2.69z"></path></svg>
                </div>
                <div class="orbit-item rev" style="top: auto; bottom: 35px; left: 45px;">
                    <!-- PHP -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#777BB4" stroke-width="2"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon></svg>
                </div>
                <div class="orbit-item rev" style="top: auto; bottom: 35px; right: 45px; left: auto;">
                    <!-- JS/Terminal -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#F7DF1E" stroke-width="2"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about container reveal">
        <div class="about-grid">
            <div class="about-text">
                <h2 data-i18n="about_title">Lebih Dekat Dengan Saya</h2>
                <p data-i18n="about_p1">Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses. Fokus saya tidak hanya pada fungsionalitas, namun juga pada estetika visual yang mampu memberikan pengalaman terbaik bagi pengguna.</p>
                <p data-i18n="about_p2">Dengan latar belakang yang kuat di bidang teknik informatika, saya selalu berusaha untuk terus mengikuti perkembangan teknologi terbaru dan mengimplementasikannya dalam setiap proyek yang saya kerjakan.</p>
                <a href="#contact" class="btn-collab" data-i18n="about_btn">
                                        <span class="collab-dot"></span>
                                        <span>Mari Berkolaborasi</span>
                                        <svg class="collab-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                    </a>
            </div>
            <div class="about-visual" style="padding: 32px; background: var(--bg-surface); border: 1px solid var(--border-color); border-radius: 20px; animation: floatCode 6s ease-in-out infinite;">
                <div class="radar-wrapper" id="radarWrapper">
                    <!-- SVG Radar Chart -->
                    <div class="radar-chart-container">
                        <svg id="radarSvg" width="280" height="280" viewBox="-140 -140 280 280">
                            <!-- Grid rings -->
                            <g class="radar-grid">
                                <polygon class="radar-grid-polygon" points="0,-100 86.6,-50 86.6,50 0,100 -86.6,50 -86.6,-50"/>
                                <polygon class="radar-grid-polygon" points="0,-75 64.95,-37.5 64.95,37.5 0,75 -64.95,37.5 -64.95,-37.5"/>
                                <polygon class="radar-grid-polygon" points="0,-50 43.3,-25 43.3,25 0,50 -43.3,25 -43.3,-25"/>
                                <polygon class="radar-grid-polygon" points="0,-25 21.65,-12.5 21.65,12.5 0,25 -21.65,12.5 -21.65,-25"/>
                            </g>
                            <!-- Axis lines -->
                            <g class="radar-axes">
                                <line class="radar-axis-line" x1="0" y1="0" x2="0" y2="-100"/>
                                <line class="radar-axis-line" x1="0" y1="0" x2="86.6" y2="-50"/>
                                <line class="radar-axis-line" x1="0" y1="0" x2="86.6" y2="50"/>
                                <line class="radar-axis-line" x1="0" y1="0" x2="0" y2="100"/>
                                <line class="radar-axis-line" x1="0" y1="0" x2="-86.6" y2="50"/>
                                <line class="radar-axis-line" x1="0" y1="0" x2="-86.6" y2="-50"/>
                            </g>
                            <!-- Data polygon (animated via JS) -->
                            <polygon id="radarDataPoly" class="radar-data-polygon" points="0,0 0,0 0,0 0,0 0,0 0,0"/>
                            <!-- Dots at each vertex -->
                            <circle id="radarDot0" class="radar-dot" cx="0" cy="0" r="4"/>
                            <circle id="radarDot1" class="radar-dot" cx="0" cy="0" r="4"/>
                            <circle id="radarDot2" class="radar-dot" cx="0" cy="0" r="4"/>
                            <circle id="radarDot3" class="radar-dot" cx="0" cy="0" r="4"/>
                            <circle id="radarDot4" class="radar-dot" cx="0" cy="0" r="4"/>
                            <circle id="radarDot5" class="radar-dot" cx="0" cy="0" r="4"/>
                            <!-- Labels -->
                            <g class="radar-label-group">
                                <text x="0" y="-118">Frontend</text>
                                <text x="104" y="-59">Backend</text>
                                <text x="104" y="62">Database</text>
                                <text x="0" y="118">UI/UX</text>
                                <text x="-104" y="62">Mobile</text>
                                <text x="-104" y="-59">DevOps</text>
                            </g>
                        </svg>
                    </div>

                    <!-- Skill bars -->
                    <div class="radar-skill-list">
                        <div class="radar-skill-item" data-index="0">
                            <span class="radar-skill-name">Frontend</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="90"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
                        <div class="radar-skill-item" data-index="1">
                            <span class="radar-skill-name">Backend</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="82"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
                        <div class="radar-skill-item" data-index="2">
                            <span class="radar-skill-name">Database</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="75"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
                        <div class="radar-skill-item" data-index="3">
                            <span class="radar-skill-name">UI/UX</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="85"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
                        <div class="radar-skill-item" data-index="4">
                            <span class="radar-skill-name">Mobile</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="65"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
                        <div class="radar-skill-item" data-index="5">
                            <span class="radar-skill-name">DevOps</span>
                            <div class="radar-skill-track"><div class="radar-skill-fill" data-pct="60"></div></div>
                            <span class="radar-skill-pct">0%</span>
                        </div>
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

    <!-- Services Section -->
    <section id="services" class="services container reveal">
        <div class="section-header reveal">
            <h2 class="section-title" data-i18n="services_title">What I <span class="highlight">Do</span></h2>
            <p class="section-description" data-i18n="services_desc">Layanan & Spesialisasi</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card reveal">
                <div class="service-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                </div>
                <h3 class="service-title" data-i18n="srv_frontend_title">Frontend Architecture</h3>
                <p class="service-desc" data-i18n="srv_frontend_desc">Membangun antarmuka web (UI) interaktif dan mulus menggunakan teknologi modern dengan performa tinggi.</p>
            </div>
            
            <div class="service-card reveal delay-1">
                <div class="service-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                </div>
                <h3 class="service-title" data-i18n="srv_responsive_title">Responsive Design</h3>
                <p class="service-desc" data-i18n="srv_responsive_desc">Memastikan aplikasi web Anda tampil sempurna dan berfungsi optimal di berbagai perangkat (Mobile, Tablet, Desktop).</p>
            </div>
            
            <div class="service-card reveal delay-2">
                <div class="service-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                </div>
                <h3 class="service-title" data-i18n="srv_backend_title">Backend Integration</h3>
                <p class="service-desc" data-i18n="srv_backend_desc">Menghubungkan antarmuka dengan sistem database dan API layanan pihak ketiga untuk fungsionalitas yang terpadu.</p>
            </div>
        </div>
    </section>

    <!-- Experience Timeline Section -->
    <section id="experience" class="experience container reveal">
        <div class="section-header reveal">
            <h2 class="section-title" data-i18n="exp_title">My <span class="highlight">Journey</span></h2>
            <p class="section-description" data-i18n="exp_desc">Pengalaman Karir & Pendidikan</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-line"></div>
            
            <!-- Item 1: 2022 - Sekarang -->
            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date" data-i18n="exp_1_date">2022 - Sekarang</span>
                    <h3 class="timeline-title" data-i18n="exp_1_title">Freelance Web Developer</h3>
                    <h4 class="timeline-subtitle" data-i18n="exp_1_sub">Self-Employed / Freelance</h4>
                    <p class="timeline-desc" data-i18n="exp_1_desc">Mengembangkan berbagai aplikasi web modern menggunakan teknologi terkini seperti Laravel dan ekosistem JS.</p>
                </div>
            </div>
            
            <!-- Item 2: 2022 -->
            <div class="timeline-item reveal delay-1">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">2022</span>
                    <h3 class="timeline-title" data-i18n="exp_2_title">Pengadministrasian Umum</h3>
                    <h4 class="timeline-subtitle" data-i18n="exp_2_sub">Dewan Pengurus KORPRI Kab. Banjar</h4>
                    <p class="timeline-desc" data-i18n="exp_2_desc">Menangani administrasi umum, pengelolaan data, dan mendukung operasional instansi pemerintahan daerah.</p>
                </div>
            </div>
            
            <!-- Item 3: 2016 - 2020 -->
            <div class="timeline-item reveal delay-2">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">2016 - 2020</span>
                    <h3 class="timeline-title" data-i18n="exp_3_title">S1 Teknik Informatika</h3>
                    <h4 class="timeline-subtitle" data-i18n="exp_3_sub">Universitas Islam Kalimantan MAB</h4>
                    <p class="timeline-desc" data-i18n="exp_3_desc">Lulus program studi Teknik Informatika dengan fokus pada rekayasa perangkat lunak dan sistem informasi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects container">
        <div class="section-header reveal">
            <h2 class="section-title" data-i18n="proj_title">Selected Projects</h2>
            <p class="section-description" data-i18n="proj_desc">Engineered solutions for enterprise clients and institutions.</p>
        </div>
        
        <div class="filters reveal delay-1">
            <button class="filter-btn active" data-filter="all" data-i18n-btn="proj_all">All <span class="badge">2</span></button>
            <button class="filter-btn" data-filter="Unggulan" data-i18n-btn="proj_feat">Featured <span class="badge">2</span></button>
            <button class="filter-btn" data-filter="Selesai" data-i18n-btn="proj_comp">Completed <span class="badge">2</span></button>
            <button class="filter-btn" data-filter="Berjalan" data-i18n-btn="proj_prog">In Progress <span class="badge">2</span></button>
        </div>

        <div class="project-grid">
            @foreach($projects as $index => $project)
            <div class="project-card reveal delay-{{ $index % 3 }}" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.2" data-category="{{ $project->category }}" data-desc="{{ str_contains(strtolower($project->title), 'duta') ? 'Aplikasi ini adalah sebuah platform kompetisi berstandar profesional yang dirancang khusus untuk mengelola seluruh siklus ajang Duta KORPRI, mulai dari pendaftaran hingga penetapan juara.' : 'Aplikasi ini dirancang sebagai portal terpadu untuk mendigitalkan dan mempermudah pengurusan berbagai layanan, administrasi, dan kesejahteraan bagi para pegawai (anggota KORPRI).' }}">
                <style>
                    @keyframes autoCrossfade {
                        0%, 45% { opacity: 0; transform: scale(1); }
                        50%, 95% { opacity: 1; transform: scale(1.05); }
                        100% { opacity: 0; transform: scale(1); }
                    }
                    @keyframes scanline {
                        0% { top: -10%; }
                        50% { top: 110%; }
                        100% { top: -10%; }
                    }
                    @keyframes pulseDot { 0% { opacity: 0.3; transform: scale(0.8); } 100% { opacity: 1; transform: scale(1.2); } }
                    
                    .auto-slideshow { animation: autoCrossfade 8s infinite ease-in-out; }
                    
                    /* Holographic Scanline Overlay */
                    .project-image-wrapper::before {
                        content: ''; position: absolute; left: 0; right: 0; top: -10%; height: 2px;
                        background: var(--accent-color);
                        box-shadow: 0 0 10px var(--accent-color), 0 0 20px var(--accent-color);
                        z-index: 10; pointer-events: none; opacity: 0;
                        transition: opacity 0.3s;
                    }
                    
                    /* Cyberpunk Tech Grid Overlay */
                    .project-image-wrapper::after {
                        content: ''; position: absolute; inset: 0;
                        background: linear-gradient(rgba(0,0,0,0) 50%, rgba(0,0,0,0.15) 50%), linear-gradient(90deg, rgba(255,0,0,0.06), rgba(0,255,0,0.02), rgba(0,0,255,0.06));
                        background-size: 100% 4px, 3px 100%;
                        z-index: 5; pointer-events: none; opacity: 0;
                        transition: opacity 0.5s;
                    }

                    @media (hover: hover) and (pointer: fine) {
                        .project-card:hover .project-img, .project-card:hover .project-img-hover { transform: scale(1.1); }
                        .project-card:hover .project-action-btn { background: var(--text-primary) !important; color: var(--bg-base) !important; }
                        .project-card:hover .project-image-wrapper::before { opacity: 1; animation: scanline 3s linear infinite; }
                        .project-card:hover .project-image-wrapper::after { opacity: 1; }
                    }
                </style>
                <div class="project-image-wrapper" style="width: calc(100% + 64px); height: 220px; margin: -32px -32px 24px -32px; position: relative; overflow: hidden; border-radius: 16px 16px 0 0;">
                    @php
                        $imageName = 'project-korpri.png';
                        $hoverImageName = null;
                        if (str_contains(strtolower($project->title), 'duta')) {
                            $imageName = 'duta-korpri.png';
                            $hoverImageName = 'duta-korpri-2026.png';
                        }
                    @endphp
                    <img src="{{ asset('images/' . $imageName) }}" alt="{{ $project->title }} Screenshot" class="project-img" style="width: 100%; height: 100%; object-fit: contain; background: rgba(0,0,0,0.2); filter: brightness(1.1) contrast(0.95); transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);">
                    
                    @if($hoverImageName)
                        <img src="{{ asset('images/' . $hoverImageName) }}" alt="{{ $project->title }} Alternate" class="project-img-hover auto-slideshow" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; background: rgba(0,0,0,0.2); filter: brightness(1.1) contrast(0.95); pointer-events: none; opacity: 0; transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);">
                    @endif
                    <!-- Bottom Gradient -->
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, var(--bg-surface) 0%, transparent 60%); pointer-events: none; z-index: 4;"></div>
                    <!-- Right Side Anti-Glare Gradient (Burns highlights on the right) -->
                    <div style="position: absolute; inset: 0; background: linear-gradient(to left, rgba(0,0,0,0.5) 0%, transparent 45%); pointer-events: none; z-index: 4;"></div>
                    @php
                        $catI18n = '';
                        if($project->category == 'Berjalan') $catI18n = 'proj_prog';
                        elseif($project->category == 'Selesai') $catI18n = 'proj_comp';
                        elseif($project->category == 'Unggulan') $catI18n = 'proj_feat';
                    @endphp
                </div>
                
                <div class="project-footer" style="padding-top: 0; border-top: none;">
                    <div>
                        <h3 class="project-title" style="font-size: 16px; font-weight: 700; line-height: 1.4;">{{ $project->title }}</h3>
                        <div style="display: flex; align-items: center; gap: 10px; margin-top: 8px;">
                            <div class="project-tag" style="background: rgba(16,185,129,0.1); border: 1px solid var(--accent-color); color: var(--accent-color); border-radius: 20px; display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                                <span style="width: 6px; height: 6px; border-radius: 50%; background: var(--accent-color); box-shadow: 0 0 8px var(--accent-color); animation: pulseDot 1.5s infinite alternate;"></span>
                                <span @if($catI18n) data-i18n="{{ $catI18n }}" @endif>{{ $project->category }}</span>
                            </div>
                            <p style="font-size: 12px; color: var(--text-secondary); margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">• Coming Soon</p>
                        </div>
                    </div>
                    <a href="{{ $project->link }}" class="project-link project-action-btn" aria-label="Visit project" style="background: var(--bg-surface-hover); padding: 12px; border-radius: 50%; border: 1px solid var(--border-color); transition: all 0.3s ease;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
                <h2 class="section-title" data-i18n="contact_title">Let's build something great.</h2>
                <p class="section-description" data-i18n="contact_desc">Available for freelance work and full-time opportunities. If you have a project that needs some creative engineering, let's talk.</p>
                <div class="contact-layout">
                    <form id="telegramForm" class="telegram-form" onsubmit="sendToTelegram(event)">
                        <div class="form-group">
                            <input type="text" id="senderName" placeholder="Nama Anda" required class="form-input" data-i18n-placeholder="contact_name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="senderEmail" placeholder="Email Anda" required class="form-input" data-i18n-placeholder="contact_email">
                        </div>
                        <div class="form-group">
                            <textarea id="senderMessage" placeholder="Tulis pesan Anda di sini..." rows="4" required class="form-input" data-i18n-placeholder="contact_msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit" id="submitBtn">
                            <span class="btn-text" data-i18n="contact_send">Kirim Pesan</span>
                            <svg class="send-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </form>
                    <div class="contact-sidebar">
                        <div class="status-badge" style="display: inline-flex;">
                            <span class="pulse"></span>
                            <span data-i18n="contact_avail">Tersedia untuk proyek</span>
                        </div>
                        <div class="social-links">
                            <a href="https://github.com/kyraaa-dev" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
                            <a href="https://www.linkedin.com/in/angga-wiranata-320837420" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                            <a href="mailto:anggawiranatafti@gmail.com" aria-label="Email"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Fake Terminal Element -->
            <div class="contact-terminal-wrapper">
                <div class="contact-terminal">
                    <div class="c-term-header">
                        <div class="c-term-buttons">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="c-term-title">guest@angga-server:~</div>
                    </div>
                    <div class="c-term-body" id="contactTerminalBody">
                        <!-- Typed by JS -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer container reveal">
        <div class="footer-content">
            <div class="footer-brand">
                <span class="footer-logo">&gt;<span class="blinking-cursor-logo">_</span></span>
                <span class="footer-text">&copy; 2026 ANGGA WIRANATA, S.KOM.</span>
            </div>
            <div class="footer-tagline">
                Crafted with <span class="accent-precision">precision</span> <span class="blinking-cursor">_</span>
            </div>
        </div>
    </footer>

    <!-- Terminal Panel for Replay -->
    <div class="replay-terminal" id="replayTerminal">
        <div class="replay-terminal-header">
            <span class="t-dot t-red"></span>
            <span class="t-dot t-yellow"></span>
            <span class="t-dot t-green"></span>
            <span class="t-title">terminal — bash</span>
        </div>
        <div class="replay-terminal-body" id="terminalBody"></div>
    </div>

    <!-- Replay Skip Button -->
    <button class="replay-skip" id="replaySkip" style="display:none;">✕ Skip</button>

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
            <p class="project-modal-desc" id="modalDesc" data-i18n="proj_modal_desc">This is a comprehensive project built to solve complex business logic. The architecture involves custom backend API integration, seamless frontend user experience, and optimized database queries ensuring fast load times and scalability.</p>
            <div id="modalLink" style="margin-top: 24px; display: inline-block; padding: 10px 20px; border-radius: 8px; background: rgba(255, 189, 46, 0.1); color: #ffbd2e; border: 1px solid rgba(255, 189, 46, 0.3); font-weight: 500; font-size: 14px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; margin-top: -2px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <span data-i18n="proj_dev_status">Tahap Pengembangan (Coming Soon)</span>
            </div>
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
            // Matrix Preloader Logic
            const preloader = document.getElementById('preloader');
            const preloaderPerc = document.getElementById('preloaderPerc');
            const canvas = document.getElementById('matrixCanvas');
            
            if (preloader && canvas) {
                const ctx = canvas.getContext('2d');
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜﾝ';
                const fontSize = 14;
                const columns = canvas.width / fontSize;
                const drops = Array.from({length: columns}).fill(1);
                
                let isOverloaded = false;
                
                function drawMatrix() {
                    if (isOverloaded) {
                        ctx.fillStyle = 'rgba(255, 255, 255, 0.2)';
                    } else {
                        ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
                    }
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                    
                    ctx.fillStyle = isOverloaded ? '#fff' : '#10b981'; // Emerald Green
                    ctx.font = fontSize + 'px monospace';
                    
                    for (let i = 0; i < drops.length; i++) {
                        const text = characters.charAt(Math.floor(Math.random() * characters.length));
                        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                        
                        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                            drops[i] = 0;
                        }
                        drops[i]++;
                    }
                    if (!preloader.classList.contains('fade-out') || isOverloaded) {
                        requestAnimationFrame(drawMatrix);
                    }
                }
                drawMatrix();
                
                window.addEventListener('resize', () => {
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                });

                let progress = 0;
                
                // Cinematic Cyberpunk Startup Sound (Web Audio API Synthesizer)
                function playStartupSound() {
                    // Sound removed per user request
                }

                setTimeout(() => {
                    const interval = setInterval(() => {
                        progress += Math.floor(Math.random() * 5) + 2; 
                        
                        if (progress >= 100) {
                            progress = 100;
                            clearInterval(interval);
                            
                            if (preloaderPerc) preloaderPerc.style.display = 'none';
                            
                            isOverloaded = true;
                            preloader.classList.add('overload');
                            
                            setTimeout(() => {
                                preloader.classList.add('fade-out');
                                setTimeout(() => {
                                    preloader.style.display = 'none';
                                    document.querySelectorAll('.reveal').forEach((el, index) => {
                                        setTimeout(() => { el.classList.add('active'); }, index * 100);
                                    });
                                }, 1500);
                            }, 500);
                        }
                        if(preloaderPerc && progress < 100) {
                            preloaderPerc.innerText = progress + '%';
                            preloaderPerc.setAttribute('data-text', progress + '%');
                            preloaderPerc.style.setProperty('--progress', progress + '%');
                        }
                    }, 40);
                }, 500);
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
            const cursorGlow = document.getElementById('cursorGlow');
            
            if (cursorDot && cursorOutline && window.matchMedia("(pointer: fine)").matches) {
                let mouseX = 0, mouseY = 0;
                let outlineX = 0, outlineY = 0;
                let glowX = 0, glowY = 0;
                
                window.addEventListener('mousemove', (e) => {
                    mouseX = e.clientX;
                    mouseY = e.clientY;
                    
                    // Dot follows instantly using hardware acceleration
                    cursorDot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
                }, { passive: true });
                
                // Outline follows with spring physics lag
                function animateCursor() {
                    let distX = mouseX - outlineX;
                    let distY = mouseY - outlineY;
                    
                    outlineX += distX * 0.2;
                    outlineY += distY * 0.2;
                    
                    glowX += (mouseX - glowX) * 0.1;
                    glowY += (mouseY - glowY) * 0.1;
                    
                    cursorOutline.style.transform = `translate3d(${outlineX}px, ${outlineY}px, 0) translate(-50%, -50%)`;
                    if (cursorGlow) cursorGlow.style.transform = `translate3d(${glowX}px, ${glowY}px, 0) translate(-50%, -50%)`;
                    
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

            // Text Decrypt Animation Function
            const decryptChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*";
            function decryptText(element, newText, speed = 30) {
                let iteration = 0;
                clearInterval(element.decryptInterval);
                
                element.decryptInterval = setInterval(() => {
                    element.textContent = newText.split("").map((letter, index) => {
                        if(index < iteration) return newText[index];
                        if(newText[index] === " " || newText[index] === "\n") return newText[index];
                        return decryptChars[Math.floor(Math.random() * decryptChars.length)];
                    }).join("");
                    
                    if(iteration >= newText.length) clearInterval(element.decryptInterval);
                    iteration += 1 / 2; // Decrypt speed multiplier
                }, speed);
            }

            // Project Modals
            const projectModal = document.getElementById('projectModal');
            const closeModal = document.getElementById('closeModal');
            const modalTitleEl = document.getElementById('modalTitle');
            const modalDescEl = document.getElementById('modalDesc');
            const modalDescText = modalDescEl ? modalDescEl.textContent.trim() : "";
            
            pCards.forEach(card => {
                card.style.cursor = 'pointer';
                card.addEventListener('click', () => {
                    const title = card.querySelector('.project-title').textContent.trim();
                    const category = card.getAttribute('data-category');
                    const link = card.querySelector('.project-link').getAttribute('href');
                    const logoEl = card.querySelector('.project-logo');
                    const logoHtml = logoEl ? logoEl.innerHTML : '';
                    
                    // Map category to translation key
                    const categoryMap = { "Berjalan": "proj_prog", "Selesai": "proj_comp", "Unggulan": "proj_feat" };
                    const catKey = categoryMap[category];
                    const currentLang = localStorage.getItem('site_lang') || 'id';
                    
                    const tagEl = document.getElementById('modalTag');
                    if (catKey) {
                        tagEl.setAttribute('data-i18n', catKey);
                        tagEl.innerText = translations[catKey] ? translations[catKey][currentLang] : category;
                    } else {
                        tagEl.removeAttribute('data-i18n');
                        tagEl.innerText = category;
                    }
                    
                    document.getElementById('modalLogo').innerHTML = logoHtml;
                    document.getElementById('modalLink').setAttribute('href', link);
                    
                    projectModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                    
                    // Trigger Decrypt Effect
                    if (modalTitleEl) decryptText(modalTitleEl, title, 40);
                    if (modalDescEl) {
                        const customDesc = card.getAttribute('data-desc');
                        
                        // Use custom desc if available, else fallback to generic text
                        let localizedText = customDesc ? customDesc : modalDescText;
                        
                        // If it matches the default English generic text, try getting translation
                        if (!customDesc) {
                            const descKey = modalDescEl.getAttribute('data-i18n');
                            if (descKey && translations[descKey] && translations[descKey][currentLang]) {
                                localizedText = translations[descKey][currentLang];
                            }
                        }
                            
                        modalDescEl.textContent = "";
                        setTimeout(() => decryptText(modalDescEl, localizedText, 15), 300);
                    }
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
            // Stats Counter Animation
            const statsSection = document.getElementById('stats-section');
            const counters = document.querySelectorAll('.counter');
            let hasCounted = false;

            if (statsSection && counters.length > 0) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !hasCounted) {
                            hasCounted = true;
                            counters.forEach(counter => {
                                const target = +counter.getAttribute('data-target');
                                const duration = 2000; // 2 seconds
                                const increment = target / (duration / 16); // 60fps
                                
                                let current = 0;
                                const updateCounter = () => {
                                    current += increment;
                                    if (current < target) {
                                        counter.innerText = Math.ceil(current);
                                        requestAnimationFrame(updateCounter);
                                    } else {
                                        counter.innerText = target;
                                    }
                                };
                                updateCounter();
                            });
                        }
                    });
                }, { threshold: 0.5 });
                
                counterObserver.observe(statsSection);
            }

            // ⚡ Build My Site — Replay Mode Logic
            const replayBtn = document.getElementById('replayBtn');
            const replayTerminal = document.getElementById('replayTerminal');
            const terminalBody = document.getElementById('terminalBody');
            const replaySkip = document.getElementById('replaySkip');
            let isReplaying = false;

            const terminalLines = [
                { text: '> Initializing project...', delay: 0 },
                { text: '> Writing HTML structure...', delay: 600, suffix: ' ✓', suffixClass: 't-check' },
                { text: '> Compiling CSS & design system...', delay: 1400, suffix: ' ✓', suffixClass: 't-check' },
                { text: '> Attaching JavaScript interactions...', delay: 2200, suffix: ' ✓', suffixClass: 't-check' },
                { text: '> Launching animations & particles...', delay: 3100, suffix: ' ✓', suffixClass: 't-check' },
                { text: '> 🚀 Build complete! Welcome back.', delay: 3900 },
            ];

            function addTerminalLine(text, suffixText, suffixClass, animDelay) {
                setTimeout(() => {
                    const line = document.createElement('div');
                    line.className = 't-line';
                    line.style.animationDelay = '0s';
                    line.innerHTML = `<span class="t-prompt">$</span><span>${text}</span>${suffixText ? `<span class="${suffixClass}">${suffixText}</span>` : ''}`;
                    terminalBody.appendChild(line);
                    terminalBody.scrollTop = terminalBody.scrollHeight;
                }, animDelay);
            }

            // ===== RADAR CHART =====
            (function initRadarChart() {
                const skills = [
                    { pct: 0.90, angle: -90 },   // Frontend (top)
                    { pct: 0.82, angle: -30 },   // Backend
                    { pct: 0.75, angle: 30 },    // Database
                    { pct: 0.85, angle: 90 },    // UI/UX (bottom)
                    { pct: 0.65, angle: 150 },   // Mobile
                    { pct: 0.60, angle: 210 },   // DevOps
                ];

                const RADIUS = 100;
                const polygon = document.getElementById('radarDataPoly');

                function calcPoint(angleDeg, pct) {
                    const rad = (angleDeg * Math.PI) / 180;
                    return {
                        x: Math.cos(rad) * RADIUS * pct,
                        y: Math.sin(rad) * RADIUS * pct
                    };
                }

                function animateCounter(el, target, duration) {
                    let start = 0;
                    const step = target / (duration / 16);
                    const tick = () => {
                        start += step;
                        if (start < target) {
                            el.textContent = Math.ceil(start) + '%';
                            requestAnimationFrame(tick);
                        } else {
                            el.textContent = target + '%';
                        }
                    };
                    requestAnimationFrame(tick);
                }

                function animateRadar() {
                    const points = skills.map(s => calcPoint(s.angle, s.pct));
                    const polyStr = points.map(p => `${p.x.toFixed(2)},${p.y.toFixed(2)}`).join(' ');
                    polygon.setAttribute('points', polyStr);
                    // Position dots
                    points.forEach((p, i) => {
                        const dot = document.getElementById(`radarDot${i}`);
                        if (dot) { dot.setAttribute('cx', p.x.toFixed(2)); dot.setAttribute('cy', p.y.toFixed(2)); }
                    });
                    // Animate skill bars + percentage counters
                    document.querySelectorAll('.radar-skill-item').forEach((item, i) => {
                        const fill = item.querySelector('.radar-skill-fill');
                        const pctEl = item.querySelector('.radar-skill-pct');
                        const target = parseInt(fill.getAttribute('data-pct'));
                        // Stagger each bar slightly
                        const delay = i * 80;
                        setTimeout(() => {
                            fill.style.width = target + '%';
                            if (pctEl) animateCounter(pctEl, target, 1200);
                        }, delay);
                    });
                }

                // Trigger on scroll into view
                const wrapper = document.getElementById('radarWrapper');
                if (wrapper) {
                    const obs = new IntersectionObserver(entries => {
                        if (entries[0].isIntersecting) {
                            setTimeout(animateRadar, 200);
                            obs.disconnect();
                        }
                    }, { threshold: 0.3 });
                    obs.observe(wrapper);
                }
            })();

            // ===== CONTACT TERMINAL =====
            (function initContactTerminal() {
                const termBody = document.getElementById('contactTerminalBody');
                if (!termBody) return;
                
                const isMobile = window.innerWidth <= 1024;
                const awaitMsg = isMobile ? "Awaiting your message above..." : "Awaiting your message on the left...";
                
                const lines = [
                    "Establishing secure connection...",
                    "Handshake successful. [OK]",
                    "Authenticating session...",
                    "Access granted.",
                    "Loading communication protocols...",
                    "System ready.",
                    awaitMsg
                ];
                let lineIdx = 0;
                let started = false;
                
                const typeNextLine = () => {
                    if (lineIdx < lines.length) {
                        const div = document.createElement('div');
                        div.className = 'c-term-line';
                        div.innerHTML = `<span class="c-term-prompt">&gt;</span><span class="c-term-text">${lines[lineIdx]}</span>`;
                        termBody.appendChild(div);
                        termBody.scrollTop = termBody.scrollHeight;
                        lineIdx++;
                        setTimeout(typeNextLine, Math.random() * 600 + 300);
                    } else {
                        const curLine = document.createElement('div');
                        curLine.className = 'c-term-line';
                        curLine.innerHTML = `<span class="c-term-prompt">&gt;</span><span class="c-term-cursor"></span>`;
                        termBody.appendChild(curLine);
                        termBody.scrollTop = termBody.scrollHeight;
                    }
                };

                const termWrapper = document.querySelector('.contact-terminal');
                if (termWrapper) {
                    termWrapper.addEventListener('mouseenter', () => {
                        if (!started) {
                            started = true;
                            // Add an initial empty cursor blinking before typing starts
                            termBody.innerHTML = `<div class="c-term-line"><span class="c-term-prompt">&gt;</span><span class="c-term-cursor" id="tempCursor"></span></div>`;
                            
                            setTimeout(() => {
                                const temp = document.getElementById('tempCursor');
                                if (temp) temp.parentElement.remove();
                                typeNextLine();
                            }, 600);
                        }
                    });
                }
            })();

            function runCounters() {
                hasCounted = false;
                counters.forEach(counter => {
                    counter.innerText = '0';
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000;
                    const increment = target / (duration / 16);
                    let current = 0;
                    const updateCounter = () => {
                        current += increment;
                        if (current < target) { counter.innerText = Math.ceil(current); requestAnimationFrame(updateCounter); }
                        else { counter.innerText = target; }
                    };
                    updateCounter();
                });
            }

            function startReplay() {
                if (isReplaying) return;
                isReplaying = true;
                replayBtn.style.display = 'none';
                replaySkip.style.display = 'block';
                terminalBody.innerHTML = '';

                // Phase 1: Hide all content
                const allRevealed = document.querySelectorAll('.reveal');
                allRevealed.forEach(el => { el.classList.remove('active'); });

                // Show terminal
                setTimeout(() => { replayTerminal.classList.add('visible'); }, 300);

                // Phase 2: Type terminal lines
                terminalLines.forEach(line => {
                    addTerminalLine(line.text, line.suffix || '', line.suffixClass || '', line.delay + 400);
                });

                // Phase 3: Rebuild elements with stagger
                setTimeout(() => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }, 200);

                setTimeout(() => {
                    allRevealed.forEach((el, index) => {
                        setTimeout(() => { el.classList.add('active'); }, index * 150);
                    });
                    runCounters();
                }, 4800);

                // Phase 4: Cleanup
                setTimeout(() => {
                    replayTerminal.classList.remove('visible');
                    setTimeout(() => {
                        replayBtn.style.display = '';
                        replaySkip.style.display = 'none';
                        isReplaying = false;
                        terminalBody.innerHTML = '';
                    }, 500);
                }, 5800);
            }

            function skipReplay() {
                const allRevealed = document.querySelectorAll('.reveal');
                allRevealed.forEach(el => { el.classList.add('active'); });
                replayTerminal.classList.remove('visible');
                setTimeout(() => {
                    replaySkip.style.display = 'none';
                    isReplaying = false;
                    terminalBody.innerHTML = '';
                }, 400);
            }

            if (replaySkip) replaySkip.addEventListener('click', skipReplay);
        });
    </script>
    
    <!-- Vanilla Tilt 3D Effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>

    <!-- Lenis Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <script>
        if (typeof Lenis !== 'undefined') {
            const lenis = new Lenis({
                duration: 0.8,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                wheelMultiplier: 1.2,
                smoothTouch: false,
                touchMultiplier: 2,
                infinite: false,
            })

            function raf(time) {
                lenis.raf(time)
                requestAnimationFrame(raf)
            }

            requestAnimationFrame(raf)
        } else {
            console.warn("Lenis smooth scroll failed to load. Falling back to native scrolling.");
        }
    </script>
    
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        if (typeof particlesJS !== 'undefined') {
            particlesJS("particles-js", {
                "particles": {
                    "number": { "value": 70, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#10b981" },
                    "shape": { "type": "circle" },
                    "opacity": { "value": 0.5, "random": false },
                    "size": { "value": 2.5, "random": true },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#10b981",
                        "opacity": 0.3,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1.5,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false
                    }
                },
                "interactivity": {
                    "detect_on": "window",
                    "events": {
                        "onhover": { "enable": true, "mode": "grab" },
                        "onclick": { "enable": true, "mode": "push" },
                        "resize": true
                    },
                    "modes": {
                        "grab": { "distance": 200, "line_linked": { "opacity": 0.8 } },
                        "push": { "particles_nb": 3 }
                    }
                },
                "retina_detect": true
            });
        }

        // 🌐 Bilingual Translation Logic (EN/ID)
        const translations = {
            "nav_home": { id: "Beranda", en: "Home" },
            "nav_projects": { id: "Proyek", en: "Projects" },
            "nav_contact": { id: "Kontak", en: "Contact" },
            "nav_avail": { id: "Tersedia untuk proyek", en: "Available for work" },
            
            "hero_badge": { id: "PENGEMBANG WEB", en: "WEB DEVELOPER" },
            "hero_desc": { id: "Membangun aplikasi web yang efisien dan tangguh dengan estetika modern.", en: "Building efficient and robust web applications with modern aesthetics." },
            "hero_btn_work": { id: `Lihat Karya <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>`, en: `View Work <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>` },
            "hero_btn_contact": { id: `Hubungi Saya <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>`, en: `Contact Me <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 8px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>` },

            "tech_title": { id: `Ekosistem <span class="highlight">Teknologi</span>`, en: `Tech <span class="highlight">Ecosystem</span>` },
            "tech_desc": { id: "Teknologi yang berputar dan mendukung setiap project saya.", en: "The technologies orbiting and powering my every project." },

            "about_title": { id: "Lebih Dekat Dengan Saya", en: "Get to Know Me Closer" },
            "about_p1": { id: "Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses. Fokus saya tidak hanya pada fungsionalitas, namun juga pada estetika visual yang mampu memberikan pengalaman terbaik bagi pengguna.", en: "I am a passionate Web Developer focused on building modern, fast, and accessible web interfaces. I care deeply about both functionality and visual aesthetics to deliver the best user experience." },
            "about_p2": { id: "Dengan latar belakang yang kuat di bidang teknik informatika, saya selalu berusaha untuk terus mengikuti perkembangan teknologi terbaru dan mengimplementasikannya dalam setiap proyek yang saya kerjakan.", en: "With a strong background in informatics engineering, I constantly strive to keep up with the latest technological trends and implement them into every project I build." },
            "about_btn": { id: "Mari Berkolaborasi", en: "Let's Collaborate" },

            "services_title": { id: `Apa yang <span class="highlight">Saya Lakukan</span>`, en: `What I <span class="highlight">Do</span>` },
            "services_desc": { id: "Layanan & Spesialisasi", en: "Services & Specialities" },
            
            "srv_frontend_title": { id: "Frontend Architecture", en: "Frontend Architecture" },
            "srv_frontend_desc": { id: "Membangun antarmuka web (UI) interaktif dan mulus menggunakan teknologi modern dengan performa tinggi.", en: "Building seamless, interactive web interfaces (UI) using modern technologies for high performance." },
            "srv_responsive_title": { id: "Responsive Design", en: "Responsive Design" },
            "srv_responsive_desc": { id: "Memastikan aplikasi web Anda tampil sempurna dan berfungsi optimal di berbagai perangkat (Mobile, Tablet, Desktop).", en: "Ensuring your web application looks perfect and functions optimally across all devices (Mobile, Tablet, Desktop)." },
            "srv_backend_title": { id: "Backend Integration", en: "Backend Integration" },
            "srv_backend_desc": { id: "Menghubungkan antarmuka dengan sistem database dan API layanan pihak ketiga untuk fungsionalitas yang terpadu.", en: "Connecting interfaces with database systems and third-party APIs for cohesive functionality." },

            "exp_title": { id: `Perjalanan <span class="highlight">Karir</span>`, en: `My <span class="highlight">Journey</span>` },
            "exp_desc": { id: "Pengalaman Karir & Pendidikan", en: "Career & Education Experience" },
            "exp_1_date": { id: "2022 - Sekarang", en: "2022 - Present" },
            "exp_1_title": { id: "Freelance Web Developer", en: "Freelance Web Developer" },
            "exp_1_sub": { id: "Self-Employed / Freelance", en: "Self-Employed / Freelance" },
            "exp_1_desc": { id: "Mengembangkan berbagai aplikasi web modern menggunakan teknologi terkini seperti Laravel dan ekosistem JS.", en: "Developing various modern web applications using the latest technologies such as Laravel and the JS ecosystem." },
            
            "exp_2_title": { id: "Pengadministrasian Umum", en: "General Administration" },
            "exp_2_sub": { id: "Dewan Pengurus KORPRI Kab. Banjar", en: "KORPRI Board of Banjar Regency" },
            "exp_2_desc": { id: "Menangani administrasi umum, pengelolaan data, dan mendukung operasional instansi pemerintahan daerah.", en: "Handled general administration, data management, and supported regional government operations." },
            
            "exp_3_title": { id: "S1 Teknik Informatika", en: "B.S. in Informatics Engineering" },
            "exp_3_sub": { id: "Universitas Islam Kalimantan MAB", en: "Islamic University of Kalimantan MAB" },
            "exp_3_desc": { id: "Lulus program studi Teknik Informatika dengan fokus pada rekayasa perangkat lunak dan sistem informasi.", en: "Graduated in Informatics Engineering with a focus on software engineering and information systems." },

            "proj_title": { id: "Proyek Pilihan", en: "Selected Projects" },
            "proj_desc": { id: "Solusi terencana untuk klien perusahaan dan institusi.", en: "Engineered solutions for enterprise clients and institutions." },
            "proj_all": { id: "Semua", en: "All" },
            "proj_feat": { id: "Unggulan", en: "Featured" },
            "proj_comp": { id: "Selesai", en: "Completed" },
            "proj_prog": { id: "Berjalan", en: "In Progress" },
            "proj_dev_status": { id: "Tahap Pengembangan (Coming Soon)", en: "Development in Progress" },
            "proj_modal_desc": { 
                id: "Ini adalah proyek komprehensif yang dibangun untuk memecahkan logika bisnis yang kompleks. Arsitekturnya melibatkan integrasi API backend kustom, pengalaman pengguna frontend yang mulus, dan optimasi kueri database untuk memastikan waktu muat yang cepat serta skalabilitas tinggi.", 
                en: "This is a comprehensive project built to solve complex business logic. The architecture involves custom backend API integration, seamless frontend user experience, and optimized database queries ensuring fast load times and scalability." 
            },

            "contact_title": { id: "Mari berkolaborasi bersama.", en: "Let's build something great." },
            "contact_desc": { id: "Tersedia untuk pekerjaan freelance dan peluang penuh waktu. Jika Anda memiliki proyek yang membutuhkan rekayasa kreatif, mari bicara.", en: "Available for freelance work and full-time opportunities. If you have a project that needs some creative engineering, let's talk." },
            "contact_send": { id: "Kirim Pesan", en: "Send Message" },
            "contact_avail": { id: "Tersedia untuk proyek", en: "Available for work" },
            "contact_name": { id: "Nama Lengkap", en: "Full Name" },
            "contact_email": { id: "Alamat Email", en: "Email Address" },
            "contact_msg": { id: "Tulis pesan Anda di sini...", en: "Write your message here..." }
        };

        let currentLang = localStorage.getItem('site_lang') || 'id';
        const langToggleBtn = document.getElementById('langToggle');

        function updateLanguage(lang) {
            // Update button UI
            if (langToggleBtn) {
                langToggleBtn.textContent = lang === 'en' ? 'EN' : 'ID';
            }

            // Update standard i18n text
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (translations[key] && translations[key][lang]) {
                    el.style.opacity = '0';
                    setTimeout(() => {
                        el.innerHTML = translations[key][lang];
                        el.style.opacity = '1';
                    }, 150);
                }
            });

            // Update placeholders
            document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
                const key = el.getAttribute('data-i18n-placeholder');
                if (translations[key] && translations[key][lang]) {
                    el.placeholder = translations[key][lang];
                }
            });

            // Update filter buttons to preserve badge span
            document.querySelectorAll('[data-i18n-btn]').forEach(el => {
                const key = el.getAttribute('data-i18n-btn');
                if (translations[key] && translations[key][lang]) {
                    const badge = el.querySelector('.badge');
                    const badgeHtml = badge ? badge.outerHTML : '';
                    el.innerHTML = translations[key][lang] + " " + badgeHtml;
                }
            });

            // Fix glitch text data attribute when translating
            const heroBadgeText = document.getElementById('heroBadgeText');
            if (heroBadgeText) {
                heroBadgeText.setAttribute('data-text', translations['hero_badge'][lang] || translations['hero_badge']['id']);
            }
            
            const digitalIdRole = document.querySelector('.digital-id-role.glitch-role');
            if (digitalIdRole) {
                const roleData = translations['hero_badge'][lang] || translations['hero_badge']['id'];
                digitalIdRole.setAttribute('data-text', roleData);
                digitalIdRole.innerHTML = roleData;
            }
            
            localStorage.setItem('lang', lang);
        }

        if (langToggleBtn) {
            langToggleBtn.addEventListener('click', () => {
                currentLang = currentLang === 'en' ? 'id' : 'en';
                localStorage.setItem('site_lang', currentLang);
                updateLanguage(currentLang);
                
                // Also trigger voice intro language change if it exists
                const voiceLangBtn = document.querySelector(`.voice-lang-btn[data-lang="${currentLang}"]`);
                if (voiceLangBtn) voiceLangBtn.click();
                // Show notification toast
                let toast = document.getElementById('langToast');
                if (!toast) {
                    toast = document.createElement('div');
                    toast.id = 'langToast';
                    Object.assign(toast.style, {
                        position: 'fixed',
                        bottom: '30px',
                        left: '50%',
                        transform: 'translateX(-50%) translateY(20px)',
                        background: 'rgba(15, 23, 42, 0.9)',
                        color: '#fff',
                        padding: '12px 24px',
                        borderRadius: '30px',
                        fontSize: '14px',
                        fontWeight: '600',
                        fontFamily: "'Inter', sans-serif",
                        boxShadow: '0 10px 25px rgba(0,0,0,0.5), 0 0 15px rgba(16, 185, 129, 0.2)',
                        border: '1px solid rgba(16, 185, 129, 0.3)',
                        backdropFilter: 'blur(12px)',
                        opacity: '0',
                        transition: 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)',
                        zIndex: '9999',
                        pointerEvents: 'none'
                    });
                    document.body.appendChild(toast);
                }
                
                toast.innerHTML = currentLang === 'en' 
                    ? '<span style="margin-right: 8px;">🇬🇧</span> Language switched to English' 
                    : '<span style="margin-right: 8px;">🇮🇩</span> Bahasa diubah ke Indonesia';
                
                requestAnimationFrame(() => {
                    toast.style.opacity = '1';
                    toast.style.transform = 'translateX(-50%) translateY(0)';
                });
                
                if(toast.hideTimeout) clearTimeout(toast.hideTimeout);
                toast.hideTimeout = setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(-50%) translateY(20px)';
                }, 3000);
            });
        }

        // Apply on initial load
        if(currentLang === 'en') {
            updateLanguage('en');
        } else {
            // If ID, just ensure button shows ID
            if(langToggleBtn) langToggleBtn.textContent = 'ID';
        }
        // Telegram Form Submission
        async function sendToTelegram(e) {
            e.preventDefault();
            
            const botToken = '8811902111:AAF_TB5jPYLFNxhIqs8UlQbL-G3LcCSm-3E';
            const chatId = '713471706';
            
            const nameInput = document.getElementById('senderName');
            const emailInput = document.getElementById('senderEmail');
            const messageInput = document.getElementById('senderMessage');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const sendIcon = submitBtn.querySelector('.send-icon');
            const loader = submitBtn.querySelector('.loader');
            
            // Validate
            if(!nameInput.value || !emailInput.value || !messageInput.value) return;
            
            // Set loading state
            submitBtn.disabled = true;
            btnText.style.opacity = '0';
            if(sendIcon) sendIcon.style.display = 'none';
            if(loader) loader.style.display = 'block';
            
            const text = `📬 *Pesan Baru dari Portfolio!*\n\n*Nama:* ${nameInput.value}\n*Email:* ${emailInput.value}\n*Pesan:*\n${messageInput.value}`;
            
            try {
                const response = await fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: text,
                        parse_mode: 'Markdown'
                    })
                });
                
                if(response.ok) {
                    // Success Toast
                    let toast = document.getElementById('langToast');
                    if (!toast) {
                        toast = document.createElement('div');
                        toast.id = 'langToast';
                        Object.assign(toast.style, {
                            position: 'fixed', bottom: '30px', left: '50%', transform: 'translateX(-50%) translateY(20px)',
                            background: 'rgba(16, 185, 129, 0.9)', color: '#fff', padding: '12px 24px', borderRadius: '30px',
                            fontSize: '14px', fontWeight: '600', fontFamily: "'Inter', sans-serif",
                            boxShadow: '0 10px 25px rgba(0,0,0,0.5)', border: '1px solid rgba(255, 255, 255, 0.3)',
                            backdropFilter: 'blur(12px)', opacity: '0', transition: 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)', zIndex: '9999', pointerEvents: 'none'
                        });
                        document.body.appendChild(toast);
                    }
                    toast.style.background = 'rgba(16, 185, 129, 0.9)'; // Green for success
                    toast.innerHTML = '<span style="margin-right: 8px;">✅</span> Pesan berhasil dikirim!';
                    requestAnimationFrame(() => { toast.style.opacity = '1'; toast.style.transform = 'translateX(-50%) translateY(0)'; });
                    
                    if(toast.hideTimeout) clearTimeout(toast.hideTimeout);
                    toast.hideTimeout = setTimeout(() => { toast.style.opacity = '0'; toast.style.transform = 'translateX(-50%) translateY(20px)'; }, 4000);
                    
                    // Reset form
                    e.target.reset();
                } else {
                    throw new Error('Gagal mengirim');
                }
            } catch(error) {
                alert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
                console.error(error);
            } finally {
                // Restore button state
                submitBtn.disabled = false;
                btnText.style.opacity = '1';
                if(sendIcon) sendIcon.style.display = 'inline-block';
                if(loader) loader.style.display = 'none';
                
                if (currentLang === 'en') {
                    btnText.textContent = 'Message Sent!';
                    setTimeout(() => { btnText.textContent = 'Send Message'; }, 3000);
                } else {
                    btnText.textContent = 'Pesan Terkirim!';
                    setTimeout(() => { btnText.textContent = 'Kirim Pesan'; }, 3000);
                }
            }
        }

    </script>
</body>
</html>
