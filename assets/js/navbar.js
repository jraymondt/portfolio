        // Navbar toggle functionality
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li');

            // Toggle navigation
            burger.addEventListener('click', () => {
                // Toggle nav
                nav.classList.toggle('nav-active');
                
                // Animate links with delay
                navLinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = '';
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                    }
                });
                
                // Burger animation
                burger.classList.toggle('toggle');
            });

            // Close menu when clicking outside
            document.addEventListener('click', (event) => {
                if (!nav.contains(event.target) && !burger.contains(event.target) && 
                    nav.classList.contains('nav-active')) {
                    nav.classList.remove('nav-active');
                    burger.classList.remove('toggle');
                    
                    navLinks.forEach((link) => {
                        link.style.animation = '';
                    });
                }
            });

            // Close menu when clicking on a link
            navLinks.forEach((link) => {
                link.addEventListener('click', () => {
                    nav.classList.remove('nav-active');
                    burger.classList.remove('toggle');
                    navLinks.forEach((l) => {
                        l.style.animation = '';
                    });
                });
            });
        });