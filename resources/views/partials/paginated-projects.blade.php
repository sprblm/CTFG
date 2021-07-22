@foreach($projects as $project)
    <div class="listing-item">
        <a href="/listing/{{ $project->slug }}" class="listing-img-container">
        {{-- <a href="/listing/{{ $project->slug }}" class="listing-img-container" style="text-align: center; padding: 5px 0;"> --}}
            <img src="{{ @$project->media->first()->link }}" alt="{{ $project->name }}">
            {{-- <img src="{{ @$project->media->first()->link }}" alt="{{ $project->name }}" style="width: 200px !important; height: 200px !important; border-radius: 50% !important;"> --}}
        </a>
        
        <div class="listing-content">
            <div class="listing-title">
                <h4>
                    <a href="/listing/{{ $project->slug }}">
                        {{ $project->name }}
                    </a>
                </h4>
                <a href="https://maps.google.com/?q={{ $project->latitude }},{{ $project->longitude }}" class="popup-gmaps">
                    <i class="fa fa-map-marker"></i>
                    {{ @$project->location->first()->name }}
                </a>

                {{-- <a href="/listing/{{ $project->slug }}" class="details button border">  
                    Details
                </a> --}}
            </div>

            <p style="padding: 0 30px; font-size: 15px; line-height: 22px;">
                {{ $project->introduction }}
            </p>

            <ul class="listing-details" style="padding: 10px 30px;">
                @foreach(@$project->categoriesOrdered->take(3) as $cat)
                    <li><a href="/listing-category/{{ @$cat->slug }}">{{ @$cat->name }}</a></li>
                @endforeach
            </ul>

            <div class="listing-footer">
                <a href="{{ $project->website_url }}" target="_blank">
                    <i class="fa fa-globe"></i> {{ $project->website_url }}
                </a>
            </div>
        </div>
    </div>
@endforeach