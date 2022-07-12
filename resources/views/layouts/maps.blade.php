<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ @$title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
    @yield('styles')
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R1HZWFGK53"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-R1HZWFGK53');
    </script>
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container" style="width: 100%">
                    <div class="left-side">
                        <a href="https://civictech.guide/">
                            <div id="logo">
                                <h2 class="site-title" style="margin-top: 2px;">
                                    Civic Tech Field Guide
                                </h2>
                                <small>Sharing knowledge and productively growing the field</small>
                            </div>
                        </a>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                                <span class="visually-hidden">Toggle navigation</span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="right-side">
                        <div class="header-widget">
                            <div style="padding-right: 25px; font-size: 19px;">
                                <a href="/" class="@if(@$menu == 'directory') active @endif" style="padding-right: 10px;">Directory</a>
                                <a href="/about" class="@if(@$menu == 'about') active @endif" style="padding-right: 10px;">About</a>
                                <a href="https://civictech.guide/contribute" style="padding-right: 10px;">Contribute</a>
                            </div>
                            <div style="padding-right: 25px; margin-top: 15px;">
                                <a href="/tech" class="overlay @if(@$menu == 'tech') active @endif" style="padding-right: 10px;">The Tech</a>
                                <a href="/people" class="overlay @if(@$menu == 'people') active @endif" style="padding-right: 10px;">The People</a>
                                <a href="/adjacent" class="overlay @if(@$menu == 'adj') active @endif" style="padding-right: 10px;">Adjacent Fields</a>
                                <a href="/listing-categories" class="overlay @if(@$menu == 'categories') active @endif" style="padding-right: 10px;">All Categories</a>
                                <a href="/tags" class="overlay @if(@$menu == 'tags') active @endif" style="padding-right: 10px;">Tags</a>
                                <a href="/world-map" class="@if(@$menu == 'map') active @endif" style="padding-right: 10px;">World Map</a>
                                <a href="/projects/add" style="padding: 20px 0 0 0 !important; margin-bottom: -5px !important; line-height: 26px !important; color: #EA0630;" class=" with-icon">Add Project <i class="sl sl-icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <div>&nbsp;</div>
        
        <div class="container" style="width: 100%;">
            @yield('content')
        </div>

        @include('layouts.partials.footer')

        <div id="backtotop"><a href="#"><span class="visually-hidden">Back to Top</span></a></div>
    </div>
    
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/chosen.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/rangeslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tooltips.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    
    @yield('scripts')
    
    
</body>
</html>