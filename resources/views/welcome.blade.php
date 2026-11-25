<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- Primary Meta Tags -->
    <title>{{ $settings['name'] ?? 'ANGGA WIRANATA' }} | Web Craftsman — Edisi Manga</title>
    <meta name="title" content="{{ $settings['name'] ?? 'ANGGA WIRANATA' }} | Web Craftsman — Edisi Manga">
    <meta name="description" content="{{ $settings['description'] ?? 'Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React.' }}">
    <meta name="keywords" content="Web Developer, Web Craftsman, Software Engineer, Frontend Developer, Laravel, React, Portfolio, Angga Wiranata, Programmer Indonesia">
    <meta name="author" content="{{ $settings['name'] ?? 'ANGGA WIRANATA' }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://anggawiranata.my.id/">
    <meta name="theme-color" id="theme-color-meta" content="#f6f1e4">

    <!-- Schema.org JSON-LD for Google -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ProfilePage",
      "mainEntity": {
        "@@type": "Person",
        "name": "{{ $settings['name'] ?? 'ANGGA WIRANATA' }}",
        "jobTitle": "Web Craftsman (Full-stack Developer)",
        "url": "https://anggawiranata.my.id/",
        "image": "https://anggawiranata.my.id/images/profile.jpg",
        "sameAs": [
          "https://github.com/kyraaa-dev",
          "https://www.linkedin.com/in/angga-wiranata-320837420",
          "https://www.instagram.com/_anggawiranata"
        ],
        "description": "Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React."
      }
    }
    </script>

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://anggawiranata.my.id/">
    <meta property="og:site_name" content="Angga Wiranata Portfolio">
    <meta property="og:title" content="{{ $settings['name'] ?? 'ANGGA WIRANATA' }} | Web Craftsman — Edisi Manga">
    <meta property="og:description" content="{{ $settings['description'] ?? 'Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React.' }}">
    <meta property="og:image" content="https://anggawiranata.my.id/images/og-image.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://anggawiranata.my.id/">
    <meta property="twitter:title" content="{{ $settings['name'] ?? 'ANGGA WIRANATA' }} | Web Craftsman — Edisi Manga">
    <meta property="twitter:description" content="{{ $settings['description'] ?? 'Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React.' }}">
    <meta property="twitter:image" content="https://anggawiranata.my.id/images/og-image.png">

    <!-- Favicon & Search Icons -->
    <link rel="icon" type="image/png" sizes="48x48" href="images/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon-192x192.png">

    <!-- Google Fonts: Bangers (Display/Manga) + Kosugi Maru (Readable Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Kosugi+Maru&display=swap" rel="stylesheet">

    <!-- Prevent Theme Flash (Follows System Preference by Default) -->
    <script>
        (function() {
            try {
                var saved = localStorage.getItem('manga_theme');
                var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                var theme = (saved === 'dark' || saved === 'light') ? saved : (prefersDark ? 'dark' : 'light');
                document.documentElement.setAttribute('data-theme', theme);
                var meta = document.getElementById('theme-color-meta');
                if (meta) meta.setAttribute('content', theme === 'dark' ? '#121212' : '#f6f1e4');
            } catch (e) {}
        })();
    </script>

    <style>
        /* =====================================================================
           MANGA EDITION DESIGN SYSTEM — Desain.md (Angga Wiranata)
           Black Ink on Cream Paper + Single Red Accent, Hard Borders, Zero Lag
           ===================================================================== */
        :root {
            --paper: #f6f1e4;
            --ink: #111111;
            --panel: #fffdf6;
            --red: #e63946;
            --tone: rgba(17, 17, 17, 0.16);
            --mute: #444444;
            --on-red: #fffdf6;
            --font-display: 'Bangers', Impact, 'Arial Black', sans-serif;
            --font-body: 'Kosugi Maru', 'Trebuchet MS', system-ui, -apple-system, sans-serif;
            --nav-h: 72px;
        }

        [data-theme="dark"] {
            --paper: #121212;
            --ink: #f2efe6;
            --panel: #1c1c1c;
            --red: #ff5a66;
            --tone: rgba(242, 239, 230, 0.14);
            --mute: #c9c5ba;
            --on-red: #ffffff;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: calc(var(--nav-h) + 18px);
            background-color: var(--paper);
            scrollbar-color: var(--ink) var(--paper);
            scrollbar-width: thin;
        }

        body {
            font-family: var(--font-body);
            font-size: 1rem;
            line-height: 1.6;
            color: var(--ink);
            background-color: var(--paper);
            background-image: radial-gradient(var(--tone) 1.2px, transparent 1.2px);
            background-size: 14px 14px;
            min-height: 100vh;
            overflow-x: clip;
            -webkit-font-smoothing: antialiased;
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
            color: inherit;
        }

        /* Headings — Always Uppercase Bangers */
        h1, h2, h3, .font-display {
            font-family: var(--font-display);
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-weight: 400;
        }

        h1 { font-size: clamp(3rem, 9vw, 6rem); line-height: 0.96; }
        h2 { font-size: clamp(2rem, 6vw, 3.2rem); line-height: 1; }
        h3 { font-size: 1.55rem; line-height: 1.12; }

        /* Container */
        .wrap {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            padding-left: max(18px, env(safe-area-inset-left, 18px));
            padding-right: max(18px, env(safe-area-inset-right, 18px));
        }

        /* Core Manga Panel Component */
        .panel {
            position: relative;
            background: var(--panel);
            border: 4px solid var(--ink);
            box-shadow: 7px 7px 0 var(--ink);
        }

        /* Background Patterns */
        .speedlines {
            overflow: hidden;
        }
        .speedlines::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 68% 62% at 50% 50%, var(--panel) 30%, transparent 94%),
                repeating-conic-gradient(from 0deg at 50% 50%, var(--tone) 0deg 2deg, transparent 2deg 9deg);
            pointer-events: none;
            z-index: 0;
        }
        .speedlines > * {
            position: relative;
            z-index: 1;
        }

        .radials {
            overflow: hidden;
        }
        .radials::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: repeating-radial-gradient(circle at 50% 50%, var(--tone) 0 1.4px, transparent 1.4px 10px);
            pointer-events: none;
            z-index: 0;
        }
        .radials > * {
            position: relative;
            z-index: 1;
        }

        /* SFX Decorative Typography */
        .sfx {
            font-family: var(--font-display);
            color: var(--red);
            -webkit-text-stroke: 2px var(--ink);
            paint-order: stroke fill;
            letter-spacing: 0.06em;
            line-height: 1;
            user-select: none;
            pointer-events: none;
            display: inline-block;
        }

        /* Manga Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: var(--font-display);
            font-size: 1.25rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 10px 22px 8px;
            background: var(--red);
            color: var(--on-red);
            border: 3px solid var(--ink);
            box-shadow: 4px 4px 0 var(--ink);
            cursor: pointer;
            line-height: 1.1;
            transition: transform 0.12s ease, box-shadow 0.12s ease, background-color 0.12s ease, color 0.12s ease;
        }
        [data-theme="dark"] .btn:not(.alt) {
            text-shadow: 1.5px 1.5px 0 #111111;
        }
        .btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 var(--ink);
        }
        .btn:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0 var(--ink);
        }
        .btn.alt {
            background: var(--panel);
            color: var(--ink);
        }
        .btn.alt:hover {
            background: var(--ink);
            color: var(--panel);
        }

        /* Manga Tags */
        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .tag {
            display: inline-block;
            padding: 4px 10px;
            font-size: 0.85rem;
            font-weight: 700;
            background: var(--paper);
            color: var(--ink);
            border: 2px solid var(--ink);
            line-height: 1.3;
        }

        /* Chapter Heading (BAB 1–5) */
        .chapter {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 56px;
            margin-bottom: 24px;
        }
        .chapter-num {
            flex-shrink: 0;
            display: inline-block;
            background: var(--red);
            color: var(--on-red);
            font-family: var(--font-display);
            font-size: 1.35rem;
            letter-spacing: 0.06em;
            padding: 5px 14px 3px;
            border: 3px solid var(--ink);
            box-shadow: 4px 4px 0 var(--ink);
            transform: skew(-10deg);
            line-height: 1.1;
        }
        [data-theme="dark"] .chapter-num {
            text-shadow: 1.5px 1.5px 0 #111111;
        }
        .chapter-num > span {
            display: inline-block;
            transform: skew(10deg);
        }
        .chapter h2 {
            flex-shrink: 0;
        }
        .chapter-line {
            flex: 1;
            height: 6px;
            background: var(--ink);
            min-width: 24px;
        }

        /* =====================================================================
           NAVIGATION (Sticky, 4px Bottom Border, ANGGA.DEV)
           ===================================================================== */
        .nav {
            position: sticky;
            top: 0;
            z-index: 500;
            background: var(--paper);
            border-bottom: 4px solid var(--ink);
            padding-top: env(safe-area-inset-top, 0px);
        }
        .nav-inner {
            min-height: var(--nav-h);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding-top: 8px;
            padding-bottom: 8px;
        }
        .brand {
            font-family: var(--font-display);
            font-size: 2rem;
            letter-spacing: 0.06em;
            line-height: 1;
            display: inline-flex;
            align-items: baseline;
            color: var(--ink);
            transition: transform 0.12s ease;
        }
        .brand:hover {
            transform: translate(-2px, -2px);
        }
        .brand-dot {
            color: var(--red);
            margin: 0 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .nav-link {
            font-weight: 700;
            font-size: 0.94rem;
            padding: 7px 12px;
            border: 2px solid transparent;
            transition: transform 0.12s ease, background-color 0.12s ease, color 0.12s ease, border-color 0.12s ease;
        }
        .nav-link:hover,
        .nav-link.active {
            background: var(--red);
            color: var(--on-red);
            border-color: var(--ink);
            transform: translate(-2px, -2px);
            box-shadow: 3px 3px 0 var(--ink);
        }
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .theme-btn,
        .menu-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            height: 40px;
            padding: 0 12px;
            background: var(--panel);
            color: var(--ink);
            border: 3px solid var(--ink);
            box-shadow: 3px 3px 0 var(--ink);
            cursor: pointer;
            font-family: var(--font-display);
            font-size: 1.05rem;
            letter-spacing: 0.05em;
            transition: transform 0.12s ease, box-shadow 0.12s ease, background-color 0.12s ease, color 0.12s ease;
        }
        .theme-btn:hover,
        .menu-btn:hover {
            background: var(--red);
            color: var(--on-red);
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0 var(--ink);
        }
        .menu-btn {
            display: none;
            width: 42px;
            padding: 0;
        }
        .mobile-drawer {
            display: none;
            border-top: 3px solid var(--ink);
            background: var(--panel);
            padding: 12px 18px 16px;
        }
        .mobile-drawer.open {
            display: block;
        }
        .mobile-drawer-links {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .mobile-drawer-links a {
            display: block;
            padding: 10px 14px;
            font-family: var(--font-display);
            font-size: 1.3rem;
            letter-spacing: 0.05em;
            background: var(--paper);
            border: 3px solid var(--ink);
            box-shadow: 3px 3px 0 var(--ink);
        }
        .mobile-drawer-links a:hover,
        .mobile-drawer-links a.active {
            background: var(--red);
            color: var(--on-red);
        }

        /* =====================================================================
           HERO (1.35fr : 1fr — Title Panel + Character Panel)
           ===================================================================== */
        .hero {
            padding-top: 28px;
        }
        .hero-grid {
            display: grid;
            grid-template-columns: 1.35fr 1fr;
            gap: 20px;
            align-items: stretch;
        }
        .hero-title-panel {
            padding: 30px 28px 28px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 16px;
        }
        .kicker {
            display: inline-block;
            align-self: flex-start;
            background: var(--ink);
            color: var(--panel);
            font-family: var(--font-display);
            font-size: 1.15rem;
            letter-spacing: 0.08em;
            padding: 5px 14px 3px;
            transform: rotate(-2deg);
            box-shadow: 4px 4px 0 var(--red);
        }
        .hero-name {
            color: var(--ink);
            text-shadow: 4px 4px 0 var(--paper), 7px 7px 0 var(--tone);
        }
        .hero-role {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: var(--font-display);
            font-size: 1.55rem;
            letter-spacing: 0.08em;
            color: var(--red);
            -webkit-text-stroke: 1px var(--ink);
            paint-order: stroke fill;
        }
        .hero-role::before {
            content: '';
            display: inline-block;
            width: 24px;
            height: 4px;
            background: var(--ink);
        }

        /* Speech Bubble (.bubble) */
        .bubble {
            position: relative;
            background: var(--panel);
            border: 3px solid var(--ink);
            border-radius: 26px;
            padding: 16px 20px;
            margin-bottom: 14px;
            box-shadow: 4px 4px 0 var(--ink);
            color: var(--ink);
            font-size: 0.98rem;
            line-height: 1.55;
        }
        .bubble::before {
            content: '';
            position: absolute;
            left: 28px;
            bottom: -18px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 18px 16px 0 0;
            border-color: var(--ink) transparent transparent transparent;
        }
        .bubble::after {
            content: '';
            position: absolute;
            left: 31px;
            bottom: -11px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 13px 11px 0 0;
            border-color: var(--panel) transparent transparent transparent;
        }
        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 4px;
        }

        /* Character Panel */
        .hero-char-panel {
            padding: 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            min-height: 360px;
        }
        .char-top-row {
            width: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }
        .char-sfx-top {
            font-size: 2.3rem;
            transform: rotate(-10deg);
        }
        .char-issue {
            font-family: var(--font-display);
            font-size: 1rem;
            letter-spacing: 0.08em;
            padding: 3px 10px 2px;
            border: 2px solid var(--ink);
            background: var(--panel);
        }
        .char-portrait-wrap {
            position: relative;
            width: 210px;
            height: 210px;
            border: 4px solid var(--ink);
            box-shadow: 6px 6px 0 var(--ink);
            background: var(--paper);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .char-portrait-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            filter: grayscale(100%) contrast(1.24) brightness(1.03);
            transition: filter 0.18s ease;
        }
        .hero-char-panel:hover .char-portrait-img {
            filter: grayscale(35%) contrast(1.1);
        }
        .char-monogram-fallback {
            display: none;
            font-family: var(--font-display);
            font-size: 5.5rem;
            color: var(--ink);
            letter-spacing: 0.06em;
            line-height: 1;
        }
        .char-portrait-wrap.is-fallback .char-monogram-fallback {
            display: block;
        }
        .char-portrait-wrap.is-fallback .char-portrait-img {
            display: none;
        }
        .char-monogram-seal {
            position: absolute;
            top: 8px;
            left: 8px;
            background: var(--red);
            color: var(--on-red);
            font-family: var(--font-display);
            font-size: 1.1rem;
            letter-spacing: 0.06em;
            padding: 3px 8px 1px;
            border: 2.5px solid var(--ink);
            box-shadow: 2px 2px 0 var(--ink);
            line-height: 1.1;
        }
        .char-bottom-row {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }
        .char-sfx-bot {
            font-size: 1.65rem;
            transform: rotate(-6deg);
        }
        .char-level {
            font-family: var(--font-display);
            font-size: 1.2rem;
            letter-spacing: 0.08em;
            background: var(--ink);
            color: var(--panel);
            padding: 4px 12px 2px;
            border: 2px solid var(--ink);
            box-shadow: 3px 3px 0 var(--red);
        }

        /* =====================================================================
           STATISTICS STRIP (4 Columns)
           ===================================================================== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 22px;
        }
        .stat-box {
            padding: 18px 14px 16px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
        }
        .stat-num {
            font-family: var(--font-display);
            font-size: 3rem;
            line-height: 1.05;
            letter-spacing: 0.04em;
            color: var(--red);
            -webkit-text-stroke: 2px var(--ink);
            paint-order: stroke fill;
        }
        .stat-num--long {
            font-size: 2.2rem;
        }
        .stat-label {
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: var(--ink);
        }

        /* =====================================================================
           BAB 1 — ABOUT (2 Equal Columns)
           ===================================================================== */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .about-card {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .about-card h3 {
            font-size: 1.65rem;
            border-bottom: 3px solid var(--ink);
            padding-bottom: 8px;
        }
        .about-card p {
            color: var(--mute);
            font-size: 0.95rem;
        }
        .about-card .tag-list {
            margin-top: auto;
            padding-top: 6px;
        }

        /* =====================================================================
           BAB 2 — SERVICES (3 Columns, Alternating ±0.6° Tilt)
           ===================================================================== */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }
        .service-card {
            padding: 22px 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
        .service-card:nth-child(odd) {
            transform: rotate(-0.6deg);
        }
        .service-card:nth-child(even) {
            transform: rotate(0.6deg);
        }
        .service-card:hover {
            transform: rotate(0deg) translate(-2px, -2px);
            box-shadow: 9px 9px 0 var(--ink);
        }
        .service-num {
            display: inline-block;
            align-self: flex-start;
            font-family: var(--font-display);
            font-size: 1.05rem;
            letter-spacing: 0.06em;
            background: var(--ink);
            color: var(--panel);
            padding: 2px 9px 1px;
        }
        .service-card h3 {
            font-size: 1.48rem;
        }
        .service-card p {
            font-size: 0.92rem;
            color: var(--mute);
        }

        /* =====================================================================
           BAB 3 — CAREER STRIP (4 Columns Inside One Panel Frame)
           ===================================================================== */
        .career-strip {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow: hidden;
        }
        .career-cell {
            padding: 22px 18px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            border-right: 4px solid var(--ink);
        }
        .career-cell:last-child {
            border-right: none;
        }
        .career-badge {
            display: inline-block;
            align-self: flex-start;
            font-family: var(--font-display);
            font-size: 1.1rem;
            letter-spacing: 0.06em;
            padding: 4px 10px 2px;
            background: var(--ink);
            color: var(--panel);
            border: 2px solid var(--ink);
            line-height: 1.1;
        }
        .career-badge.is-levelup {
            background: var(--red);
            color: var(--on-red);
            box-shadow: 3px 3px 0 var(--ink);
            transform: rotate(-2deg);
        }
        [data-theme="dark"] .career-badge.is-levelup {
            text-shadow: 1.5px 1.5px 0 #111111;
        }
        .career-cell h3 {
            font-size: 1.42rem;
            margin-top: 2px;
        }
        .career-org {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--ink);
        }
        .career-desc {
            font-size: 0.9rem;
            color: var(--mute);
        }

        /* =====================================================================
           BAB 4 — PROJECTS (6-Column Manga Spread + Corner Halftone)
           ===================================================================== */
        .project-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .filter-btn {
            font-family: var(--font-display);
            font-size: 1.12rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 6px 14px 4px;
            background: var(--panel);
            color: var(--ink);
            border: 3px solid var(--ink);
            box-shadow: 3px 3px 0 var(--ink);
            cursor: pointer;
            transition: transform 0.12s ease, box-shadow 0.12s ease, background-color 0.12s ease, color 0.12s ease;
        }
        .filter-btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0 var(--ink);
        }
        .filter-btn.active {
            background: var(--red);
            color: var(--on-red);
        }
        [data-theme="dark"] .filter-btn.active {
            text-shadow: 1px 1px 0 #111111;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
        }
        .projects-grid.is-filtered {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
        .project-card {
            grid-column: span 2;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
        .project-card.span-4 {
            grid-column: span 4;
        }
        .projects-grid.is-filtered .project-card,
        .projects-grid.is-filtered .project-card.span-4 {
            grid-column: auto;
        }
        .project-card::after {
            content: '';
            position: absolute;
            right: -14px;
            bottom: -14px;
            width: 136px;
            height: 136px;
            background-image: radial-gradient(var(--ink) 1.7px, transparent 1.7px);
            background-size: 9px 9px;
            opacity: 0.22;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }
        .project-card > * {
            position: relative;
            z-index: 1;
        }
        .project-card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 9px 9px 0 var(--ink);
        }
        .project-thumb {
            width: 100%;
            aspect-ratio: 16 / 10;
            border: 3px solid var(--ink);
            background: var(--paper);
            overflow: hidden;
        }
        .project-card.span-4 .project-thumb {
            aspect-ratio: 21 / 9;
        }
        .projects-grid.is-filtered .project-card.span-4 .project-thumb {
            aspect-ratio: 16 / 10;
        }
        .project-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            filter: grayscale(100%) contrast(1.22) brightness(1.02);
            transition: filter 0.18s ease;
        }
        .project-card:hover .project-thumb img {
            filter: grayscale(15%) contrast(1.06);
        }
        .stamp {
            display: inline-block;
            align-self: flex-start;
            font-family: var(--font-display);
            font-size: 1.05rem;
            letter-spacing: 0.06em;
            padding: 3px 11px 2px;
            border: 2.5px solid var(--ink);
            transform: rotate(-3deg);
            line-height: 1.1;
        }
        .stamp.is-active {
            background: var(--red);
            color: var(--on-red);
            box-shadow: 3px 3px 0 var(--ink);
        }
        [data-theme="dark"] .stamp.is-active {
            text-shadow: 1px 1px 0 #111111;
        }
        .stamp.is-done {
            background: var(--panel);
            color: var(--ink);
            box-shadow: 3px 3px 0 var(--ink);
        }
        .project-card h3 {
            font-size: 1.65rem;
        }
        .project-desc {
            font-size: 0.92rem;
            color: var(--mute);
        }
        .project-foot {
            margin-top: auto;
            padding-top: 10px;
            border-top: 2px dashed var(--ink);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }
        .project-action {
            font-family: var(--font-display);
            font-size: 1.18rem;
            letter-spacing: 0.05em;
            color: var(--red);
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: transform 0.12s ease;
        }
        .project-action:hover {
            transform: translateX(3px);
        }
        .project-soon {
            font-family: var(--font-display);
            font-size: 1.1rem;
            letter-spacing: 0.06em;
            color: var(--mute);
        }
        .project-open-hint {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--mute);
        }

        /* =====================================================================
           BAB 5 — CERTIFICATES (2 Columns, 7px Double Border)
           ===================================================================== */
        .certs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .cert-card {
            background: var(--panel);
            border: 7px double var(--ink);
            box-shadow: 7px 7px 0 var(--ink);
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        }
        .cert-card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 9px 9px 0 var(--ink);
        }
        .cert-thumb {
            width: 100%;
            height: 200px;
            border: 3px solid var(--ink);
            background: var(--paper);
            overflow: hidden;
            padding: 6px;
        }
        .cert-thumb img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: grayscale(100%) contrast(1.15);
            transition: filter 0.18s ease;
        }
        .cert-card:hover .cert-thumb img {
            filter: grayscale(0%) contrast(1.03);
        }
        .cert-date {
            display: inline-block;
            align-self: flex-start;
            font-family: var(--font-display);
            font-size: 1.05rem;
            letter-spacing: 0.06em;
            background: var(--ink);
            color: var(--panel);
            padding: 3px 10px 2px;
        }
        .cert-card h3 {
            font-size: 1.6rem;
        }
        .cert-card p {
            font-size: 0.92rem;
            color: var(--mute);
        }
        .cert-actions {
            margin-top: auto;
            padding-top: 8px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        /* =====================================================================
           CLOSING — CONTACT PANEL (Full Speedlines, BERSAMBUNG...?, 4 Buttons)
           ===================================================================== */
        .contact-section {
            margin-top: 56px;
        }
        .contact-panel {
            padding: 40px 28px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }
        .contact-sfx {
            font-size: 2.2rem;
            transform: rotate(-8deg);
        }
        .contact-title {
            font-size: clamp(2.4rem, 7vw, 4.2rem);
            line-height: 1;
        }
        .contact-sub {
            max-width: 560px;
            font-size: 1rem;
            color: var(--mute);
        }
        .contact-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 8px;
        }
        .copy-email-inline {
            margin-top: 4px;
            background: transparent;
            border: 2px dashed var(--ink);
            padding: 6px 14px;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--ink);
            cursor: pointer;
            transition: transform 0.12s ease, background-color 0.12s ease, color 0.12s ease;
        }
        .copy-email-inline:hover {
            background: var(--ink);
            color: var(--panel);
            transform: translate(-1px, -1px);
        }

        /* =====================================================================
           FOOTER
           ===================================================================== */
        .footer {
            margin-top: 48px;
            border-top: 4px solid var(--ink);
            background: var(--panel);
            padding: 20px 0;
            text-align: center;
        }
        .footer p {
            font-family: var(--font-display);
            font-size: 1.25rem;
            letter-spacing: 0.06em;
            color: var(--ink);
        }

        /* =====================================================================
           FULL-PAGE MANGA READER MODAL (Projects & Certificates)
           ===================================================================== */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            z-index: 900;
            background: rgba(17, 17, 17, 0.78);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 18px;
        }
        .modal-backdrop.open {
            display: flex;
        }
        .modal-panel {
            width: 100%;
            max-width: 680px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .modal-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }
        .modal-close {
            font-family: var(--font-display);
            font-size: 1.25rem;
            letter-spacing: 0.05em;
            padding: 4px 12px 2px;
            background: var(--paper);
            color: var(--ink);
            border: 3px solid var(--ink);
            box-shadow: 3px 3px 0 var(--ink);
            cursor: pointer;
            transition: transform 0.12s ease, background-color 0.12s ease, color 0.12s ease;
        }
        .modal-close:hover {
            background: var(--red);
            color: var(--on-red);
            transform: translate(-1px, -1px);
        }
        .modal-media {
            width: 100%;
            border: 3px solid var(--ink);
            background: var(--paper);
            overflow: hidden;
        }
        .modal-media img {
            width: 100%;
            max-height: 360px;
            object-fit: contain;
            background: var(--paper);
        }
        .modal-desc {
            color: var(--mute);
            font-size: 0.96rem;
        }
        .modal-foot {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding-top: 12px;
            border-top: 2px dashed var(--ink);
        }

        /* =====================================================================
           BACK-TO-TOP PROGRESS RING (Manga Ink Edition — Zero Scroll Lag)
           ===================================================================== */
        .back-to-top {
            position: fixed;
            right: max(20px, env(safe-area-inset-right, 20px));
            bottom: max(20px, env(safe-area-inset-bottom, 20px));
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: var(--panel);
            border: 3px solid var(--ink);
            box-shadow: 4px 4px 0 var(--ink);
            z-index: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translate3d(0, 14px, 0);
            contain: layout style paint;
            will-change: transform, opacity;
            transition: opacity 0.18s ease, visibility 0.18s ease, transform 0.18s ease;
        }
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translate3d(0, 0, 0);
        }
        .back-to-top:hover {
            transform: translate3d(-2px, -2px, 0);
            box-shadow: 6px 6px 0 var(--ink);
        }
        .progress-ring {
            position: absolute;
            inset: -3px;
            width: calc(100% + 6px);
            height: calc(100% + 6px);
            transform: rotate(-90deg);
            pointer-events: none;
        }
        .progress-ring__circle {
            stroke: var(--red);
            stroke-dasharray: 144.513;
            stroke-dashoffset: 144.513;
            stroke-linecap: butt;
            opacity: 0;
            transition: none;
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            left: 50%;
            bottom: max(24px, env(safe-area-inset-bottom, 24px));
            transform: translate(-50%, 16px);
            background: var(--ink);
            color: var(--panel);
            border: 3px solid var(--ink);
            box-shadow: 4px 4px 0 var(--red);
            padding: 8px 18px;
            font-weight: 700;
            font-size: 0.9rem;
            opacity: 0;
            pointer-events: none;
            z-index: 1000;
            transition: opacity 0.18s ease, transform 0.18s ease;
        }
        .toast.show {
            opacity: 1;
            transform: translate(-50%, 0);
        }

        /* =====================================================================
           RESPONSIVE BREAKPOINTS (Desain.md §6: ≤ 820px & ≤ 520px)
           ===================================================================== */
        @media (max-width: 820px) {
            .nav-links {
                display: none;
            }
            .menu-btn {
                display: inline-flex;
            }
            .hero-grid {
                grid-template-columns: 1fr;
            }
            .hero-char-panel {
                min-height: auto;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .about-grid {
                grid-template-columns: 1fr;
            }
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .career-strip {
                grid-template-columns: 1fr;
            }
            .career-cell {
                border-right: none;
                border-bottom: 4px solid var(--ink);
            }
            .career-cell:last-child {
                border-bottom: none;
            }
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .project-card,
            .project-card.span-4 {
                grid-column: auto;
            }
            .project-card.span-4 .project-thumb {
                aspect-ratio: 16 / 10;
            }
            .certs-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 520px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            .service-card:nth-child(odd),
            .service-card:nth-child(even) {
                transform: none;
            }
            .chapter {
                flex-wrap: wrap;
                gap: 10px;
            }
            .chapter-line {
                flex-basis: 100%;
                height: 4px;
            }
            .hero-title-panel {
                padding: 22px 18px;
            }
            .contact-panel {
                padding: 28px 18px;
            }
            .stat-num {
                font-size: 2.5rem;
            }
            .stat-num--long {
                font-size: 1.75rem;
            }
            .theme-btn-label {
                display: none;
            }
        }

        /* Accessibility: Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }
            *, *::before, *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
            .service-card:nth-child(odd),
            .service-card:nth-child(even) {
                transform: none;
            }
        }
    </style>
</head>
<body>

    <!-- =================================================================
         NAVIGASI
         ================================================================= -->
    <header class="nav">
        <div class="wrap nav-inner">
            <a href="#top" class="brand" aria-label="ANGGA.DEV Beranda">
                ANGGA<span class="brand-dot">.</span>DEV
            </a>

            <nav class="nav-links" aria-label="Navigasi Utama">
                <a href="#top" class="nav-link active" data-section="top">Beranda</a>
                <a href="#about" class="nav-link" data-section="about">Tentang</a>
                <a href="#projects" class="nav-link" data-section="projects">Proyek</a>
                <a href="#certs" class="nav-link" data-section="certs">Sertifikat</a>
                <a href="#contact" class="nav-link" data-section="contact">Kontak</a>
            </nav>

            <div class="nav-actions">
                <button type="button" class="theme-btn" id="themeToggle" aria-label="Ganti tema terang atau gelap">
                    <svg id="iconMoon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    <svg id="iconSun" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display:none;" aria-hidden="true"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <span class="theme-btn-label" id="themeLabel">GELAP</span>
                </button>
                <button type="button" class="menu-btn" id="menuToggle" aria-label="Buka menu navigasi" aria-expanded="false">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>

        <div class="mobile-drawer" id="mobileDrawer" aria-label="Menu Mobile">
            <div class="mobile-drawer-links">
                <a href="#top" data-section="top">Beranda</a>
                <a href="#about" data-section="about">Tentang</a>
                <a href="#projects" data-section="projects">Proyek</a>
                <a href="#certs" data-section="certs">Sertifikat</a>
                <a href="#contact" data-section="contact">Kontak</a>
            </div>
        </div>
    </header>

    <main class="wrap">
        <!-- =============================================================
             HERO — EPISODE 01
             ============================================================= -->
        <section id="top" class="hero">
            <div class="hero-grid">
                <!-- Panel Judul + Speedlines -->
                <div class="panel speedlines hero-title-panel">
                    <span class="kicker">EPISODE 01 — PENGEMBANG WEB</span>
                    <h1 class="hero-name">{{ $settings['name'] ?? 'ANGGA WIRANATA' }}</h1>
                    <p class="hero-role">WEB CRAFTSMAN</p>
                    <div class="bubble">
                        Membangun aplikasi web yang efisien dan mudah digunakan, dengan fokus pada ekosistem Laravel dan React!
                    </div>
                    <div class="hero-cta">
                        <a href="#projects" class="btn">LIHAT KARYA</a>
                        <a href="#contact" class="btn alt">HUBUNGI SAYA</a>
                    </div>
                </div>

                <!-- Panel Karakter + Radial Dots -->
                <div class="panel radials hero-char-panel">
                    <div class="char-top-row">
                        <span class="sfx char-sfx-top" aria-hidden="true">ドン!</span>
                        <span class="char-issue">VOL. 01</span>
                    </div>

                    <div class="char-portrait-wrap" id="portraitWrap">
                        <img
                            src="images/profile.jpg"
                            alt="Foto profil {{ $settings['name'] ?? 'Angga Wiranata' }}"
                            class="char-portrait-img"
                            decoding="async"
                            onerror="this.parentElement.classList.add('is-fallback')"
                        >
                        <span class="char-monogram-fallback" aria-hidden="true">{{ $settings['logo_initials'] ?? 'AW' }}</span>
                        <span class="char-monogram-seal" aria-hidden="true">{{ $settings['logo_initials'] ?? 'AW' }}</span>
                    </div>

                    <div class="char-bottom-row">
                        <span class="sfx char-sfx-bot" aria-hidden="true">ゴゴゴ</span>
                        <span class="char-level">LEVEL 05</span>
                    </div>
                </div>
            </div>

            <!-- Statistik (4 Kolom — Data Pasti) -->
            <div class="stats-grid" aria-label="Ringkasan Statistik">
                <div class="panel stat-box">
                    <span class="stat-num">{{ isset($projects) && count($projects) ? str_pad(count($projects), 2, '0', STR_PAD_LEFT) : '05' }}</span>
                    <span class="stat-label">PROYEK PILIHAN</span>
                </div>
                <div class="panel stat-box">
                    <span class="stat-num">02</span>
                    <span class="stat-label">SERTIFIKAT</span>
                </div>
                <div class="panel stat-box">
                    <span class="stat-num">2022</span>
                    <span class="stat-label">MULAI FREELANCE</span>
                </div>
                <div class="panel stat-box">
                    <span class="stat-num stat-num--long">S.Kom ➜ M.Kom</span>
                    <span class="stat-label">S2 SEDANG DITEMPUH</span>
                </div>
            </div>
        </section>

        <!-- =============================================================
             BAB 1 — LEBIH DEKAT DENGAN SAYA
             ============================================================= -->
        <section id="about" aria-labelledby="ch-about">
            <div class="chapter">
                <span class="chapter-num"><span>BAB 1</span></span>
                <h2 id="ch-about">LEBIH DEKAT DENGAN SAYA</h2>
                <span class="chapter-line" aria-hidden="true"></span>
            </div>

            <div class="about-grid">
                <article class="panel about-card">
                    <h3>SANG DEVELOPER</h3>
                    <p>Saya Web Developer yang bersemangat membangun antarmuka web yang modern, cepat, dan mudah diakses. Fokus saya bukan hanya fungsionalitas, tetapi juga estetika visual yang memberi pengalaman terbaik bagi pengguna.</p>
                    <p>Berbekal gelar S.Kom di bidang teknik informatika dan kini menempuh S2 (M.Kom), saya terus mengikuti teknologi terbaru dan menerapkannya di setiap proyek.</p>
                    <div class="tag-list">
                        <span class="tag">Frontend</span>
                        <span class="tag">Backend</span>
                        <span class="tag">Database</span>
                        <span class="tag">UI/UX</span>
                        <span class="tag">Mobile</span>
                        <span class="tag">DevOps</span>
                    </div>
                </article>

                <article class="panel about-card">
                    <h3>JURUS ANDALAN</h3>
                    <p>Teknologi yang mendukung setiap proyek saya — dari arsitektur backend Laravel hingga antarmuka reaktif React dan Tailwind CSS.</p>
                    <div class="tag-list">
                        <span class="tag">Laravel</span>
                        <span class="tag">React.js</span>
                        <span class="tag">Tailwind CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Livewire</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">Figma</span>
                        <span class="tag">Git</span>
                    </div>
                </article>
            </div>
        </section>

        <!-- =============================================================
             BAB 2 — APA YANG SAYA LAKUKAN
             ============================================================= -->
        <section id="services" aria-labelledby="ch-services">
            <div class="chapter">
                <span class="chapter-num"><span>BAB 2</span></span>
                <h2 id="ch-services">APA YANG SAYA LAKUKAN</h2>
                <span class="chapter-line" aria-hidden="true"></span>
            </div>

            <div class="services-grid">
                <article class="panel service-card">
                    <span class="service-num">01</span>
                    <h3>Frontend Architecture</h3>
                    <p>Antarmuka web interaktif dan mulus dengan teknologi modern berperforma tinggi.</p>
                </article>
                <article class="panel service-card">
                    <span class="service-num">02</span>
                    <h3>Responsive Design</h3>
                    <p>Tampil sempurna di Mobile, Tablet, dan Desktop.</p>
                </article>
                <article class="panel service-card">
                    <span class="service-num">03</span>
                    <h3>Backend Integration</h3>
                    <p>Menghubungkan antarmuka dengan database dan API pihak ketiga.</p>
                </article>
                <article class="panel service-card">
                    <span class="service-num">04</span>
                    <h3>API Development</h3>
                    <p>RESTful API yang aman, cepat, dan mudah diintegrasikan.</p>
                </article>
                <article class="panel service-card">
                    <span class="service-num">05</span>
                    <h3>UI/UX Prototyping</h3>
                    <p>Desain Figma atau Adobe XD menjadi kode bersih yang pixel-perfect.</p>
                </article>
                <article class="panel service-card">
                    <span class="service-num">06</span>
                    <h3>Performance Tuning</h3>
                    <p>Core Web Vitals dan praktik SEO terbaik agar situs Anda lebih bersinar.</p>
                </article>
            </div>
        </section>

        <!-- =============================================================
             BAB 3 — PERJALANAN KARIR (Strip 4 Kolom)
             ============================================================= -->
        <section id="experience" aria-labelledby="ch-experience">
            <div class="chapter">
                <span class="chapter-num"><span>BAB 3</span></span>
                <h2 id="ch-experience">PERJALANAN KARIR</h2>
                <span class="chapter-line" aria-hidden="true"></span>
            </div>

            <div class="panel career-strip">
                <article class="career-cell">
                    <span class="career-badge">2016 – 2020</span>
                    <h3>S1 Teknik Informatika</h3>
                    <p class="career-org">Universitas Islam Kalimantan MAB</p>
                    <p class="career-desc">Lulus dengan gelar S.Kom, fokus pada rekayasa perangkat lunak dan sistem informasi.</p>
                </article>
                <article class="career-cell">
                    <span class="career-badge">2022</span>
                    <h3>Pengadministrasian Umum</h3>
                    <p class="career-org">DP KORPRI Kab. Banjar</p>
                    <p class="career-desc">Administrasi umum, pengelolaan data, dan dukungan operasional instansi.</p>
                </article>
                <article class="career-cell">
                    <span class="career-badge">2022 – SEKARANG</span>
                    <h3>Freelance Web Developer</h3>
                    <p class="career-org">Self-Employed</p>
                    <p class="career-desc">Mengembangkan aplikasi web modern dengan Laravel dan ekosistem JS.</p>
                </article>
                <article class="career-cell">
                    <span class="career-badge is-levelup">LEVEL UP!</span>
                    <h3>S2 Magister Komputer</h3>
                    <p class="career-org">Gelar M.Kom (sedang ditempuh)</p>
                    <p class="career-desc">Melanjutkan studi magister untuk memperdalam keahlian di bidang ilmu komputer.</p>
                </article>
            </div>
        </section>

        <!-- =============================================================
             BAB 4 — PROYEK PILIHAN (Grid 6 Kolom: 4+2 / 2+2+2)
             ============================================================= -->
        <section id="projects" aria-labelledby="ch-projects">
            <div class="chapter">
                <span class="chapter-num"><span>BAB 4</span></span>
                <h2 id="ch-projects">PROYEK PILIHAN</h2>
                <span class="chapter-line" aria-hidden="true"></span>
            </div>

            <div class="project-filters" role="group" aria-label="Filter proyek">
                <button type="button" class="filter-btn active" data-filter="all">SEMUA (5)</button>
                <button type="button" class="filter-btn" data-filter="govtech">GOVTECH (3)</button>
                <button type="button" class="filter-btn" data-filter="webapp">WEB APP (2)</button>
                <button type="button" class="filter-btn" data-filter="selesai">SELESAI (3)</button>
            </div>

            <div class="projects-grid" id="projectsGrid">
                <!-- Proyek 1: SILUKOR (Lebar 4 Kolom) -->
                <article
                    class="panel project-card span-4"
                    data-filter-tags="govtech berjalan"
                    data-title="SILUKOR"
                    data-status="BERJALAN · GOVTECH"
                    data-status-type="active"
                    data-img="images/project-korpri.png"
                    data-desc="Sistem Informasi Layanan Usulan Keanggotaan KORPRI. Portal terpadu untuk mendigitalkan layanan, administrasi, dan kesejahteraan anggota KORPRI."
                    data-tags="Laravel,Livewire,MySQL,Tailwind"
                    data-link=""
                >
                    <div class="project-thumb">
                        <img src="images/project-korpri.png" alt="Screenshot aplikasi SILUKOR" loading="lazy" decoding="async">
                    </div>
                    <span class="stamp is-active">BERJALAN · GOVTECH</span>
                    <h3>SILUKOR</h3>
                    <p class="project-desc">Sistem Informasi Layanan Usulan Keanggotaan KORPRI. Portal terpadu untuk mendigitalkan layanan, administrasi, dan kesejahteraan anggota.</p>
                    <div class="tag-list">
                        <span class="tag">Laravel</span>
                        <span class="tag">Livewire</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Tailwind</span>
                    </div>
                    <div class="project-foot">
                        <span class="project-soon">Segera Hadir</span>
                        <span class="project-open-hint">Klik panel untuk pratinjau</span>
                    </div>
                </article>

                <!-- Proyek 2: SISDUKOR (Lebar 2 Kolom) -->
                <article
                    class="panel project-card"
                    data-filter-tags="govtech berjalan"
                    data-title="SISDUKOR"
                    data-status="BERJALAN · GOVTECH"
                    data-status-type="active"
                    data-img="images/duta-korpri.png"
                    data-desc="Sistem Informasi Duta KORPRI: platform kompetisi berstandar profesional mulai dari pendaftaran, penilaian, hingga penetapan juara."
                    data-tags="Laravel,PHP,MySQL"
                    data-link=""
                >
                    <div class="project-thumb">
                        <img src="images/duta-korpri.png" alt="Screenshot aplikasi SISDUKOR" loading="lazy" decoding="async">
                    </div>
                    <span class="stamp is-active">BERJALAN · GOVTECH</span>
                    <h3>SISDUKOR</h3>
                    <p class="project-desc">Sistem Informasi Duta KORPRI: pendaftaran, penilaian, hingga penetapan juara.</p>
                    <div class="tag-list">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                    </div>
                    <div class="project-foot">
                        <span class="project-soon">Segera Hadir</span>
                        <span class="project-open-hint">Pratinjau</span>
                    </div>
                </article>

                <!-- Proyek 3: KasFlow (Lebar 2 Kolom) -->
                <article
                    class="panel project-card"
                    data-filter-tags="webapp selesai"
                    data-title="KasFlow"
                    data-status="SELESAI · WEB APP"
                    data-status-type="done"
                    data-img="images/kasflow-app.png"
                    data-desc="Manajemen arus kas pribadi: catat pemasukan, pengeluaran, dan pantau kesehatan finansial secara real-time."
                    data-tags="React,TypeScript,Tailwind"
                    data-link="https://kyraaa-dev.github.io/kasflow-app/"
                    data-link-label="Live Demo ▶"
                >
                    <div class="project-thumb">
                        <img src="images/kasflow-app.png" alt="Screenshot aplikasi KasFlow" loading="lazy" decoding="async">
                    </div>
                    <span class="stamp is-done">SELESAI · WEB APP</span>
                    <h3>KasFlow</h3>
                    <p class="project-desc">Manajemen arus kas pribadi: catat pemasukan, pengeluaran, dan pantau kesehatan finansial real-time.</p>
                    <div class="tag-list">
                        <span class="tag">React</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Tailwind</span>
                    </div>
                    <div class="project-foot">
                        <a href="https://kyraaa-dev.github.io/kasflow-app/" target="_blank" rel="noopener noreferrer" class="project-action">Live Demo ▶</a>
                        <span class="project-open-hint">Pratinjau</span>
                    </div>
                </article>

                <!-- Proyek 4: Jelajahin (Lebar 2 Kolom) -->
                <article
                    class="panel project-card"
                    data-filter-tags="webapp selesai"
                    data-title="Jelajahin"
                    data-status="SELESAI · WEB APP"
                    data-status-type="done"
                    data-img="images/project-travel.png"
                    data-desc="Asisten perjalanan AI untuk menjelajahi Indonesia: dilengkapi Itinerary Studio interaktif, ekspor PDF, eksplorasi destinasi, hingga cuaca real-time."
                    data-tags="React,AI API,Vercel"
                    data-link="https://project-travel-six.vercel.app/"
                    data-link-label="Live Demo ▶"
                >
                    <div class="project-thumb">
                        <img src="images/project-travel.png" alt="Screenshot aplikasi Jelajahin" loading="lazy" decoding="async">
                    </div>
                    <span class="stamp is-done">SELESAI · WEB APP</span>
                    <h3>Jelajahin</h3>
                    <p class="project-desc">Asisten perjalanan AI untuk menjelajahi Indonesia: Itinerary Studio interaktif, ekspor PDF, cuaca real-time.</p>
                    <div class="tag-list">
                        <span class="tag">React</span>
                        <span class="tag">AI API</span>
                        <span class="tag">Vercel</span>
                    </div>
                    <div class="project-foot">
                        <a href="https://project-travel-six.vercel.app/" target="_blank" rel="noopener noreferrer" class="project-action">Live Demo ▶</a>
                        <span class="project-open-hint">Pratinjau</span>
                    </div>
                </article>

                <!-- Proyek 5: E-MutZ KORPRI (Lebar 2 Kolom) -->
                <article
                    class="panel project-card"
                    data-filter-tags="govtech selesai"
                    data-title="E-MutZ KORPRI"
                    data-status="SELESAI · GOVTECH"
                    data-status-type="done"
                    data-img="images/project-emutz.png"
                    data-desc="Rekapitulasi pemesanan seragam & atribut Mutz ASN per SKPD: pencatatan pesanan, manajemen stok & retur, cetak kwitansi, dan ekspor laporan data."
                    data-tags="Laravel,MySQL,Export"
                    data-link="https://github.com/kyraaa-dev/aplikasi-rekap-pemesanan"
                    data-link-label="Lihat Repo ▶"
                >
                    <div class="project-thumb">
                        <img src="images/project-emutz.png" alt="Screenshot aplikasi E-MutZ KORPRI" loading="lazy" decoding="async">
                    </div>
                    <span class="stamp is-done">SELESAI · GOVTECH</span>
                    <h3>E-MutZ KORPRI</h3>
                    <p class="project-desc">Rekapitulasi pemesanan Mutz ASN per SKPD: stok &amp; retur, cetak kwitansi, ekspor laporan.</p>
                    <div class="tag-list">
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Export</span>
                    </div>
                    <div class="project-foot">
                        <a href="https://github.com/kyraaa-dev/aplikasi-rekap-pemesanan" target="_blank" rel="noopener noreferrer" class="project-action">Lihat Repo ▶</a>
                        <span class="project-open-hint">Pratinjau</span>
                    </div>
                </article>
            </div>
        </section>

        <!-- =============================================================
             BAB 5 — SERTIFIKASI (2 Kolom, Border Ganda 7px)
             ============================================================= -->
        <section id="certs" aria-labelledby="ch-certs">
            <div class="chapter">
                <span class="chapter-num"><span>BAB 5</span></span>
                <h2 id="ch-certs">SERTIFIKASI</h2>
                <span class="chapter-line" aria-hidden="true"></span>
            </div>

            <div class="certs-grid">
                <article class="cert-card">
                    <div class="cert-thumb">
                        <img src="images/cert-revou.png" alt="Sertifikat RevoU Intro to Software Engineering" loading="lazy" decoding="async">
                    </div>
                    <span class="cert-date">24 JULI 2026</span>
                    <h3>Intro to Software Engineering</h3>
                    <p>PT Revolusi Cita Edukasi (RevoU). Sertifikat kehadiran kursus online 1 minggu.</p>
                    <div class="cert-actions">
                        <a href="images/cert-revou.png" target="_blank" rel="noopener noreferrer" class="project-action cert-preview-trigger" data-title="Intro to Software Engineering" data-status="24 JULI 2026 · REVOU" data-img="images/cert-revou.png" data-desc="PT Revolusi Cita Edukasi (RevoU). Sertifikat kehadiran kursus online 1 minggu Intro to Software Engineering." data-link="images/cert-revou.png" data-link-label="Buka Gambar Penuh ▶">Lihat Detail ▶</a>
                    </div>
                </article>

                <article class="cert-card">
                    <div class="cert-thumb">
                        <img src="images/hacktiv8-ai.jpg" alt="Sertifikat Hacktiv8 AI Productivity for Developers" loading="lazy" decoding="async">
                    </div>
                    <span class="cert-date">06 SEPT 2026</span>
                    <h3>AI Productivity for Developers</h3>
                    <p>Hacktiv8 Indonesia. Menyelesaikan program Maju Bareng AI beserta proyek akhirnya.</p>
                    <div class="cert-actions">
                        <a href="images/hacktiv8-ai.jpg" target="_blank" rel="noopener noreferrer" class="project-action cert-preview-trigger" data-title="AI Productivity for Developers" data-status="06 SEPT 2026 · HACKTIV8" data-img="images/hacktiv8-ai.jpg" data-desc="Hacktiv8 Indonesia. Menyelesaikan program Maju Bareng AI beserta proyek akhir sebagai syarat kelulusan." data-link="images/hacktiv8-ai.jpg" data-link-label="Buka Gambar Penuh ▶">Lihat Detail ▶</a>
                    </div>
                </article>
            </div>
        </section>

        <!-- =============================================================
             PENUTUP — KONTAK (Garis Kecepatan Penuh + 4 Tombol)
             ============================================================= -->
        <section id="contact" class="contact-section" aria-labelledby="ch-contact">
            <div class="panel speedlines contact-panel">
                <span class="sfx contact-sfx" aria-hidden="true">ドン!</span>
                <h2 id="ch-contact" class="contact-title">BERSAMBUNG...?</h2>
                <p class="contact-sub">Tersedia untuk proyek baru. Mari tulis bab berikutnya bersama!</p>
                <div class="contact-buttons">
                    <a href="mailto:anggawiranatafti@gmail.com" class="btn">EMAIL</a>
                    <a href="https://github.com/kyraaa-dev" target="_blank" rel="noopener noreferrer" class="btn alt">GITHUB</a>
                    <a href="https://www.linkedin.com/in/angga-wiranata-320837420" target="_blank" rel="noopener noreferrer" class="btn alt">LINKEDIN</a>
                    <a href="https://www.instagram.com/_anggawiranata" target="_blank" rel="noopener noreferrer" class="btn alt">INSTAGRAM</a>
                </div>
                <button type="button" class="copy-email-inline" id="copyEmailBtn">
                    Salin alamat email: anggawiranatafti@gmail.com
                </button>
            </div>
        </section>
    </main>

    <!-- =================================================================
         FOOTER
         ================================================================= -->
    <footer class="footer">
        <div class="wrap">
            <p>&copy; 2026 ANGGA WIRANATA, S.KOM. — TAMAT (SEMENTARA)</p>
        </div>
    </footer>

    <!-- =================================================================
         MODAL PRATINJAU HALAMAN PENUH (Proyek & Sertifikat)
         ================================================================= -->
    <div class="modal-backdrop" id="readerModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="panel modal-panel">
            <div class="modal-head">
                <span class="stamp is-done" id="modalStamp">STATUS</span>
                <button type="button" class="modal-close" id="modalClose" aria-label="Tutup pratinjau">TUTUP [ESC]</button>
            </div>
            <div class="modal-media">
                <img id="modalImg" src="" alt="Pratinjau">
            </div>
            <h3 id="modalTitle"></h3>
            <p class="modal-desc" id="modalDesc"></p>
            <div class="tag-list" id="modalTags"></div>
            <div class="modal-foot">
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn" id="modalLink" style="display:none;">LIHAT ▶</a>
                <span class="project-soon" id="modalSoon" style="display:none;">Segera Hadir</span>
            </div>
        </div>
    </div>

    <!-- Back-to-Top Progress Ring (Manga Edition) -->
    <button type="button" class="back-to-top" id="backToTop" aria-label="Kembali ke atas">
        <svg class="progress-ring" width="52" height="52" viewBox="0 0 50 50" aria-hidden="true">
            <circle class="progress-ring__circle" stroke-width="3" fill="transparent" r="23" cx="25" cy="25" />
        </svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" style="position:relative;z-index:2;" aria-hidden="true">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg>
    </button>

    <!-- Toast -->
    <div class="toast" id="toast" role="status" aria-live="polite"></div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const html = document.documentElement;
            const themeToggle = document.getElementById('themeToggle');
            const themeLabel = document.getElementById('themeLabel');
            const iconMoon = document.getElementById('iconMoon');
            const iconSun = document.getElementById('iconSun');
            const themeMeta = document.getElementById('theme-color-meta');

            const syncThemeUI = (theme) => {
                const isDark = theme === 'dark';
                html.setAttribute('data-theme', theme);
                if (themeMeta) themeMeta.setAttribute('content', isDark ? '#121212' : '#f6f1e4');
                if (iconMoon) iconMoon.style.display = isDark ? 'none' : 'block';
                if (iconSun) iconSun.style.display = isDark ? 'block' : 'none';
                if (themeLabel) themeLabel.textContent = isDark ? 'TERANG' : 'GELAP';
            };

            syncThemeUI(html.getAttribute('data-theme') || 'light');

            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                    syncThemeUI(next);
                    try { localStorage.setItem('manga_theme', next); } catch (e) {}
                });
            }

            // Mobile Menu Drawer
            const menuToggle = document.getElementById('menuToggle');
            const mobileDrawer = document.getElementById('mobileDrawer');
            if (menuToggle && mobileDrawer) {
                menuToggle.addEventListener('click', () => {
                    const open = mobileDrawer.classList.toggle('open');
                    menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
                mobileDrawer.querySelectorAll('a').forEach((link) => {
                    link.addEventListener('click', () => {
                        mobileDrawer.classList.remove('open');
                        menuToggle.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            // Active Section Indicator (Zero Scroll-Listener Overhead)
            const navLinks = document.querySelectorAll('.nav-link[data-section], .mobile-drawer-links a[data-section]');
            if (navLinks.length && 'IntersectionObserver' in window) {
                const setActive = (key) => {
                    navLinks.forEach((a) => {
                        a.classList.toggle('active', a.getAttribute('data-section') === key);
                    });
                };
                const sections = ['top', 'about', 'projects', 'certs', 'contact']
                    .map((id) => ({ id, el: document.getElementById(id) }))
                    .filter((s) => s.el);

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) setActive(entry.target.id);
                    });
                }, { rootMargin: '-28% 0px -56% 0px', threshold: 0 });

                sections.forEach((s) => observer.observe(s.el));
            }

            // Project Category Filter
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectsGrid = document.getElementById('projectsGrid');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach((btn) => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach((b) => b.classList.remove('active'));
                    btn.classList.add('active');
                    const filter = btn.getAttribute('data-filter');
                    if (projectsGrid) projectsGrid.classList.toggle('is-filtered', filter !== 'all');
                    projectCards.forEach((card) => {
                        const tags = card.getAttribute('data-filter-tags') || '';
                        const visible = filter === 'all' || tags.includes(filter);
                        card.style.display = visible ? 'flex' : 'none';
                    });
                });
            });

            // Full-Page Manga Reader Modal (Projects & Certificates)
            const modal = document.getElementById('readerModal');
            const modalClose = document.getElementById('modalClose');
            const modalStamp = document.getElementById('modalStamp');
            const modalImg = document.getElementById('modalImg');
            const modalTitle = document.getElementById('modalTitle');
            const modalDesc = document.getElementById('modalDesc');
            const modalTags = document.getElementById('modalTags');
            const modalLink = document.getElementById('modalLink');
            const modalSoon = document.getElementById('modalSoon');

            const closeModal = () => {
                if (!modal || !modal.classList.contains('open')) return;
                modal.classList.remove('open');
                document.body.style.overflow = '';
            };

            const openModal = (data) => {
                if (!modal) return;
                modalStamp.textContent = data.status || '';
                modalStamp.className = 'stamp ' + (data.statusType === 'active' ? 'is-active' : 'is-done');
                modalImg.src = data.img || '';
                modalImg.alt = data.title || 'Pratinjau';
                modalTitle.textContent = data.title || '';
                modalDesc.textContent = data.desc || '';

                if (data.tags && data.tags.trim()) {
                    modalTags.innerHTML = data.tags
                        .split(',')
                        .map((t) => '<span class="tag">' + t.trim() + '</span>')
                        .join('');
                    modalTags.style.display = 'flex';
                } else {
                    modalTags.innerHTML = '';
                    modalTags.style.display = 'none';
                }

                if (data.link) {
                    modalLink.href = data.link;
                    modalLink.textContent = data.linkLabel || 'BUKA ▶';
                    modalLink.style.display = 'inline-flex';
                    modalSoon.style.display = 'none';
                } else {
                    modalLink.style.display = 'none';
                    modalSoon.style.display = 'inline-block';
                }

                modal.classList.add('open');
                document.body.style.overflow = 'hidden';
            };

            projectCards.forEach((card) => {
                card.addEventListener('click', (e) => {
                    if (e.target.closest('a[href]')) return;
                    openModal({
                        title: card.getAttribute('data-title'),
                        status: card.getAttribute('data-status'),
                        statusType: card.getAttribute('data-status-type'),
                        img: card.getAttribute('data-img'),
                        desc: card.getAttribute('data-desc'),
                        tags: card.getAttribute('data-tags'),
                        link: card.getAttribute('data-link'),
                        linkLabel: card.getAttribute('data-link-label')
                    });
                });
            });

            document.querySelectorAll('.cert-preview-trigger').forEach((trigger) => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal({
                        title: trigger.getAttribute('data-title'),
                        status: trigger.getAttribute('data-status'),
                        statusType: 'done',
                        img: trigger.getAttribute('data-img'),
                        desc: trigger.getAttribute('data-desc'),
                        tags: '',
                        link: trigger.getAttribute('data-link'),
                        linkLabel: trigger.getAttribute('data-link-label')
                    });
                });
            });

            if (modalClose) modalClose.addEventListener('click', closeModal);
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeModal();
                });
            }
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });

            // 1-Click Copy Email + Toast
            const toast = document.getElementById('toast');
            let toastTimer = null;
            const showToast = (msg) => {
                if (!toast) return;
                toast.textContent = msg;
                toast.classList.add('show');
                if (toastTimer) clearTimeout(toastTimer);
                toastTimer = setTimeout(() => toast.classList.remove('show'), 2400);
            };

            const copyBtn = document.getElementById('copyEmailBtn');
            if (copyBtn) {
                copyBtn.addEventListener('click', () => {
                    const email = 'anggawiranatafti@gmail.com';
                    const done = () => showToast('Email disalin: ' + email);
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(email).then(done).catch(() => {
                            const ta = document.createElement('textarea');
                            ta.value = email;
                            ta.style.position = 'fixed';
                            ta.style.opacity = '0';
                            document.body.appendChild(ta);
                            ta.select();
                            try { document.execCommand('copy'); done(); } catch (err) {}
                            document.body.removeChild(ta);
                        });
                    } else {
                        const ta = document.createElement('textarea');
                        ta.value = email;
                        ta.style.position = 'fixed';
                        ta.style.opacity = '0';
                        document.body.appendChild(ta);
                        ta.select();
                        try { document.execCommand('copy'); done(); } catch (err) {}
                        document.body.removeChild(ta);
                    }
                });
            }

            // Back-to-Top Progress Ring (rAF-Coalesced, Cached Height, Zero Layout Thrash)
            const backToTop = document.getElementById('backToTop');
            if (backToTop) {
                const circle = backToTop.querySelector('.progress-ring__circle');
                const radius = (circle && circle.r && circle.r.baseVal.value) ? circle.r.baseVal.value : 23;
                const circumference = 2 * Math.PI * radius;

                if (circle) {
                    const dash = circumference.toFixed(3);
                    circle.style.strokeDasharray = dash + ' ' + dash;
                    circle.style.strokeDashoffset = dash;
                }

                let visible = false;
                let maxScroll = Math.max(1, document.documentElement.scrollHeight - window.innerHeight);
                let lastOffset = circumference;
                let rafPending = false;

                const recalc = () => {
                    maxScroll = Math.max(1, document.documentElement.scrollHeight - window.innerHeight);
                };

                const update = () => {
                    rafPending = false;
                    const y = window.scrollY || document.documentElement.scrollTop || 0;
                    const shouldShow = y > 280;
                    if (shouldShow !== visible) {
                        visible = shouldShow;
                        backToTop.classList.toggle('visible', visible);
                    }
                    if (circle && (visible || lastOffset !== circumference)) {
                        const progress = Math.min(1, Math.max(0, y / maxScroll));
                        const offset = circumference * (1 - progress);
                        if (Math.abs(offset - lastOffset) > 0.15 || progress === 0 || progress === 1) {
                            lastOffset = offset;
                            circle.style.strokeDashoffset = offset.toFixed(2);
                            circle.style.opacity = progress > 0.002 ? '1' : '0';
                        }
                    }
                };

                const onScroll = () => {
                    if (!rafPending) {
                        rafPending = true;
                        requestAnimationFrame(update);
                    }
                };

                window.addEventListener('scroll', onScroll, { passive: true });
                window.addEventListener('resize', () => { recalc(); onScroll(); }, { passive: true });
                window.addEventListener('load', () => { recalc(); update(); }, { once: true });

                if ('ResizeObserver' in window) {
                    new ResizeObserver(() => { recalc(); onScroll(); }).observe(document.body);
                }

                update();

                backToTop.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>
