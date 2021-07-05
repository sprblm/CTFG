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
                        @include('partials.paginated-projects')
                    </div>
                    
                </div>
                <div class="col-lg-12 col-md-12">
                    {{ $projects->links() }}
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection