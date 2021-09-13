@extends('layouts.maps')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12" style="height:600px; width: 100%;">
            <div id="worldMap" style="height: 100%; width: 100%;"></div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript">
        var projects = {!! json_encode($projects->toArray(), JSON_HEX_TAG) !!};

        //console.log(projects);
        //console.log(projects[0].latitude);
        //console.log(projects.length);

        function initMap() {
            const map = new google.maps.Map(document.getElementById("worldMap"), {
                zoom: 2,
                center: new google.maps.LatLng(0, 0),
                streetViewControl: false,
                mapTypeControl: false,
            });
            // Create an array of alphabetical characters used to label the markers.
            const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

            const markers = locations.map((location, i) => {
                return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length],
                });
            });

            // Add a marker clusterer to manage the markers.
            /*new MarkerClusterer(map, markers, {
                imagePath: `{{ asset('/images/markers') }}/m`,
            }); */

            var markerCluster = new MarkerClusterer(map, markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            });
        }

        var locations = [];

        for (var i = 0; i < projects.length; i++) {
            var latitude = Number(projects[i].latitude);
            var longitude = Number(projects[i].longitude);
            var name = projects[i].name;

            var entry = { lat: latitude, lng: longitude }

            locations.push(entry);
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZ3iFXxO0dN75GKYwNsToH3W6u1kcGR0&callback=initMap&libraries=places"></script>
@endsection