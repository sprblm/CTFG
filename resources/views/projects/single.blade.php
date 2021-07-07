@extends('layouts.template')

@section('content')
<div class="row sticky-wrapper">
    <div class="col-lg-7 col-md-7 padding-right-30">
        <div id="titlebar" class="listing-titlebar">
            <div class="listing-titlebar-title">
                <h2>{{ $project->name }}</h2>
                <br>
                <span>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                        {{ @$project->email }}
                    </a>
                </span>
                <br>
                <span>
                    <a href="{{ @$project->website_url }}" target="_blank" class="listing-address">
                        <i class="fa fa-globe"></i>
                        {{ @$project->website_url }}
                    </a>
                </span>
                <br>
                <span>
                    <a href="#" class="listing-address">
                        <i class="fa fa-map-marker"></i>
                        {{ @$project->location->first()->name }}
                    </a>
                </span>
            </div>
        </div>

        <!-- Listing Nav
        <div id="listing-nav" class="listing-nav-container">
            <ul class="listing-nav">
                <li><a href="listings-single-page-2.html#listing-overview" class="active">Overview</a></li>
                <li><a href="listings-single-page-2.html#listing-gallery">Gallery</a></li>
                <li><a href="listings-single-page-2.html#listing-location">Location</a></li>
                <li><a href="listings-single-page-2.html#listing-reviews">Reviews</a></li>
                <li><a href="listings-single-page-2.html#add-review">Add Review</a></li>
            </ul>
        </div>
        -->

        <div id="listing-overview" class="listing-section">
            @if($project->tags->count() > 0)
                <ul class="apartment-details">
                    @foreach($project->tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>
            @endif

            @if($project->categories->count() > 0)
                <h3 class="listing-desc-headline">Project Categories</h3>
                <ul class="listing-features checkboxes">
                    @foreach($project->categories as $category)
                        <li><a href="/listing-category/{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            @endif
            
            <div class="margin-top-35">
                <p>
                    {{ $project->introduction }}
                </p>
                <p>
                    {{ $project->description }}
                </p>
            </div>

            <div class="clearfix"></div>
        </div>

        <!-- Slider -->
        <div id="listing-gallery" class="listing-section">
            <h3 class="listing-desc-headline margin-top-70">Featured Images</h3>
            @if($project->media->count() > 0)
            <div class="listing-slider-small mfp-gallery-container margin-bottom-0">
                @foreach($project->media as $fi)
                    <a href="{{ $fi->link }}" data-background-image="{{ $fi->link }}" class="item mfp-gallery" title="Featured image"></a>
                @endforeach
            </div>
            @else
                <div class="listing-slider-small mfp-gallery-container margin-bottom-0">
                    <p>No featured image(s).</p>
                </div>
            @endif
        </div>

        <div id="add-review" class="add-review-box">
            <h3 class="listing-desc-headline margin-bottom-10">Funding Details</h3>
            <p class="comment-notes">Funded By: {{ @$project->funding->first()->funded_by }}</p>

            <div class="sub-ratings-container">
                <div class="add-sub-rating">
                    <div class="sub-rating-title">Date:</div>
                    <div>
                        {{ @$project->funding->first()->funding_date }}
                    </div>
                </div>

                <div class="add-sub-rating">
                    <div class="sub-rating-title">Amount:</div>
                    <div>
                        $ {{ @$project->funding->first()->amount }}
                    </div>
                </div>

                <div class="">
                    <div class="sub-rating-title">Link:</div>
                    <a href="{{ @$project->funding->first()->link }}" target="_blank" style="color: blue;">
                        {{ @$project->funding->first()->link }}
                    </a>
                </div>
                
            </div>
        </div>

        <div id="add-review" class="add-review-box" style="margin-top: 10px; background-color: #fcfcfc;">
            <h3 class="listing-desc-headline margin-bottom-10">Impact</h3>
            <div class="sub-ratings-container">
                <div class="add-sub-rating">
                    <div class="sub-rating-title">Date:</div>
                    <div>
                        {{ @$project->impact->first()->impact_date }}
                    </div>
                </div>

                <div class="add-sub-rating">
                    <div class="sub-rating-title">Url:</div>
                    <a href="{{ @$project->impact->first()->url }}" target="_blank" style="color: blue;">
                        {{ @$project->impact->first()->url }}
                    </a>
                </div>

                <div class="">
                    <div class="sub-rating-title">Statement:</div>
                    <div>
                        {{ @$project->impact->first()->statement }}
                    </div>
                </div>
                
            </div>
        </div>

    </div>


    <!-- Sidebar -->
    <div class="col-lg-5 col-md-5 margin-top-50 sticky">
        <div id="listing-location" class="listing-section">
            <div id="singleListingMap-container">
                <div id="singleListingMap" data-latitude="{{ @$project->latitude }}" data-longitude="{{ @$project->longitude }}" data-map-icon="fa fa-map-marker"></div>
            </div>
        </div>
       
        <div class="listing-share margin-top-40 margin-bottom-40 no-border">
            @if(@$project->founders->count() > 0)
                <div class="boxed-widget opening-hours margin-top-35" style="text-align: left;">
                    <h3>Founder(s) Details</h3>
                    <div class="row with-forms  margin-top-0">
                        <ol>
                            @foreach($project->founders as $founder)
                                <li>
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>Name: <span>{{ @$founder->name }}</span></li>
                                            <li>Email: <span>{{ @$founder->email }}</span></li>
                                        </ul>
                                    </div>
                                </li>
                                <span>&nbsp;</span>
                            @endforeach
                        </ol>
                    </div>
                </div>

            @endif

            <ul class="share-buttons margin-top-40 margin-bottom-0">
                @if(!empty($project->facebook_url))
                    <li>
                        <a class="fb-share" target="_blank" href="{{ $project->facebook_url }}"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                @endif
                @if(!empty($project->twitter_url))
                    <li>
                        <a class="twitter-share" target="_blank" href="{{ $project->twitter_url }}"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                @endif
                @if(!empty($project->instagram_url))
                    <li>
                        <a class="gplus-share" target="_blank" href="{{ $project->instagram_url }}"><i class="fa fa-instagram"></i> Instagram</a>
                    </li>
                @endif
            </ul>

            <div class="boxed-widget opening-hours margin-top-35" style="text-align: left;">
                <h3>Links</h3>
                <ul>
                    @if(!empty(@$project->founded))
                        <li>Founded: <span>{{ @$project->founded }}</span></li>
                    @endif
                    @if(!empty(@$project->language))
                        <li>Language: <span>{{ @$project->language }}</span></li>
                    @endif
                    @if(!empty(@$project->linkedin_url))
                        <li>LinkedIn: <span><a href="{{ @$project->linkedin_url }}" target="_blank">{{ @$project->linkedin_url }}</a></span></li>
                    @endif
                    @if(!empty(@$project->youtube_channel))
                        <li>Youtube: <span><a href="{{ @$project->youtube_channel }}" target="_blank">{{ @$project->youtube_channel }}</a></span></li>
                    @endif
                    @if(!empty(@$project->contact_page_url))
                        <li>Contact page: <span><a href="{{ @$project->contact_page_url }}" target="_blank">{{ @$project->contact_page_url }}</a></span></li>
                    @endif
                    @if(!empty(@$project->github_url))
                        <li>Github: <span><a href="{{ @$project->github_url }}" target="_blank">{{ @$project->github_url }}</a></span></li>
                    @endif
                    @if(!empty(@$project->events_page_url))
                        <li>Events page: <span><a href="{{ @$project->events_page_url }}" target="_blank">{{ @$project->events_page_url }}</a><span></li>
                    @endif
                    @if(!empty(@$project->jobs_page_url))
                        <li>Jobs page: <span><a href="{{ @$project->jobs_page_url }}" target="_blank">{{ @$project->jobs_page_url }}</a></span></li>
                    @endif
                    @if(!empty(@$project->blog_url))
                        <li>Blog: <span><a href="{{ @$project->blog_url }}" target="_blank">{{ @$project->blog_url }}</a></span></li>
                    @endif
                    @if(!empty(@$project->host_organization_url))
                        <li>Host Org: <span><a href="{{ @$project->host_organization_url }}" target="_blank">{{ @$project->host_organization }}</a></span></li>
                    @endif
                    @if(!empty(@$project->host_organization_url))
                        <li>Host Org Url: <span><a href="{{ @$project->host_organization_url }}" target="_blank">{{ @$project->host_organization_url }}</a></span></li>
                    @endif
                </ul>
            </div>

            <div class="margin-top-35">
                <a class="suggest-button" target="_blank" href="https://airtable.com/shrAPHxxye5l9CIpQ">Suggest a change</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZ3iFXxO0dN75GKYwNsToH3W6u1kcGR0&sensor=false&amp;language=ene"></script>
    <script type="text/javascript" src="{{ asset('js/infobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/maps.js') }}"></script>
@endsection