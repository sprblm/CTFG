@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 20px;">
            @include('partials.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="sidebar">
                <!-- Categories Widget -->
                <div class="widget margin-bottom-40">
                    <h3 class="margin-top-0 margin-bottom-30">Categories</h3>
                    {{-- @include('partials.categories') --}}
                    @include('cache.categories_cache')
                </div>

                <!-- Tags widget -->
                <div class="widget margin-bottom-40">
                    <h3 class="margin-top-0 margin-bottom-30">Tags</h3>
                    {{-- @include('partials.tags') --}}
                    @include('cache.tags_cache')
                </div>
            </div>
        </div>


        <div class="col-lg-9 col-md-8 padding-right-30">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @include('partials.filters')
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="listings-container list-layout">
                                @include('partials.paginated-projects')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    {{ $projects->withQueryString()->links() }}
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection