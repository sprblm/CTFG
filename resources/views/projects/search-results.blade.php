@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-12 margin-bottom-40">
            @if(isset($query))
                <h2>Search Results -  <span style="color: #747674; font-size: 22px;">       {{ @$query }} ({{ @$projects->total() }})</span>
                </h2>
            @else
                <h2>Search <span style="color: #747674; font-size: 22px;"> {{ @$allProjects }}</span> projects
                </h2>
            @endif
        </div>

        <div class="col-md-12" style="margin-bottom: 20px;">
            @include('partials.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="sidebar">
                <!-- Widget -->
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
                            <div class="listings-container list-layout">
                                @if($projects->count() > 0)
                                    @include('partials.paginated-projects')
                                @else
                                    <p>Search query yielded no results</p>
                                @endif
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