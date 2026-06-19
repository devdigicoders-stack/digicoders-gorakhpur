import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {


    // 2. Dark/Light Theme Switcher
    const themeToggle = document.getElementById('theme-toggle');
    const currentTheme = localStorage.getItem('theme') || 'light';

    document.documentElement.setAttribute('data-theme', currentTheme);
    updateThemeToggleIcon(currentTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            let theme = document.documentElement.getAttribute('data-theme');
            let newTheme = theme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeToggleIcon(newTheme);
        });
    }

    function updateThemeToggleIcon(theme) {
        const iconContainer = document.getElementById('theme-toggle-icon');
        if (!iconContainer) return;

        if (theme === 'dark') {
            // Sun icon for dark mode (click to switch to light)
            iconContainer.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" clip-rule="evenodd" />
            </svg>`;
        } else {
            // Moon icon for light mode (click to switch to dark)
            iconContainer.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
            </svg>`;
        }
    }

    // 3. Stats Counter Animation
    const stats = document.querySelectorAll('.stat-number');

    if (stats.length > 0) {
        let animated = false;

        const startCountAnimation = () => {
            if (animated) return;
            animated = true;
            stats.forEach(stat => {
                const target = +stat.getAttribute('data-target');
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // ~60fps
                let current = 0;

                const updateCount = () => {
                    current += increment;
                    if (current < target) {
                        stat.innerText = Math.ceil(current).toLocaleString() + '+';
                        requestAnimationFrame(updateCount);
                    } else {
                        stat.innerText = target.toLocaleString() + '+';
                    }
                };
                updateCount();
            });
        };

        // Hero stats are visible on page load — start immediately
        // Small delay so the page renders first, giving a nice effect
        setTimeout(startCountAnimation, 600);
    }

    // 4. GSAP Card Hover Tilt Effects
    if (typeof gsap !== 'undefined') {
        const cards = document.querySelectorAll('.tilt-card');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - (rect.width / 2);
                const y = e.clientY - rect.top - (rect.height / 2);

                // Tilt card up to 10 degrees based on cursor offset
                gsap.to(card, {
                    rotateY: x * 0.08,
                    rotateX: -y * 0.08,
                    transformPerspective: 600,
                    ease: 'power1.out',
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotateY: 0,
                    rotateX: 0,
                    ease: 'power1.out',
                    duration: 0.5
                });
            });
        });
    }

    // 5. AOS Init
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 0, // Trigger animations for elements already in the viewport on load
            delay: 0
        });
    }
});
