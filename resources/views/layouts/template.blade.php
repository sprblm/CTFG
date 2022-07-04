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
                                <h2 style="margin-top: 2px; font-size: 2.5rem;">
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
                                <span class="visually-hidden">Toggle navigation</span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="right-side">
                        <div class="header-widget">
                            <span style="padding-right: 25px;">
                                <a href="/tech" class="overlay" style="padding-right: 10px;">The Tech</a>
                                <a href="/people" class="overlay" style="padding-right: 10px;">The People</a>
                                <a href="/adjacent" class="overlay" style="padding-right: 10px;">Adjacent Fields</a>
                                <a href="/listing-categories" class="overlay" style="padding-right: 10px;">All Categories</a>
                                <a href="/tags" class="overlay" style="padding-right: 10px;">Tags</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    
    <script type="text/javascript">
        /*$(window).load(function() {
            $.LoadingOverlay("hide");
        }); */
        

        var path = "{{ route('autocomplete') }}";

        /*$('input.typeahead').typeahead({
            displayKey: 'name',
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            },
            afterSelect: function (data) {
                window.location.replace("/listings/search?q="+data.name);
            }
            
        }); */

        $('input.typeahead').typeahead({
            displayKey: 'name',
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            },
            afterSelect: function (data) {
                $.LoadingOverlay("show");
                //window.location.replace("/listings/search?q="+data.name);
                var listing = data.name;
                slug = listing.replace(/\s+/g, '-').toLowerCase();
                //console.log(slug)
                window.location.replace("/listing/"+slug);
            }
            
        }).keydown(function( event ) {
            if ( event.which == 13 ) {
                $(this).blur();
                $(this).focus();
                var q = $(".typeahead").val();

                $.LoadingOverlay("show");
                window.location.replace("/listings/search?q="+q);
                return false;
            }
        });


        $('#search').click(function(e) {
            var param = $(".typeahead").val();
            /*var countries = [];
            $('#countries option:selected').each(function(index,valor){
                countries.push(valor.value);
            });
            
            console.log(countries);*/
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