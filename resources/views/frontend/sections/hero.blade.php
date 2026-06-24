    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>Let your business to GROW</h2>
            <p class="lead">We Create Stunning Graphics & Visual Identities</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="#contact" class="btn btn-primary">Request a Quote</a>
              <a href="{{ route('frontend.portfolio') }}" class="btn btn-outline">View Details</a>
            </div>
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number"><span class="counter" data-target="19">0</span>+</span>
                <span class="stat-label">Years Experience</span>
              </div>
              <div class="stat-item">
                <span class="stat-number"><span class="counter" data-target="500">0</span>+</span>
                <span class="stat-label">Happy Clients</span>
              </div>
              <div class="stat-item">
                <span class="stat-number"><span class="counter" data-target="100">0</span>%</span>
                <span class="stat-label">Satisfaction</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="{{ asset('frontend/assets/img/profile/profile-1.webp') }}" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300" fetchpriority="high" decoding="async">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    const speed = 200; // The lower the slower

    const animateCounters = () => {
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;

          // Lower inc to slow and higher to speed up
          const inc = target / speed;

          // Check if target is reached
          if (count < target) {
            // Add inc to count and output in counter
            counter.innerText = Math.ceil(count + inc);
            // Call function every ms
            setTimeout(updateCount, 10);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
    };

    // Use Intersection Observer to trigger animation when section is in view
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    const heroSection = document.getElementById('hero');
    if (heroSection) {
      observer.observe(heroSection);
    }
  });
</script>
@endpush
