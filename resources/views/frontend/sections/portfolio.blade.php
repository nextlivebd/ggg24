    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Creative Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Take a look at some of the 500+ successful projects we have delivered to our happy clients globally.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          @php
          $categories = [
              'filter-bg-removal' => 'Background Removal',
              'filter-beauty' => 'Beauty Retouch',
              'filter-clipping' => 'Clipping Path',
              'filter-color-change' => 'Color Change',
              'filter-color-correction' => 'Color Correction',
              'filter-enhancement' => 'Enhancement',
              'filter-high-end' => 'High-end Retouch',
              'filter-manipulation' => 'Image Manipulation',
              'filter-masking' => 'Masking',
              'filter-neck' => 'Neck Joint',
              'filter-restoration' => 'Restoration',
          ];

          $portfolioItems = [
              ['cat' => 'filter-bg-removal', 'title' => 'Background Removal', 'before' => '1_Before_-cmpr.webp', 'after' => '1_After_-cmpr.webp', 'dir' => 'Background-removal'],
              ['cat' => 'filter-bg-removal', 'title' => 'Background Removal', 'before' => '2_Before-cmpr.webp', 'after' => '2_After-cmpr.webp', 'dir' => 'Background-removal'],
              ['cat' => 'filter-beauty', 'title' => 'Beauty Retouch', 'before' => 'Before_1-cmpr.webp', 'after' => 'After _1-cmpr.webp', 'dir' => 'Beauty-retouch'],
              ['cat' => 'filter-beauty', 'title' => 'Beauty Retouch', 'before' => 'AKJV101T_Before-cmpr.webp', 'after' => 'AKJV101T__After -cmpr.webp', 'dir' => 'Beauty-retouch'],
              ['cat' => 'filter-clipping', 'title' => 'Clipping Path', 'before' => '3_ Before-cmpr.webp', 'after' => '3_ After-cmpr.webp', 'dir' => 'Clipping-Path'],
              ['cat' => 'filter-clipping', 'title' => 'Clipping Path', 'before' => '_DS_Before -cmpr.webp', 'after' => '_DS_After -cmpr.webp', 'dir' => 'Clipping-Path'],
              ['cat' => 'filter-color-change', 'title' => 'Color Change', 'before' => '4_Before.webp', 'after' => '4_After.webp', 'dir' => 'Color-Change'],
              ['cat' => 'filter-color-change', 'title' => 'Color Change', 'before' => '5_Before.webp', 'after' => '5_After.webp', 'dir' => 'Color-Change'],
              ['cat' => 'filter-color-correction', 'title' => 'Color Correction', 'before' => 'DSBefore.webp', 'after' => 'DSAfter.webp', 'dir' => 'Color-Correction'],
              ['cat' => 'filter-enhancement', 'title' => 'Enhancement', 'before' => 'teste1-16_Beforer.webp', 'after' => 'teste1-16_Agter.webp', 'dir' => 'Enhancement'],
              ['cat' => 'filter-enhancement', 'title' => 'Enhancement', 'before' => 'teste1-3_Before.webp', 'after' => 'teste1-3_After.webp', 'dir' => 'Enhancement'],
              ['cat' => 'filter-high-end', 'title' => 'High-end Retouch', 'before' => 'AKJV301 Before-cmpr.webp', 'after' => 'AKJV301 After-cmpr.webp', 'dir' => 'High-end-retouch'],
              ['cat' => 'filter-high-end', 'title' => 'High-end Retouch', 'before' => 'Keull_Before-cmpr.webp', 'after' => 'Keull_After_-cmpr.webp', 'dir' => 'High-end-retouch'],
              ['cat' => 'filter-manipulation', 'title' => 'Image Manipulation', 'before' => '7-Before-cmpr.webp', 'after' => '7-After-cmpr.webp', 'dir' => 'image-manipulation'],
              ['cat' => 'filter-masking', 'title' => 'Masking', 'before' => '57-Before-cmpr.webp', 'after' => '57-After-cmpr.webp', 'dir' => 'Masking'],
              ['cat' => 'filter-masking', 'title' => 'Masking', 'before' => 'EVO42_1Before-cmpr.webp', 'after' => 'EVO42_1_After-cmpr.webp', 'dir' => 'Masking'],
              ['cat' => 'filter-neck', 'title' => 'Neck Joint', 'before' => 'before1.webp', 'after' => 'after1.webp', 'dir' => 'Neck-Joint'],
              ['cat' => 'filter-neck', 'title' => 'Neck Joint', 'before' => 'before2.webp', 'after' => 'after2.webp', 'dir' => 'Neck-Joint'],
              ['cat' => 'filter-neck', 'title' => 'Neck Joint', 'before' => 'before3.webp', 'after' => 'after3.webp', 'dir' => 'Neck-Joint'],
              ['cat' => 'filter-restoration', 'title' => 'Restoration', 'before' => 'before.webp', 'after' => 'after.webp', 'dir' => 'Restoration'],
          ];
          @endphp

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters ba-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              @foreach($categories as $class => $name)
                <li data-filter=".{{ $class }}">{{ $name }}</li>
              @endforeach
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            @foreach($portfolioItems as $item)
            <div class="col-lg-6 col-md-6 col-sm-12 portfolio-item isotope-item {{ $item['cat'] }}">
              <div class="portfolio-card ba-card mx-auto" style="width: 90%;">
                
                <div class="ba-slider-container">
                  <!-- Invisible image to set aspect ratio dynamically -->
                  <img src="{{ asset('frontend/assets/img/Portfolio/'.$item['dir'].'/'.$item['after']) }}" alt="" style="width: 100%; height: auto; visibility: hidden; display: block;">
                  
                  <!-- After Image (Background) -->
                  <div class="ba-image ba-image-after" style="background-image: url('{{ asset('frontend/assets/img/Portfolio/'.$item['dir'].'/'.$item['after']) }}')">
                    <span class="ba-label ba-label-after">After</span>
                  </div>
                  <!-- Before Image (Foreground with clip-path) -->
                  <div class="ba-image ba-image-before" style="background-image: url('{{ asset('frontend/assets/img/Portfolio/'.$item['dir'].'/'.$item['before']) }}');">
                    <span class="ba-label ba-label-before">Before</span>
                  </div>
                  
                  <!-- Slider Input -->
                  <input type="range" min="0" max="100" value="50" class="ba-slider-range" aria-label="Percentage of before photo shown">
                  
                  <!-- Slider Visual Handle -->
                  <div class="ba-slider-line">
                     <div class="ba-slider-button">
                        <i class="bi bi-chevron-left"></i>
                        <i class="bi bi-chevron-right"></i>
                     </div>
                  </div>
                </div>

                <div class="portfolio-content text-center mt-3">
                  <span class="category d-block mb-1">{{ $item['title'] }}</span>
                  <h3 style="font-size: 1rem; color: #666;">Hover or drag the slider</h3>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
