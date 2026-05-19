<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('frontend.index') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="{{ asset('frontend/assets/img/Logo GGG.png') }}" alt="Global Graphic Giant Logo">
      <h1 class="sitename">Global Graphic Giant</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li class="dropdown"><a href="#portfolio"><span>Image Editing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-bg-removal">Background Removal</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-beauty">Beauty Retouch</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-clipping">Clipping Path</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-color-change">Color Change</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-color-correction">Color Correction</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-enhancement">Enhancement</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-high-end">High-end Retouch</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-manipulation">Image Manipulation</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-masking">Masking</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-neck">Neck Joint</a></li>
                <li><a href="#portfolio" class="portfolio-jump" data-filter=".filter-restoration">Restoration</a></li>
              </ul>
            </li>
            <li><a href="#services">Graphic Design</a></li>
            <li><a href="#services">3D Graphics</a></li>
            <li><a href="#services">Web service</a></li>
          </ul>
        </li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#resume">Our Workflow</a></li>
            <li><a href="#skills">Tools & Skills</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="header-social-links d-none d-xl-flex">
      <!-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> -->
      <a href="https://www.facebook.com/profile.php?id=61589797601164" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
      <a href="https://www.linkedin.com/company/global-graphic-giant" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</header>

