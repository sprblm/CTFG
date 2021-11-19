<!DOCTYPE html>
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
                <div class="container">
                    <div class="left-side">
                        <a href="https://civictech.guide/">
                            <div id="logo">
                                <!-- <h2 style="margin-top: 2px;">Civic Tech Field Guide</h2> -->
                                <h2 style="margin-top: 2px;">
                                    Civic Tech Field Guide
                                </h2>
                            </div>
                        </a>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                            </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <!-- <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li>
                                    <div class="main-search-input gray-style margin-top-0 margin-bottom-10" style="padding: 0px !important;">
                                        <div class="main-search-input-item">
                                            <input type="text" class="typeahead" placeholder="Search Civic Tech Field Guide ..." value=""/>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav> -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="right-side">
                        <div class="header-widget">
                            <span style="padding-right: 25px;">
                                <a href="/listing-category/the-tech" class="overlay" style="padding-right: 10px;">The Tech</a>
                                <a href="/listing-category/the-people" class="overlay" style="padding-right: 10px;">The People</a>
                                <a href="/listing-categories" class="overlay" style="padding-right: 10px;">All Categories</a>
                                <a href="/world-map" style="padding-right: 10px;">World Map</a>
                                <a href="/about">About</a>
                            </span>
                            <a href="/projects/add" class="button border with-icon">Add Project <i class="sl sl-icon-plus"></i></a>
                        </div>
                    </div>
               
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        
        @if(@$template != "map")
            <div id="titlebar" class="gradient" style="margin-bottom: 1px;"></div> 
        @else
            <div>&nbsp;</div>
        @endif
        
        <div class="container">
            @yield('content')
        </div>

        @include('layouts.partials.footer')
        
        <div id="backtotop"><a href="#"></a></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    
    <script type="text/javascript">
        /*$(window).load(function() {
            $.LoadingOverlay("hide");
        }); */

        $('input.typeahead').keypress(function (e) {
            if (e.which == 13) {
                var q = $('input.typeahead').val();
                $.LoadingOverlay("show");
                window.location.replace("/listings/search?q="+q);
            }
        });
        

        var path = "{{ route('autocomplete') }}";

        $('input.typeahead').typeahead({
            displayKey: 'name',
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            },
            afterSelect: function (data) {
                window.location.replace("/listings/search?q="+data.name);
            }
            
        });



        $('#search').click(function(e) {
            var param = $(".typeahead").val();
            $.LoadingOverlay("show");
            window.location.href  = "/listings/search?q="+param;
        });

        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var linkText = document.getElementById("readMore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                linkText.innerHTML = "&nbsp;&nbsp;[++ Expand ++]";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                linkText.innerHTML = "&nbsp;&nbsp;[ -- Collapse --]";
                moreText.style.display = "inline";
            }
        }

        $("#search").click(function() {
            $.LoadingOverlay("show");
        });

        $("#filter").click(function() {
            $.LoadingOverlay("show");
        });

        $(".overlay").click(function() {
            $.LoadingOverlay("show");
        });

    </script>
    
    @yield('scripts')

</body>
</html>