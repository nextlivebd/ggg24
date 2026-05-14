@extends('frontend.layouts.app')

@section('title', 'Global Graphic Giant - A Complete IT Solution')
@section('meta_description', 'Global Graphic Giant is a premier IT solutions company offering custom web development, mobile app development, UI/UX design, eCommerce, and 3D modeling services globally since 2006.')
@section('meta_keywords', 'IT Solution, Web Development, eCommerce Development, Mobile App Development, UI/UX Design, 3D Modeling, Software Outsourcing Bangladesh, Global Graphic Giant')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Organization',
            '@id' => url('/#organization'),
            'name' => 'Global Graphic Giant',
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                '@id' => url('/#logo'),
                'inLanguage' => 'en-US',
                'url' => asset('frontend/assets/img/logo.webp'),
                'contentUrl' => asset('frontend/assets/img/logo.webp'),
                'width' => 1920,
                'height' => 1080,
                'caption' => 'Global Graphic Giant'
            ],
            'image' => ['@id' => url('/#logo')],
            'sameAs' => [
                'https://www.facebook.com/',
                'https://twitter.com/',
                'https://www.linkedin.com/'
            ]
        ],
        [
            '@type' => 'WebSite',
            '@id' => url('/#website'),
            'url' => url('/'),
            'name' => 'Global Graphic Giant',
            'description' => 'A Complete IT Solution',
            'publisher' => ['@id' => url('/#organization')],
            'inLanguage' => 'en-US'
        ],
        [
            '@type' => 'LocalBusiness',
            '@id' => url('/#localbusiness'),
            'name' => 'Global Graphic Giant',
            'image' => asset('frontend/assets/img/logo.webp'),
            'url' => url('/'),
            'telephone' => '+8801712528945',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Ikramul Vila, 827/1, East Shewrapara [2nd Floor], Kafrul, Mirpur',
                'addressLocality' => 'Dhaka',
                'postalCode' => '1216',
                'addressCountry' => 'BD'
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')

  @include('frontend.sections.hero')
  @include('frontend.sections.about')
  @include('frontend.sections.skills')
  @include('frontend.sections.resume')
  @include('frontend.sections.portfolio')
  @include('frontend.sections.testimonials')
  @include('frontend.sections.services')
  @include('frontend.sections.faq')
  @include('frontend.sections.contact')

@endsection
