<!DOCTYPE html>
<head>
    <title>{{ @$title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
    @yield('styles')
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
                                <!-- <h2 style="margin-top: 2px;">CivicTech.Guide</h2> -->
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
                                            <input type="text" class="typeahead" placeholder="Search CivicTech.Guide ..." value=""/>
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
                                <a href="/all-categories" style="padding-right: 10px;">All Categories</a>
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
        
        <div id="titlebar" class="gradient" style="margin-bottom: 1px;"></div> 
        
        <div class="container">
            @yield('content')
        </div>

        <div id="footer" class="margin-top-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <h2 style="margin-top: 8px;">Get email updates</h2>
                        <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
                        <div id="mc_embed_signup">
                            <form action="https://guide.us19.list-manage.com/subscribe/post?u=cdb853c4847acff0d0a09460d&amp;id=ca5a70438b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb853c4847acff0d0a09460d_ca5a70438b" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->

                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <h2>Helpful Links</h2>
                        <ul class="footer-links" style="width: 100%;">
                            <li><a href="https://civictech.guide/map/">Civic Tech World Map</a></li>
                            <li><a href="https://civictech.guide/causes/">Projects by cause</a></li>
                        </ul>
                    
                        <ul class="footer-links" style="width: 100%;">
                            <li><a href="https://civictech.guide/calendar/">Events</a></li>
                            <li><a href="https://civictech.guide/research/">Research</a></li>
                        </ul>
                    
                        <ul class="footer-links" style="width: 100%;">
                            <li><a href="https://civictech.guide/what-can-i-do-with-the-civic-tech-field-guide/">How to use this site</a></li>
                            <li><a href="https://civictech.guide/guiding-principles/">Guiding principles</a></li>
                            <li><a href="https://civictech.guide/blog/">Blog</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3  col-sm-12">
                        <h2>Reach Out</h2>
                        <div class="text-widget">
                            <span>
                                info@civictech.guide or <a href="https://civictech.guide/contact">Contact us</a>
                            </span>
                        </div>
                        <ul class="social-icons margin-top-20">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/civictechguide/"><i class="icon-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="https://twitter.com/civictechguide"><i class="icon-twitter"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.instagram.com/civictechguide/"><i class="icon-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix">&nbsp;&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row social-icons margin-top-20">
                            <div class="col-md-3">
                                <h4>Founding organization</h4>
                                <img width="150" height="150" src="{{ asset('images/civic_hall.png') }}" />
                            </div>
                            <div class="col-md-6">
                                <h4>With support from</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img width="300" height="150" src="{{ asset('images/knight_foundation.png') }}" />
                                    </div>
                                    <div class="col-md-6" style="vertical-align: text-top;">
                                        <img width="200" height="150" src="{{ asset('images/luminate.png') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h4>Technology Partner</h4>
                                <img width="150" height="150" src="{{ asset('images/sarapis.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyrights"><img width="18" height="18" src="{{ asset('images/cc.png') }}" /> Civic Tech Field Guide</div>
                    </div>
                </div>
            </div>
        </div>
        
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZ3iFXxO0dN75GKYwNsToH3W6u1kcGR0&libraries=places&callback=initAutocomplete"></script> -->
    
</body>
</html>