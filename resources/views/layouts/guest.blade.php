<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SomosDevs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/css.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>





        {{-- @livewireScripts --}}

        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            let SwiperTop = new Swiper('.swiper--top', {
                spaceBetween: 0
                , centeredSlides: true
                , speed: 6000
                , autoplay: {
                    delay: 1
                , }
                , loop: true
                , loopedSlides: 3
                , slidesPerView: 6
                , allowTouchMove: false
                , disableOnInteraction: true
            });

            let SwiperBottom = new Swiper('.swiper--bottom', {
                spaceBetween: 0
                , centeredSlides: true
                , speed: 6000
                , autoplay: {
                    delay: 1
                    , reverseDirection: true
                }
                , loop: true
                , loopedSlides: 4
                , slidesPerView: 6
                , allowTouchMove: false
                , disableOnInteraction: true
            });

        </script>
    </body>
</html>
