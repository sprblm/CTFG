@extends('layouts.template')

@section('content')
<div class="row sticky-wrapper">
    <div class="col-lg-7 col-md-7 padding-right-30">
        <div id="titlebar" class="listing-titlebar">
            <div class="listing-titlebar-title">
                <h2>{{ $project->name }}</h2>
                <span>
                    <a href="#" class="listing-address">
                        <i class="fa fa-map-marker"></i>
                        {{ $project->location->first()->name }}
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
            
            <p>
                {{ $project->introduction }}
            </p>
            <p>
                {{ $project->description }}
            </p>

            <div class="clearfix"></div>

            @if($project->categories->count() > 0)
                <h3 class="listing-desc-headline">Project Categories</h3>
                <ul class="listing-features checkboxes">
                    @foreach($project->categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            @endif
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
    </div>


    <!-- Sidebar -->
    <div class="col-lg-5 col-md-5 margin-top-50 sticky">
        <div id="listing-location" class="listing-section">
            <div id="singleListingMap-container">
                <div id="singleListingMap" data-latitude="{{ $project->latitude }}" data-longitude="{{ $project->longitude }}" data-map-icon="im im-icon-Hamburger"></div>
            </div>
        </div>
       
        <!-- Share / Like -->
        <div class="listing-share margin-top-40 margin-bottom-40 no-border">
            <button class="like-button">Suggest a change</button> 
            <span>159 people suggested a change</span>
            
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
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection