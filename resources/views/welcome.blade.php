<!DOCTYPE html>
<head>
    <title>CTFG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <h2 style="margin-top: 2px;">CivicTech.Guide</h2>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                            </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li>
                                	<div class="main-search-input gray-style margin-top-0 margin-bottom-10" style="padding: 0px !important;">
										<div class="main-search-input-item">
											<input type="text" placeholder="Search CivicTech.Guide" value=""/>
										</div>
									</div>
                                    <!--<a href="#">Entries</a>
                                    <ul>
                                        <li><a href="#">Entry 1</a></li>
                                        <li><a href="#">Entry 2</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->
                    <!-- Right Side Content / End -->
                    <div class="right-side">
                        <div class="header-widget">
                        	<span style="padding-right: 25px;">
	                        	<a href="#" style="padding-right: 10px;">The Tech</a>
	                        	<a href="#">The People</a>
	                        </span>
                            <a href="/projects/add" class="button border with-icon">Add Project <i class="sl sl-icon-plus"></i></a>
                        </div>
                    </div>
               
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        
        <div id="titlebar" class="gradient" style="margin-bottom: 1px;">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Listings</h2>
                    </div>
                </div>
            </div> -->
        </div> 
        
        <div class="container">
        	<div class="row">
        		<div class="col-md-12" style="margin-bottom: 20px;">
					<div class="main-search-input gray-style margin-top-0 margin-bottom-10">
						<div class="main-search-input-item">
							<input type="text" placeholder="Search CivicTech.Guide ... " value=""/>
						</div>

						<button class="button">Search</button>
					</div>
				</div>
        	</div>

            <div class="row">
            	<div class="col-lg-3 col-md-4">
                    <div class="sidebar">
                        <!-- Widget -->
                        <div class="widget margin-bottom-40">
                            <h3 class="margin-top-0 margin-bottom-30">Categories</h3>
                            @include('partials.categories')
                            <!-- <div class="row with-forms">
                                <div class="col-md-12">
                                    <select data-placeholder="All Categories" class="chosen-select" >
                                        <option>All Categories</option>
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                        <option>Category 4</option>
                                        <option>Category 5</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-8 padding-right-30">
                    <!-- Sorting / Layout Switcher -->
                    <div class="row margin-bottom-25">
                        <div class="col-md-6 col-xs-6">
                            <!-- Layout Switcher -->
                            <div class="layout-switcher">
                                <a href="#" class="grid"><i class="fa fa-th"></i></a>
                                <a href="#" class="list active"><i class="fa fa-align-justify"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Sorting / Layout Switcher / End -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="listing-item-container list-layout">
                                <a href="/listing/single" class="listing-item">
                                    <!-- Image -->
                                    <div class="listing-item-image">
                                        <img src="https://guidedevsite2.wpengine.com/wp-content/uploads/2018/10/image-243-1170x400.png" alt="">
                                        <!-- <span class="tag">Events</span> -->
                                    </div>
                                    <!-- Content -->
                                    <div class="listing-item-content">
                                        <div class="listing-item-inner">
                                            <h3>100 Resilient Cities</h3>
                                            <span>
                                            	We help cities around the world become more resilient to the physical, social, and economic challenges that are a growing part of the 21st century.
                                            </span>
                                            <div class="star-rating">
                                                <div class="rating-counter">
                                                	<ul class="tags">
														<li class="highlighted">cities</li>
														<li class="highlighted">gig economy</li>
													</ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="like-icon"></span>
                                        <div class="listing-item-details">www.100cities.org</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="listing-item-container list-layout">
                                <a href="/listing/single" class="listing-item">
                                    <!-- Image -->
                                    <div class="listing-item-image">
                                        <img src="https://guidedevsite2.wpengine.com/wp-content/uploads/2020/09/logo2-800x400.png" alt="">
                                        <!-- <span class="tag">Events</span> -->
                                    </div>
                                    <!-- Content -->
                                    <div class="listing-item-content">
                                        <div class="listing-item-inner">
                                            <h3>A Beginner’s Guide To Local Government</h3>
                                            <span>
                                            	With our "Beginner's Guide To Local Government" coloring book, workshops, happy hours, and lecture series, we make it as easy as possible for you to get involved.
                                            </span>
                                            <div class="star-rating">
                                                <div class="rating-counter">
                                                	<ul class="tags">
														<li class="highlighted">books</li>
														<li class="highlighted">cities</li>
														<li class="highlighted">local</li>
													</ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="like-icon"></span>
                                        <div class="listing-item-details">www.afunctionaldemocracy.com</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                   
                </div>
            </div>
        </div>

        <div id="footer" class="margin-top-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <h2>CivicTech.Guide</h2>
                        <br><br>
                        <p>
                        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
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