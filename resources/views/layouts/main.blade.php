<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <title>Nguyễn Văn Phước &amp; Nguyễn Thị Mỹ Thùy Wedding site!</title>
        <meta name="description" content="Nguyễn Văn Phước &amp; Nguyễn Thị Mỹ Thùy">
        <meta name="keywords" content="Wedding,Nguyễn Văn Phước,Nguyễn Thị Mỹ Thùy">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Marmelad&amp;family=Oooh+Baby&amp;family=Bellota+Text&amp;display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.1/css/lightgallery.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/neela-icon-set.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @stack('css')
        <script async src="{{ asset('js/gtag.js') }}"></script>
        <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
    </head>
    <script type="text/javascript">
        var photoGalleries = [];
    </script>
<body>
{{-- <!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="loading-heart">
        <svg viewBox="0 0 512 512" width="100">
            <path
                d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
        </svg>
        <div class="preloader-title">
            P<br>
            <small>&</small><br>
            T
        </div>
    </div>
</div>
<!-- END PRELOADER --> --}}
<div id="wrapper">   
    @include('layouts.header')  
    <div class="langding-page">
        @yield('content') 
    </div>
    @include('layouts.footer')                 
</div>
<!-- Script -->
    <script>
        var slide1 = "{{ asset('images/TNQ06256.JPG') }}";
        var slide2 = "{{ asset('images/TNQ05996.JPG') }}";
        var slide3 = "{{ asset('images/TNQ06507.JPG') }}";
        var music = "{{ asset('images/IDo-911.mp3') }}"
        var slidehow_images = [slide1, slide2, slide3];
        var custom_color = "#747BA9";
        const biicore = {template_id: '644000ba4f8e0c7ddf09c709', templatePremium: ('1' === '1'), isPremium: ('1' === '1'), 
        bgMusic: music, alert: JSON.parse('{\"title\":\"L\\u1eddi c\\u1ea3m \\u01a1n t\\u1eeb D\\u00e2u & R\\u1ec3\",\"content\":\"Xin ch\\u00e2n th\\u00e0nh c\\u1ea3m \\u01a1n to\\u00e0n th\\u1ec3 m\\u1ecdi ng\\u01b0\\u1eddi \\u0111\\u00e3 g\\u1eedi l\\u1eddi ch\\u00fac cho v\\u1ee3 ch\\u1ed3ng ch\\u00fang em!\",\"timeout\":5000,\"status\":2,\"cancel_button_text\":\"\"}'), effect: JSON.parse('{\"type\":\"snow\"}')};
    </script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/bii.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ asset('js/variables.js') }}"></script>
    <script src="{{ asset('js/template.settings.js') }}"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script src="{{ asset('js/insertTextAtCursor.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/happyBook.js') }}"></script>
    @stack('js')
</body>
</html>
