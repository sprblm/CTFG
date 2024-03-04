@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-12 margin-bottom-40">
            <h2>
                Tag: &nbsp;
                @if(!empty($activeParentTag->name))
                    <span style="color: #747674; font-size: 22px;">
                        <a href="/listing-tag/{{ $activeParentTag->slug }}">
                            {{ $activeParentTag->name }}
                        </a> >
                    </span>
                @endif
                @if(!empty($tag))
                    <span style="color: #747674; font-size: 22px;">
                        {{ $tag->name }}
                    </span>
                @endif
                <span style="color: #747674; font-size: 22px;">
                    - ({{ @$projects->total() }})
                </span>
            </h2>
        </div>

        <div class="col-md-12" style="margin-bottom: 20px;">
            @include('partials.extended-search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="sidebar">
                <!-- Widget -->
                <div class="widget margin-bottom-40">
                    <h3 class="margin-top-0 margin-bottom-30">Categories</h3>
                    @include('cache.categories_cache')
                </div>

                <!-- Tags widget -->
                <div class="widget margin-bottom-40">
                    <h3 class="margin-top-0 margin-bottom-30">Tags</h3>
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