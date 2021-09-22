<!DOCTYPE html>
<head>
    <title>{{ @$title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
    @yield('styles')
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'G-T3J4EWQG5R', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <a href="/">
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
                                <a href="/listing-category/the-tech" style="padding-right: 10px;">The Tech</a>
                                <a href="/listing-category/the-people" style="padding-right: 10px;">The People</a>
                                <a href="/listing-categories" style="padding-right: 10px;">All Categories</a>
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
    <script type="text/javascript">
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

    </script>
    
    @yield('scripts')
    <!-- Google Autocomplete -->
    <!-- <script>
        function initAutocomplete() {
          var input = document.getElementById('autocomplete-input');
          var autocomplete = new google.maps.places.Autocomplete(input);
        
          autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
              window.alert("No details available for input: '" + place.name + "'");
              return;
            }
          });
        
        if ($('.main-search-input-item')[0]) {
           setTimeout(function(){ 
               $(".pac-container").prependTo("#autocomplete-container");
           }, 300);
        }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm6llrO2VUicflJMJFpgXOA1aS3VIUSGs&libraries=places&callback=initAutocomplete"></script> -->
    
</body>
</html>