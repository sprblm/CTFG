<div class="row">
    <div class="col-md-12 margin-bottom-40">
        <h2>
            Showing <span style="color: #747674; font-size: 22px;">{{ @$projects->total() }} </span> Results
        </h2>
    </div>
</div>
@foreach($projects as $project)
    <div class="listing-item">
        <a href="/listing/{{ $project->slug }}" class="listing-img-container">
            @if(@$project->media->first())
                <img src="{{ @$project->media->first()->link }}" loading="lazy" alt="{{ $project->name }}" style="display: block !important;">
            @else
                <img src="{{ asset('images/gray.png') }}" loading="lazy" alt="{{ $project->name }}">
            @endif
        </a>
        
        <div class="listing-content">
            <div class="listing-title">
                <h4>
                    <a href="/listing/{{ $project->slug }}">
                        {!! $project->name !!}
                    </a>
                </h4>

                @if(!empty(@$project->location->first()->name))
                    {{-- <a href="https://maps.google.com/?q={{ $project->latitude }},{{ $project->longitude }}" class="popup-gmaps">
                        <i class="fa fa-map-marker"></i>
                        {{ @$project->location->first()->name }}
                    </a> --}}
                    <i class="fa fa-map-marker"></i>
                    {{ @$project->location->first()->name }}
                @endif
            </div>

            <p style="padding: 0 30px; font-size: 15px; line-height: 22px;">
                {!! $project->introduction !!}
            </p>

            <ul class="listing-details" style="padding: 10px 30px; background-color: #fff;">
                @foreach(@$project->tags->take(3) as $tag)
                    <li><a href="/listing-tag/{{ @$tag->name }}">{{ @$tag->name }}</a></li>
                @endforeach
            </ul>

            <ul class="listing-details" style="padding: 10px 30px;">
                @foreach(@$project->categoriesOrdered->take(3) as $cat)
                    <li><a href="/listing-category/{{ @$cat->slug }}">{{ @$cat->name }}</a></li>
                @endforeach
            </ul>

            @if(!empty($project->website_url))
                <div class="listing-footer">
                    <a href="{{ $project->website_url }}" target="_blank">
                        <i class="fa fa-globe"></i> {{ $project->website_url }}
                    </a>
                </div>
            @endif
        </div>
    </div>
@endforeach