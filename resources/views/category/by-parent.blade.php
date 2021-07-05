@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-8 padding-right-30">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="listings-container list-layout">
                        <h3 class="margin-top-0 margin-bottom-30">{{ @$title }}</h3>
                        @foreach($cats as $cat)
                            <div class="toggle-wrap">
                                <span class="trigger"><a href="/category/projects/{{ @$cat->name }}">{{ @$cat->name }}<i class="sl sl-icon-plus"></i></a></span>
                                <div class="toggle-container" style="display: none;">
                                    <p>
                                        {{ @$cat->description }}
                                    </p>
                                    <br>
                                    <span>
                                        <a href="/category/projects/{{ @$cat->name }}" class="button border">Associated Projects</a>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection