        (function() {
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (savedTheme === 'light' || (!savedTheme && !systemPrefersDark)) {
                document.documentElement.setAttribute('data-theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
        document.addEventListener('DOMContentLoaded', () => {
            // Lightweight Preloader Logic
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
            }

            // Global Mouse Tracker for Grid Background
            const gridBg = document.getElementById('gridBackground');
// Mouse tracking for grid disabled for performance

            // Scroll Progress Bar Logic
            let isScrolling = false;
            let docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            window.addEventListener('resize', () => {
                docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            }, { passive: true });

            const bar = document.getElementById('scrollBar');
            window.addEventListener('scroll', () => {
                if (!isScrolling) {
                    window.requestAnimationFrame(() => {
                        const winScroll = window.scrollY || document.documentElement.scrollTop;
                        const scrolled = docHeight > 0 ? (winScroll / docHeight) * 100 : 0;
                        if (bar) bar.style.transform = `scaleX(${scrolled / 100})`;
                        isScrolling = false;
                    });
                    isScrolling = true;
                }
            }, { passive: true });

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
                    cursorDot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
                    
                    if (cursorDot.style.opacity !== '1') {
                        cursorDot.style.opacity = '1';
                        cursorOutline.style.opacity = '1';
                        if (cursorGlow) cursorGlow.style.opacity = '1';
                    }
                }, { passive: true });
                
                // Outline follows with spring physics lag
                function animateCursor() {
                    let distX = mouseX - outlineX;
                    let distY = mouseY - outlineY;
                    
                    if (Math.abs(distX) > 0.05 || Math.abs(distY) > 0.05) {
                        outlineX += distX * 0.2;
                        outlineY += distY * 0.2;
                        
                        glowX += (mouseX - glowX) * 0.1;
                        glowY += (mouseY - glowY) * 0.1;
                        
                        cursorOutline.style.transform = `translate3d(${outlineX}px, ${outlineY}px, 0) translate(-50%, -50%)`;
                        if (cursorGlow) cursorGlow.style.transform = `translate3d(${glowX}px, ${glowY}px, 0) translate(-50%, -50%)`;
                    }
                    
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

                    // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileOverlay = document.getElementById('mobileOverlay');

        if (mobileMenuToggle && mobileOverlay) {
            mobileMenuToggle.addEventListener('click', () => {
                const isActive = mobileOverlay.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
                document.body.style.overflow = isActive ? 'hidden' : '';
            });

            const mobileLinks = mobileOverlay.querySelectorAll('.mobile-link');
            mobileLinks.forEach(item => {
                item.addEventListener('click', () => {
                    mobileOverlay.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                    document.body.style.overflow = '';
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
                    const pGrid = document.querySelector('.project-grid');
                    if (pGrid) pGrid.scrollTo({ left: 0, behavior: 'smooth' });
                    
                    projectCards.forEach(card => {
                        const categories = card.getAttribute('data-category');
                        if (filter === 'all' || categories.includes(filter)) {
                            card.style.display = 'flex';
                            card.classList.add('active');
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
                    const modalLinkContainer = document.getElementById('modalLink');
                    if (modalLinkContainer) {
                        if (link && link !== '#') {
                            const linkLabel = link.includes('github.com')
                                ? (currentLang === 'en' ? 'View Project on GitHub' : 'Lihat Proyek di GitHub')
                                : (currentLang === 'en' ? 'Open Live Demo' : 'Buka Live Demo');
                            modalLinkContainer.innerHTML = `<a href="${link}" target="_blank" rel="noopener noreferrer" style="color: var(--accent-color); font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"></path><path d="M10 14L21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg> ${linkLabel}</a>`;
                            modalLinkContainer.style.background = 'rgba(16, 185, 129, 0.1)';
                            modalLinkContainer.style.borderColor = 'rgba(16, 185, 129, 0.3)';
                        } else {
                            const devText = translations['proj_dev_status'] ? translations['proj_dev_status'][currentLang] : 'Tahap Pengembangan (Coming Soon)';
                            modalLinkContainer.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle; margin-right: 8px; margin-top: -2px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <span data-i18n="proj_dev_status">${devText}</span>`;
                            modalLinkContainer.style.background = 'rgba(255, 189, 46, 0.1)';
                            modalLinkContainer.style.borderColor = 'rgba(255, 189, 46, 0.3)';
                        }
                    }
                    
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

                let isBttScrolling = false;
                window.addEventListener('scroll', () => {
                    if (!isBttScrolling) {
                        window.requestAnimationFrame(() => {
                            const scrollTotal = window.scrollY || document.documentElement.scrollTop;
                            const scrollPercent = docHeight > 0 ? scrollTotal / docHeight : 0;
                            const offset = circumference - scrollPercent * circumference;
                            circle.style.strokeDashoffset = offset;

                            if (scrollTotal > 300) {
                                backToTop.classList.add('visible');
                            } else {
                                backToTop.classList.remove('visible');
                            }
                            isBttScrolling = false;
                        });
                        isBttScrolling = true;
                    }
                }, { passive: true });

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
        if (typeof Lenis !== 'undefined') {
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
                infinite: false,
            })

            function raf(time) {
                lenis.raf(time)
                requestAnimationFrame(raf)
            }

            requestAnimationFrame(raf)
        }
        if (typeof particlesJS !== 'undefined') {
            particlesJS("particles-js", {
                "particles": {
                    "number": { "value": 12, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#10b981" },
                    "shape": { "type": "circle" },
                    "opacity": { "value": 0.5, "random": false },
                    "size": { "value": 2.5, "random": true },
                    "line_linked": {
                        "enable": false,
                        "distance": 0,
                        "color": "#10b981",
                        "opacity": 0.3,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1.0,
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
                        "onhover": { "enable": false, "mode": "grab" },
                        "onclick": { "enable": false, "mode": "push" },
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

            "tech_title_1": { id: "Ekosistem ", en: "Tech " },
            "tech_title_2": { id: "Teknologi", en: "Ecosystem" },
            "tech_desc": { id: "Teknologi yang berputar dan mendukung setiap project saya.", en: "The technologies orbiting and powering my every project." },

            "about_title": { id: "Lebih Dekat Dengan Saya", en: "Get to Know Me Closer" },
            "about_p1": { id: "Saya adalah seorang Web Developer yang bersemangat dalam membangun antarmuka web yang modern, cepat, dan mudah diakses. Fokus saya tidak hanya pada fungsionalitas, namun juga pada estetika visual yang mampu memberikan pengalaman terbaik bagi pengguna.", en: "I am a passionate Web Developer focused on building modern, fast, and accessible web interfaces. I care deeply about both functionality and visual aesthetics to deliver the best user experience." },
            "about_p2": { id: "Dengan latar belakang yang kuat di bidang teknik informatika, saya selalu berusaha untuk terus mengikuti perkembangan teknologi terbaru dan mengimplementasikannya dalam setiap proyek yang saya kerjakan.", en: "With a strong background in informatics engineering, I constantly strive to keep up with the latest technological trends and implement them into every project I build." },
            "about_btn": { id: "Mari Berkolaborasi", en: "Let's Collaborate" },

            "services_title_1": { id: "Apa yang ", en: "What I " },
            "services_title_2": { id: "Saya Lakukan", en: "Do" },
            "services_desc": { id: "Layanan & Spesialisasi", en: "Services & Specialities" },
            
            "srv_frontend_title": { id: "Frontend Architecture", en: "Frontend Architecture" },
            "srv_frontend_desc": { id: "Membangun antarmuka web (UI) interaktif dan mulus menggunakan teknologi modern dengan performa tinggi.", en: "Building seamless, interactive web interfaces (UI) using modern technologies for high performance." },
            "srv_responsive_title": { id: "Responsive Design", en: "Responsive Design" },
            "srv_responsive_desc": { id: "Memastikan aplikasi web Anda tampil sempurna dan berfungsi optimal di berbagai perangkat (Mobile, Tablet, Desktop).", en: "Ensuring your web application looks perfect and functions optimally across all devices (Mobile, Tablet, Desktop)." },
            "srv_backend_title": { id: "Backend Integration", en: "Backend Integration" },
            "srv_backend_desc": { id: "Menghubungkan antarmuka dengan sistem database dan API layanan pihak ketiga untuk fungsionalitas yang terpadu.", en: "Connecting interfaces with database systems and third-party APIs for cohesive functionality." },
            "srv_api_title": { id: "API Development", en: "API Development" },
            "srv_api_desc": { id: "Merancang dan membangun RESTful API yang aman, cepat, dan mudah diintegrasikan dengan berbagai platform klien.", en: "Designing and building secure, fast, and easily integrable RESTful APIs for various client platforms." },
            "srv_uiux_title": { id: "UI/UX Prototyping", en: "UI/UX Prototyping" },
            "srv_uiux_desc": { id: "Menerjemahkan desain dari Figma atau Adobe XD ke dalam kode yang bersih (pixel-perfect) dengan interaksi yang mulus.", en: "Translating designs from Figma or Adobe XD into clean, pixel-perfect code with smooth interactions." },
            "srv_perf_title": { id: "Performance Tuning", en: "Performance Tuning" },
            "srv_perf_desc": { id: "Mengoptimalkan kecepatan muat halaman (Core Web Vitals) dan menerapkan praktik SEO terbaik agar situs Anda lebih bersinar.", en: "Optimizing page load speeds (Core Web Vitals) and implementing SEO best practices so your site shines." },

            "exp_title_1": { id: "Perjalanan ", en: "My " },
            "exp_title_2": { id: "Karir", en: "Journey" },
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

            "cert_title": { id: "Sertifikasi & Penghargaan", en: "Certifications & Awards" },
            "cert_desc": { id: "Sertifikasi dan pengakuan profesional yang memvalidasi keahlian saya.", en: "Professional certifications and recognitions that validate my expertise." },
            "cert_1_title": { id: "Intro to Software Engineering", en: "Intro to Software Engineering" },
            "cert_1_issuer": { id: "PT Revolusi Cita Edukasi", en: "PT Revolusi Cita Edukasi" },
            "cert_1_desc": { id: "Telah dianugerahkan sertifikat kehadiran untuk kursus online bersertifikat 1 minggu yang diselenggarakan oleh RevoU.", en: "Has been awarded a certificate of attendance for a 1-week certified online course offered by RevoU." },
            "cert_1_date": { id: "Diterbitkan: 24 Juli 2026", en: "Issued: 24 July 2026" },
            "cert_2_title": { id: "Laravel Advanced Architect", en: "Laravel Advanced Architect" },
            "cert_2_issuer": { id: "Sertifikasi Laravel", en: "Laravel Certifications" },
            "cert_2_desc": { id: "Sertifikasi resmi yang menunjukkan pengetahuan tingkat lanjut tentang framework Laravel, termasuk arsitektur, pengujian, dan praktik terbaik penerapan.", en: "Official certification demonstrating advanced knowledge of the Laravel framework, including architecture, testing, and deployment best practices." },
            "cert_2_date": { id: "Diterbitkan: 2024", en: "Issued: 2024" },
            "cert_3_title": { id: "React Native Specialist", en: "React Native Specialist" },
            "cert_3_issuer": { id: "Meta (Facebook)", en: "Meta (Facebook)" },
            "cert_3_desc": { id: "Kemampuan yang terbukti dalam membangun aplikasi seluler lintas platform dengan performa native menggunakan React Native dan ekosistem JavaScript modern.", en: "Proven ability to build cross-platform mobile applications with native performance using React Native and modern JavaScript ecosystem." },
            "cert_3_date": { id: "Diterbitkan: 2025", en: "Issued: 2025" },
            "cert_btn": { id: "Lihat Detail", en: "View Details" },

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
                        let text = translations[key][lang];
                        // Check if parent is text-reveal
                        const revealParent = el.closest('.text-reveal') || (el.classList.contains('text-reveal') ? el : null);
                        if (revealParent) {
                            const words = text.split(' ');
                            el.innerHTML = words.map(w => `<span class="word-reveal"><span class="word-reveal-inner">${w}</span></span>`).join('');
                            // We use join('') because margin-right handles spacing
                        } else {
                            el.innerHTML = text;
                        }
                        el.style.opacity = '1';

                    }, 150);
                }
            });

            setTimeout(() => {
                document.querySelectorAll('.text-reveal').forEach(parent => {
                    const words = parent.querySelectorAll('.word-reveal-inner');
                    words.forEach((w, i) => {
                        w.style.transitionDelay = `${i * 0.05}s`;
                    });
                    
                    const sectionReveal = parent.closest('.reveal');
                    if (sectionReveal && sectionReveal.classList.contains('active')) {
                        sectionReveal.classList.remove('active');
                        void sectionReveal.offsetWidth;
                        sectionReveal.classList.add('active');
                    }
                });
            }, 200);

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

