        // scroll animation observer
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    // Optional: unobserve after animation
                    scrollObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -60px 0px'
        });

        document.querySelectorAll('[data-scroll]').forEach(el => {
            scrollObserver.observe(el);
        });

        // Stagger children that have data-scroll
        document.querySelectorAll('.stagger-children').forEach(parent => {
            const children = parent.querySelectorAll('[data-scroll]');
            children.forEach((child, i) => {
                child.style.transitionDelay = `${i * 0.12}s`;
            });
        });

        // mobile menu toogle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('bar1');
        const bar2 = document.getElementById('bar2');
        const bar3 = document.getElementById('bar3');
        let menuOpen = false;

        menuBtn.addEventListener('click', () => {
            menuOpen = !menuOpen;
            mobileMenu.classList.toggle('open', menuOpen);

            if (menuOpen) {
                bar1.style.transform = 'rotate(45deg) translate(5px, 5px)';
                bar2.style.opacity = '0';
                bar3.style.transform = 'rotate(-45deg) translate(5px, -5px)';
                bar3.style.width = '1.5rem';
            } else {
                bar1.style.transform = '';
                bar2.style.opacity = '';
                bar3.style.transform = '';
                bar3.style.width = '';
            }
        });

        // Close menu on link click
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                mobileMenu.classList.remove('open');
                bar1.style.transform = '';
                bar2.style.opacity = '';
                bar3.style.transform = '';
                bar3.style.width = '';
            });
        });

        // nav bar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                navbar.style.borderBottomColor = 'rgba(197, 142, 75, 0.15)';
            } else {
                navbar.style.borderBottomColor = 'rgba(255,255,255,0.1)';
            }
        }, { passive: true });

        // faq accordion
        document.querySelectorAll('.faq-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const chevron = btn.querySelector('.faq-chevron');
                const isOpen = content.classList.contains('open');

                // Close all
                document.querySelectorAll('.faq-content').forEach(c => c.classList.remove('open'));
                document.querySelectorAll('.faq-chevron').forEach(c => c.classList.remove('rotated'));
                document.querySelectorAll('.faq-item').forEach(i => i.style.borderColor = '');

                if (!isOpen) {
                    content.classList.add('open');
                    chevron.classList.add('rotated');
                    btn.closest('.faq-item').style.borderColor = 'rgba(197,142,75,0.4)';
                }
            });
        });

        // smooth scroll for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 72;
                    const top = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 100) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.style.color = link.getAttribute('href') === `#${current}` ? '#c58e4b' : '';
            });
        }, { passive: true });