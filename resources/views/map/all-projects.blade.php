@extends('layouts.maps')

@section('styles')
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
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

    <script type="text/javascript">
        var projects = {!! json_encode($projects->toArray(), JSON_HEX_TAG) !!};

        function initMap() {
            // map options
            var options = {
                zoom: 2,
                center: new google.maps.LatLng(0, 0),
                streetViewControl: false,
                mapTypeControl: false,
            }

            var map = new google.maps.Map(document.getElementById('worldMap'), options);

            var oms = new OverlappingMarkerSpiderfier(map, {
                markersWontMove: true,
                markersWontHide: true,
                basicFormatEvents: true,
                ignoreMapClick: true,
                keepSpiderfied: true
            });

            var markers = [];

            for (var i = 0; i < projects.length; i++) {
                var latitude = Number(projects[i].latitude);
                var longitude = Number(projects[i].longitude);
                var project = projects[i].name;
                var headquarters = projects[i].hq_location;
                var url = '/listing/'+projects[i].slug;

                var entry = {
                    coords: {lat: latitude, lng: longitude},
                    content: '<div id="content">' +
                        '<div id="siteNotice">' +
                        "</div>" +
                        '<h3 id="firstHeading" class="firstHeading"><a class="location" title="Go to listing profile" href="'+url+'">'+project+'</a></h3>' +
                        '<div id="bodyContent">' +
                        "<p><i class='fa fa-map-marker'></i> "+headquarters+"</p>" +
                        "</div>" +
                        "</div>"
                }

                markers.push(entry);
            }

            // Loop through markers
            var gmarkers = [];
            for(var i = 0; i < markers.length; i++){
                gmarkers.push(addMarker(markers[i]));
            }

            //Add MArker function
            function addMarker(props){
                var marker = new google.maps.Marker({
                    position:props.coords,
                    map:map
                });

                // Check content
                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });
                    marker.addListener('click',function(){
                        infoWindow.open(map,marker);
                    });
                }
                
                oms.trackMarker(marker);
                
                return marker;
            }
          
            var markerCluster = new MarkerClusterer(map, gmarkers, {
                maxZoom: 19,
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            });
        }
          
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{$gMapsApiKey}}&callback=initMap&libraries=places"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier/1.0.3/oms.min.js"></script>
@endsection