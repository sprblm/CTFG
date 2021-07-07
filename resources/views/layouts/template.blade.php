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
                                <h2 style="margin-top: 2px;">CivicTech.Guide</h2>
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
                                <a href="/category/parent/the-tech" style="padding-right: 10px;">The Tech</a>
                                <a href="/category/parent/the-people">The People</a>
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
                        <h2 style="margin-top: 8px;">CivicTech.Guide</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <h4>Helpful Links</h4>
                        <ul class="footer-links">
                            <li><a href="#">The Tech</a></li>
                            <li><a href="#">The People</a></li>
                        </ul>
                        <ul class="footer-links">
                            <li><a href="#">About</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3  col-sm-12">
                        <h4>Reach Out</h4>
                        <div class="text-widget">
                            <span>12345 NYC</span> <br>
                            Phone: <span>123-456 </span><br>
                            E-Mail:<span> <a href="#">info@email.com</span></a> </span><br>
                        </div>
                        <ul class="social-icons margin-top-20">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyrights">© CivitTech.Guide</div>
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
                    /*var entry = "<a href='/search'>"+data.name+"</a>";
                    return process(entry); */
                    return process(data);
                });
            }
        });

        $('#search').click(function(e) {
            var name = $(".typeahead").val();
            return window.location.href  = "/projects/single/"+name;
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