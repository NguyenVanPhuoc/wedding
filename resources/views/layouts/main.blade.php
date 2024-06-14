<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Nguyễn Phước &amp; Mỹ Thùy </title>
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
        <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.1/css/lightgallery.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/neela-icon-set.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @stack('css')
        {{-- <script async src="{{ asset('js/gtag.js') }}"></script>
        <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script> --}}
    </head>
    <script type="text/javascript">
        var photoGalleries = [];
    </script>
<body>
    <!-- BEGIN PRELOADER -->
    <div id="preloader">
        <div class="loading-heart">
            <svg viewBox="0 0 512 512" width="100">
                <path
                    d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
            </svg>
            <div class="preloader-title">
                Phước<br><i class="fa fa-heart"></i><br>Thùy
            </div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <div id="wrapper">   
        @include('layouts.header')  
        <div class="langding-page">
            @yield('content') 
        </div>
        @include('layouts.footer')                 
    </div>
    <!-- Script -->
    <script>
        var slide1 = "{{ asset('images/TNQ06589.JPG') }}";
        var slide2 = "{{ asset('images/TNQ05953.JPG') }}";
        var slide3 = "{{ asset('images/TNQ06426.JPG') }}";
        var music = "{{ asset('images/IDo-911.mp3') }}"
        var slidehow_images = [slide1, slide2, slide3];
        var custom_color = "#747BA9";
        const biicore = {template_id: '644000ba4f8e0c7ddf09c709', templatePremium: ('1' === '1'), isPremium: ('1' === '1'), 
        bgMusic: music, effect: JSON.parse('{\"type\":\"snow\"}')};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/bii.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ asset('js/variables.js') }}"></script>
    <script src="{{ asset('js/template.settings.js') }}"></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
    {{-- <script src="{{ asset('js/insertTextAtCursor.js') }}"></script> --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/happyBook.js') }}"></script>
    @stack('js')
</body>
</html>