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
@endsection