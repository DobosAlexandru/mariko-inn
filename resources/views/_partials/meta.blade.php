<meta charset="UTF-8" />
<meta name="description" content="{{ $page['description'] }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0 , minimum-scale=1.0, maximum-scale=1.0" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal_carousel.css') }}" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<title>{{  $page['title'] ? $page['title'] . ' - ' . config('settings.site_name')  : config('settings.seo_meta_title') }}</title>


