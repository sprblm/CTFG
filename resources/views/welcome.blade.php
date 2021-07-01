@extends('layouts.template')

@section('content')
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
                </div>
            </div>
        </div>


        <div class="col-lg-9 col-md-8 padding-right-30">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="listings-container list-layout">
                        @foreach($projects as $project)
                            <div class="listing-item">
                                <a href="/projects/single/{{ $project->project_name }}" class="listing-img-container" style="text-align: center; padding: 5px 0;">
                                	@php
                                		$media = DB::table('media')->where('listings', '{'.$project->id.'}')->get();
                                	@endphp
                                    <img src="{{ @$media->first()->link }}" alt="{{ $project->project_name }}" style="width: 200px !important; height: 200px !important; border-radius: 50% !important;">
                                </a>
                                
                                <div class="listing-content">
                                    <div class="listing-title">
                                        <h4>
                                            <a href="/projects/single/{{ $project->project_name }}">
                                                {{ $project->project_name }}
                                            </a>
                                        </h4>
                                        <a href="https://maps.google.com/?q={{ $project->latitude }},{{ $project->longitude }}" class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            {{ $project->location }}
                                        </a>

                                        <a href="/projects/single/{{ $project->project_name }}" class="details button border">  Details
                                        </a>
                                    </div>

                                    <p style="padding: 0 30px; font-size: 15px; line-height: 22px;">
                                        {{ $project->_1_liner }}
                                    </p>

                                    <ul class="listing-details" style="padding: 10px 30px;">
                                        <li>Cities</li>
                                        <li>gig economy</li>
                                        <li>elections</li>
                                        <li>job boards</li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="{{ $project->website_url }}">
                                            <i class="fa fa-globe"></i> {{ $project->website_url }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    
                </div>
                {{-- <div class="col-lg-12 col-md-12" style="display: inline-block;">
                	{{ $projects->links() }}
                </div> --}}

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection