@extends('frontend.layouts.app')

@section('title', 'Our Creative Portfolio - Global Graphic Giant')
@section('meta_description', 'Take a look at some of the 500+ successful projects we have delivered to our happy clients globally.')
@section('meta_keywords', 'Creative Portfolio, Image Editing, Photo Retouching, Background Removal, Clipping Path, Global Graphic Giant')

@section('content')

  @include('frontend.sections.portfolio')

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const filter = urlParams.get('filter');
    if (filter) {
      const filterSelector = filter.startsWith('.') ? filter : '.' + filter;
      
      // Wait for page load and Isotope initialization
      window.addEventListener('load', () => {
        setTimeout(() => {
          const filterLi = document.querySelector(`.portfolio-filters li[data-filter="${filterSelector}"]`);
          if (filterLi) {
            filterLi.click();
            // Scroll to portfolio section
            const portfolioSection = document.getElementById('portfolio');
            if (portfolioSection) {
              portfolioSection.scrollIntoView({ behavior: 'smooth' });
            }
          }
        }, 300);
      });
    }
  });
</script>
@endpush
