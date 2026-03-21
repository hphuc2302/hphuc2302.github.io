console.log(
    "%c+-------------------------------------------------------------+\n" +
    "|               CRAFTED WITH ♥ BY PUCS                        |\n" +
    "+-------------------------------------------------------------+",
    "color: #0ea5e9; font-weight: bold; font-family: monospace;"
);


document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;
    const toggleBtns = document.querySelectorAll('#themeToggle, #themeToggleMobile');

    const setTheme = (isDark) => {
        root.classList.toggle('dark', isDark);
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        toggleBtns.forEach(btn => {
            btn.innerHTML = isDark
                ? '<i class="ph ph-sun text-lg"></i>'
                : '<i class="ph ph-moon-stars text-lg"></i>';
        });
    };

    const savedTheme = localStorage.getItem('theme');
    const sysDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(savedTheme === 'dark' || (!savedTheme && sysDark));

    toggleBtns.forEach(btn => btn.addEventListener('click', () => {
        setTheme(!root.classList.contains('dark'));
    }));

    const menuBtn = document.getElementById('mobileMenuBtn');
    const menuClose = document.getElementById('mobileMenuClose');
    const menuBackdrop = document.getElementById('mobileMenuBackdrop');
    const menuPanel = document.getElementById('mobileMenuPanel');
    const menuLinks = menuPanel ? menuPanel.querySelectorAll('a') : [];

    function toggleMenu(show) {
        if (!menuBackdrop || !menuPanel) return;
        if (show) {
            menuBackdrop.classList.remove('invisible', 'opacity-0');
            menuPanel.classList.remove('translate-y-full');
            document.body.style.overflow = 'hidden';
        } else {
            menuBackdrop.classList.add('invisible', 'opacity-0');
            menuPanel.classList.add('translate-y-full');
            document.body.style.overflow = '';
        }
    }

    menuBtn?.addEventListener('click', () => toggleMenu(true));
    menuClose?.addEventListener('click', () => toggleMenu(false));
    menuBackdrop?.addEventListener('click', (e) => {
        if (e.target === menuBackdrop) toggleMenu(false);
    });
    menuLinks.forEach(l => l.addEventListener('click', () => toggleMenu(false)));

    const header = document.getElementById('mainHeader');
    const fab = document.getElementById('fab');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function onScroll() {
        const y = window.scrollY;

        if (header) {
            if (y > 50) header.classList.add('py-0');
            else header.classList.remove('py-0');
        }

        if (fab) {
            if (y > 500) fab.classList.add('show');
            else fab.classList.remove('show');
        }

        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (y >= (sectionTop - 150)) {
                current = section.getAttribute('id') || '';
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href') || '';
            if (current && href.includes(current)) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    const triggers = document.querySelectorAll('[data-open]');
    const closers = document.querySelectorAll('[data-close="true"]');

    triggers.forEach(t => t.addEventListener('click', (e) => {
        e.preventDefault();
        const targetModal = document.getElementById(t.getAttribute('data-open'));
        if (targetModal) {
            targetModal.classList.remove('hidden');
            // trigger reflow
            void targetModal.offsetWidth;
            const backdrop = targetModal.querySelector('.modal-backdrop');
            const content = targetModal.querySelector('.modal-content');
            if (backdrop && content) {
                backdrop.classList.remove('opacity-0');
                content.classList.remove('opacity-0', 'scale-95');
            }
        }
    }));

    closers.forEach(c => c.addEventListener('click', function (e) {
        e.preventDefault();
        const modalToClose = this.closest('.fixed');
        if (modalToClose) {
            const backdrop = modalToClose.querySelector('.modal-backdrop');
            const content = modalToClose.querySelector('.modal-content');
            if (backdrop && content) {
                backdrop.classList.add('opacity-0');
                content.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    modalToClose.classList.add('hidden');
                }, 300); // match transition duration
            } else {
                modalToClose.classList.add('hidden');
            }
        }
    }));

    if (window.AOS) {
        AOS.init({
            duration: 800,
            easing: 'ease-out-quart',
            once: true,
        });
        document.documentElement.classList.add('aos-ready');
    }

    if (window.Swiper) {
        new Swiper('#projectsSwiper', {
            slidesPerView: 1.1,
            spaceBetween: 16,
            centeredSlides: true,
            pagination: { el: '.swiper-pagination', clickable: true },
        });

        new Swiper('#aboutSwiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            effect: 'fade',
            pagination: { el: '.about-swiper-pagination', clickable: true },
        });
    }
});
