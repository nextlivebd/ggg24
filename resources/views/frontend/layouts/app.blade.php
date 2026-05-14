<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
      Website Designed and Developed by: www.adsvolt.com
      Company Owner & Lead Designer: Md Alamgir Hossain Nahid
    -->
    
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Basic SEO Meta Tags -->
    <title>@yield('title', 'Global Graphic Giant - Premium Graphic Design & Branding Agency')</title>
    <meta name="description" content="@yield('meta_description', 'Global Graphic Giant is a premier graphic design agency offering complete branding, UI/UX design, custom illustration, and promotional design services globally since 2006.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Graphic Design Agency, Brand Identity, UI/UX Design, Custom Illustration, Promotional Design, 3D Animation, Branding Services Bangladesh, Global Graphic Giant')">
    <meta name="author" content="Global Graphic Giant">
    <meta name="robots" content="@yield('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', View::getSection('title', 'Global Graphic Giant - Premium Graphic Design & Branding Agency'))">
    <meta property="og:description" content="@yield('og_description', View::getSection('meta_description', 'Global Graphic Giant is a premier graphic design agency offering complete branding, UI/UX design, custom illustration, and promotional design services globally since 2006.'))">
    <meta property="og:image" content="@yield('og_image', asset('frontend/assets/img/logo.webp'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Global Graphic Giant">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@globalgraphicgiant">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', View::getSection('title', 'Global Graphic Giant - Premium Graphic Design & Branding Agency'))">
    <meta name="twitter:description" content="@yield('twitter_description', View::getSection('meta_description', 'Global Graphic Giant is a premier graphic design agency offering complete branding, UI/UX design, custom illustration, and promotional design services globally since 2006.'))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('frontend/assets/img/logo.webp'))">

    <!-- Structured Data / JSON-LD -->
    @stack('schema')

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/Logo GGG.png') }}" rel="icon">

    <link href="{{ asset('frontend/assets/img/Logo GGG.png') }}"
        rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">

    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}"
        rel="stylesheet">

    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}"
        rel="stylesheet">

    @stack('styles')

</head>

<body class="index-page">

    <!-- Scroll Progress Bar -->
    <div id="scroll-progress"></div>

    <!-- Custom Cursor -->
    <div class="custom-cursor-dot"></div>
    <div class="custom-cursor-outline"></div>

    {{-- Header --}}
    @include('frontend.layouts.header')

    {{-- Main Content --}}
    <main class="main">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    <!-- Scroll Top -->
    <a href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center">

        <i class="bi bi-arrow-up-short"></i>

    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>

    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}" defer></script>

    @stack('scripts')

    <!-- Dynamic Section-wise Title Script -->
    <script>
        // 1. Dynamic Section-wise Title Script
        document.addEventListener('DOMContentLoaded', function () {
            // Define your sections and their corresponding titles
            const sectionTitles = {
                'hero': 'Global Graphic Giant - Premium Graphic Design & Branding Agency',
                'about': 'About Us - Global Graphic Giant',
                'skills': 'Our Expertise & Tools - Global Graphic Giant',
                'resume': 'Milestones & Creative Workflow - Global Graphic Giant',
                'portfolio': 'Our Creative Portfolio - Global Graphic Giant',
                'testimonials': 'Client Testimonials - Global Graphic Giant',
                'services': 'Our Design Services - Global Graphic Giant',
                'faq': 'Frequently Asked Questions - Global Graphic Giant',
                'contact': 'Contact Us - Global Graphic Giant'
            };

            const baseTitle = document.title;
            const sections = document.querySelectorAll('section[id]');
            
            if ('IntersectionObserver' in window) {
                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.5 // Trigger when 50% of the section is visible
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const id = entry.target.getAttribute('id');
                            if (sectionTitles[id]) {
                                document.title = sectionTitles[id];
                                // Optionally update URL hash without scrolling
                                if(history.replaceState) {
                                    history.replaceState(null, null, '#' + id);
                                }
                            }
                        }
                    });
                }, observerOptions);

                sections.forEach(section => {
                    observer.observe(section);
                });
            }

            // 2. Scroll Progress Bar
            const scrollProgress = document.getElementById('scroll-progress');
            window.addEventListener('scroll', () => {
                const totalScroll = document.documentElement.scrollTop;
                const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scroll = `${(totalScroll / windowHeight) * 100}%`;
                if(scrollProgress) scrollProgress.style.width = scroll;
            });


            // 3. Custom Interactive Cursor
            const cursorDot = document.querySelector('.custom-cursor-dot');
            const cursorOutline = document.querySelector('.custom-cursor-outline');
            
            if(cursorDot && cursorOutline && window.matchMedia("(pointer: fine)").matches) {
                window.addEventListener('mousemove', function (e) {
                    const posX = e.clientX;
                    const posY = e.clientY;
                    
                    cursorDot.style.left = `${posX}px`;
                    cursorDot.style.top = `${posY}px`;
                    
                    // Simple delayed follow using CSS transition
                    cursorOutline.style.left = `${posX}px`;
                    cursorOutline.style.top = `${posY}px`;
                });

                // Add hover effect to links and buttons
                const interactiveElements = document.querySelectorAll('a, button, .portfolio-card, .service-item, input, textarea');
                interactiveElements.forEach(el => {
                    el.addEventListener('mouseenter', () => {
                        cursorOutline.classList.add('cursor-hover');
                        cursorDot.style.opacity = '0'; // Hide dot when hovering to focus on expanding outline
                    });
                    el.addEventListener('mouseleave', () => {
                        cursorOutline.classList.remove('cursor-hover');
                        cursorDot.style.opacity = '1';
                    });
                });
            }

            // 4. 3D Tilt Effect on Cards
            const tiltElements = document.querySelectorAll('.service-item, .portfolio-card');
            
            tiltElements.forEach(el => {
                el.addEventListener('mousemove', (e) => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left; 
                    const y = e.clientY - rect.top;  
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -10; 
                    const rotateY = ((x - centerX) / centerX) * 10;
                    
                    el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                });
                
                el.addEventListener('mouseleave', () => {
                    el.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
                });
            });

        });
    </script>
</body>

</html>