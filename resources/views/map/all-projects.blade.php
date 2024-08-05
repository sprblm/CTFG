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
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key={{$gMapsApiKey}}&callback=initMap&libraries=places"></script> -->
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "{{$gMapsApiKey}}", v: "weekly"});
    </script>

    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        const projects = {!! json_encode($projects->toArray(), JSON_HEX_TAG) !!};

        async function initMap() {
            // Request needed libraries.
            const { Map, InfoWindow } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary("marker");

            // Map options
            const mapOptions = {
                zoom: 2,
                center: new google.maps.LatLng(0, 0),
                streetViewControl: false,
                mapTypeControl: false,
                mapId: '38983fd8f6738a0f'
            };

            const map = new google.maps.Map(document.getElementById("worldMap"), mapOptions);

            const oms = new OverlappingMarkerSpiderfier(map, {
                markersWontMove: true,
                markersWontHide: true,
                basicFormatEvents: true,
                ignoreMapClick: true,
                keepSpiderfied: true,
            });

            const markers = projects.map((project, i) => {
                const latitude = Number(project.latitude);
                const longitude = Number(project.longitude);
                const name = project.name;
                const headquarters = project.hq_location;
                const url = '/listing/' + project.slug;

                const content = `
                    <div id="content">
                        <div id="siteNotice"></div>
                        <h3 id="firstHeading" class="firstHeading">
                            <a class="location" title="Go to listing profile" href="${url}">${name}</a>
                        </h3>
                        <div id="bodyContent">
                            <p><i class='fa fa-map-marker'></i> ${headquarters}</p>
                        </div>
                    </div>
                `;

                /*const marker = new google.maps.marker.AdvancedMarkerElement({
                    position: { lat: latitude, lng: longitude },
                    content: new PinElement({ glyph: (i + 1).toString(), glyphColor: "white" }).element,
                }); */

                const marker = new google.maps.marker.AdvancedMarkerElement({
                    position: { lat: latitude, lng: longitude },
                    content: null,
                });

                const infoWindow = new google.maps.InfoWindow({ content, disableAutoPan: true });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });

                oms.trackMarker(marker);

                return marker;
            });

            // Add a marker clusterer to manage the markers.
            const markerCluster = new markerClusterer.MarkerClusterer({markers, map});

            /*const clusterStyles = [
                {
                  textColor: 'transparent', // Make the text transparent
                  url: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m1.png', // Use your custom icon URL
                  height: 53,
                  width: 53
                }
            ];

            const markerCluster = new markerClusterer.MarkerClusterer(map, markers, {
                styles: clusterStyles,
                textSize: 0
            }); */
        }

        initMap();



        /*window.initMap = function() {
          var projects = {!! json_encode($projects->toArray(), JSON_HEX_TAG) !!};

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
            var url = '/listing/' + projects[i].slug;

            var entry = {
              coords: { lat: latitude, lng: longitude },
              content: '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h3 id="firstHeading" class="firstHeading"><a class="location" title="Go to listing profile" href="' + url + '">' + project + '</a></h3>' +
                '<div id="bodyContent">' +
                "<p><i class='fa fa-map-marker'></i> " + headquarters + "</p>" +
                "</div>" +
                "</div>"
            }

            markers.push(entry);
          }

          // Loop through markers
          var gmarkers = [];
          for (var i = 0; i < markers.length; i++) {
            gmarkers.push(addMarker(markers[i]));
          }

          //Add Marker function
          function addMarker(props) {
            var marker = new google.maps.Marker({
              position: props.coords,
              map: map
            });

            // Check content
            if (props.content) {
              var infoWindow = new google.maps.InfoWindow({
                content: props.content
              });
              marker.addListener('click', function () {
                infoWindow.open(map, marker);
              });
            }

            oms.trackMarker(marker);

            return marker;
          }

          const markerCluster = new markerClusterer.MarkerClusterer({ markers, map });
        } */
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier/1.0.3/oms.min.js"></script>
@endsection