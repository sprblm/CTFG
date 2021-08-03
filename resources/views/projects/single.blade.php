@extends('layouts.template')

@section('styles')
    <style type="text/css">
        div iframe {
            width: 100%;
            
        }
    </style>
@endsection

@section('content')
<div class="row sticky-wrapper">
    <div class="col-lg-7 col-md-7 padding-right-30">
        <div id="titlebar" class="listing-titlebar">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <img src="{{ @$project->media->last()->link }}" height="150px" title="Project image"/>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="listing-titlebar-title">
                        <h2>{{ $project->name }}</h2>
                        @if(!empty($project->email))
                            <br>
                            <span>
                                <a href="#">
                                    <i class="fa fa-envelope-o"></i>
                                    {{ @$project->email }}
                                </a>
                            </span>
                        @endif
                        @if(!empty($project->website_url))
                            <br>
                            <span>
                                <a href="{{ @$project->website_url }}" target="_blank" class="listing-address">
                                    <i class="fa fa-globe"></i>
                                    {{ @$project->website_url }}
                                </a>
                            </span>
                        @endif
                        @if($project->location->count() > 0)
                            <br>
                            <span>
                                <a href="#" class="listing-address">
                                    <i class="fa fa-map-marker"></i>
                                    {{ @$project->location->first()->name }}
                                </a>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>

        <div id="listing-overview" class="listing-section">
            @if($project->tags->count() > 0)
                <ul class="apartment-details">
                    @foreach($project->tags as $tag)
                        <li>{{ $tag->name }}</li>
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

            <div class="margin-top-35">
                <table class="table table-responsive">
                    <tbody>
                        @if(!empty(@$project->organization_type))
                            <tr><th>Organization Type: </th><td>{{ $project->organization_type }}</td></tr>
                        @endif
                        @if(!empty(@$project->status))
                            <tr><th>Status: </th><td>{{ $project->status }}</td></tr>
                        @endif
                        @if(!empty(@$project->email))
                            <tr><th>Email: </th><td>{{ $project->email }}</td></tr>
                        @endif
                        @if(!empty(@$project->claimed_status))
                            <tr><th>Claimed Status: </th><td>{{ $project->claimed_status }}</td></tr>
                        @endif
                        @if(!empty(@$project->founded))
                            <tr><th>Founded: </th><td>{{ $project->founded }}</td></tr>
                        @endif
                        @if(!empty(@$project->closed))
                            <tr><th>Closed: </th><td>{{ $project->closed }}</td></tr>
                        @endif
                        @if(!empty(@$project->shutdown_reason))
                            <tr><th>If shutdown, what happened?: </th><td>{{ $project->shutdown_reason }}</td></tr>
                        @endif
                        @if(!empty(@$project->postmortem))
                            <tr><th>Postmortem: </th><td>{{ $project->postmortem }}</td></tr>
                        @endif
                        @if(!empty(@$project->host_organization))
                            <tr><th>Host Organization: </th><td>{{ $project->host_organization }}</td></tr>
                        @endif
                        @if(!empty(@$project->language))
                            <tr>
                                <th>Language(s): </th>
                                <td>{{ $project->language }}
                                    @if(!empty(@$project->secondary_language))
                                        , {{ $project->secondary_language }}
                                    @endif
                                </td>
                            </tr>
                        @endif
                        @if(!empty(@$project->open_source))
                            <tr><th>Open Source: </th><td>{{ $project->open_source }}</td></tr>
                        @endif
                        @if(!empty(@$project->open_source_license))
                            <tr><th>Open Source License: </th><td>{{ $project->open_source_license }}</td></tr>
                        @endif
                        @if(!empty(@$project->features))
                            <tr><th>Features: </th><td>{{ $project->features }}</td></tr>
                        @endif
                        @if(!empty(@$project->project_stage))
                            <tr><th>Project Stage: </th><td>{{ $project->project_stage }}</td></tr>
                        @endif
                        @if(!empty(@$project->used_by))
                            <tr><th>Who's it used by?: </th><td>{{ $project->used_by }}</td></tr>
                        @endif
                        @if(!empty(@$project->pricing_information))
                            <tr><th>Pricing information: </th><td>{{ $project->pricing_information }}</td></tr>
                        @endif
                        @if(!empty(@$project->no_of_employees))
                            <tr><th>Number of employees: </th><td>{{ $project->no_of_employees }}</td></tr>
                        @endif
                        @if(!empty(@$project->last_modified))
                            <tr>
                                <th>Last Modified: </th>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $project->last_modified)->format('M d, Y') }}</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            @if($project->categories->count() > 0)
                <h3 class="listing-desc-headline">Project Categories</h3>
                <ul class="listing-features" style="list-style: inherit; padding-left: 30px;">
                    @foreach($project->categories as $category)
                        <li><a  style="color: #03cafc;" href="/listing-category/{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            @endif

            <div class="clearfix"></div>
        </div>

        <!-- Slider -->
        @if($project->media->count() > 1)
            <div id="listing-gallery" class="listing-section">
                <h3 class="listing-desc-headline margin-top-70">Additional Images</h3>
                <div class="listing-slider-small mfp-gallery-container margin-bottom-0">
                    @foreach($project->media as $fi)
                        <a href="{{ $fi->link }}" data-background-image="{{ $fi->link }}" class="item mfp-gallery" title="Featured image"></a>
                    @endforeach
                </div>
            </div>
        @endif

        @if(@$project->funding->count() > 0)
            <div id="add-review" class="add-review-box">
                <h3 class="listing-desc-headline margin-bottom-10">Funding Details</h3>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Funded By</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($project->funding as $fng)
                            <tr>
                                <td>{{ @$fng->funded_by }}</td>
                                <td>
                                    @if(!empty($fng->link))
                                        <a href="{{ @$fng->link }}" target="_blank" style="color: blue;">
                                            {{ @$fng->funding_date }}
                                        </a>    
                                    @else
                                        {{ @$fng->funding_date }}
                                    @endif
                                </td>
                                <td>$ {{ @$fng->amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        @endif

        @if(@$project->impact->count() > 0 && !empty(@$project->impact->first()->statement))
            <div id="add-review" class="add-review-box" style="margin-top: 10px; background-color: #fcfcfc;">
                <h3 class="listing-desc-headline margin-bottom-10">Impact Stament</h3>
                <p> 
                    {{ @$project->impact->first()->statement }}
                    @if(!empty(@$project->impact->first()->url))
                        (<a href="{{ @$project->impact->first()->url }}" style="color: #03cafc;">Source</a>,
                    @endif
                    @if(!empty(@$project->impact->first()->impact_date))
                        <a href="{{ @$project->impact->first()->impact_date }}">
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $project->impact->first()->impact_date)->format('Y') }}
                        </a>)
                    @else
                        )
                    @endif
                </p>
            </div>
        @endif

        <div class="margin-top-50">
            @if(!empty($project->has_iframe_embed))
                {!! $project->has_iframe_embed !!}
            @endif
        </div>
        <div class="margin-top-50">
            @if(!empty($project->has_twitter_feed))
                {!! $project->has_twitter_feed !!}
            @endif
        </div>

    </div>


    <!-- Sidebar -->
    <div class="col-lg-5 col-md-5 margin-top-50 sticky">
        @if(!empty($project->latitude) && !empty($project->longitude))
            <div id="listing-location" class="listing-section">
                <div id="singleListingMap-container">
                    <div id="singleListingMap" data-latitude="{{ @$project->latitude }}" data-longitude="{{ @$project->longitude }}" data-map-icon="fa fa-map-marker"></div>
                </div>
            </div>
        @endif
       
        <div class="listing-share margin-top-40 margin-bottom-40 no-border">
            @if(@$project->founders->count() > 0)
                <div class="boxed-widget" style="text-align: left;">
                    <h3>Founder(s)</h3>
                    <div class="row with-forms">
                        <ul style="padding-left: 30px;">
                            @foreach($project->founders as $founder)
                                <li><span>{{ @$founder->name }}</span></li>
                                <span>&nbsp;</span>
                            @endforeach
                        </ul>
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

            @if(!empty(@$project->linkedin_url) || !empty(@$project->youtube_channel) || !empty(@$project->contact_page_url) || !empty(@$project->github_url) || !empty(@$project->events_page_url) || !empty(@$project->jobs_page_url) || !empty(@$project->blog_url) || !empty(@$project->host_organization_url) || !empty(@$project->host_organization_url))
                <div class="boxed-widget opening-hours margin-top-35" style="text-align: left;">
                    <h3>Links</h3>
                    <ul>
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
            @endif

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
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZ3iFXxO0dN75GKYwNsToH3W6u1kcGR0&sensor=false&amp;language=ene"></script>
    <script type="text/javascript" src="{{ asset('js/infobox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/maps.js') }}"></script>
@endsection