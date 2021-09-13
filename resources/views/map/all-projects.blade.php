@extends('layouts.maps')

@section('styles')
    <!-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.1.0/dist/MarkerCluster.css" /> -->
    <style type="text/css">
        a.location {
            color: #1DA1F2;
        }
        a.location:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12" style="height:600px; width: 100%;">
            <div id="worldMap" style="height: 100%; width: 100%;"></div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- <script src="https://unpkg.com/leaflet.markercluster@1.1.0/dist/leaflet.markercluster.js"></script>

    <script type="text/javascript">
        
    </script> -->
    
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript">
        var projects = {!! json_encode($projects->toArray(), JSON_HEX_TAG) !!};


        function initMap() {
            const map = new google.maps.Map(document.getElementById("worldMap"), {
                zoom: 2,
                center: new google.maps.LatLng(0, 0),
                streetViewControl: false,
                mapTypeControl: false,
            });

            const markers = locations.map((location, i) => {
                var marker = new google.maps.Marker({
                    position: location
                });

                var contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h3 id="firstHeading" class="firstHeading"><a class="location" title="Go to listing profile" href="'+location.url+'">'+location.name+'</a></h3>' +
                '<div id="bodyContent">' +
                "<p><i class='fa fa-map-marker'></i> "+location.address+"</p>" +
                "</div>" +
                "</div>";

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                marker.addListener("click", () => {
                    infowindow.open({
                        anchor: marker, map,
                        shouldFocus: false,
                    });
                });

                return marker;
            });

            var markerCluster = new MarkerClusterer(map, markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
                maxZoom: 8,
            });

            
        }

        var locations = [];

        for (var i = 0; i < projects.length; i++) {
            var latitude = Number(projects[i].latitude);
            var longitude = Number(projects[i].longitude);
            var project = projects[i].name;
            var add = projects[i].first_location;
            var slug = '/listing/'+projects[i].slug;

            var entry = { lat: latitude, lng: longitude, name: project, address: add, url: slug }

            locations.push(entry);
        }

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOZ3iFXxO0dN75GKYwNsToH3W6u1kcGR0&callback=initMap&libraries=places"></script>
@endsection