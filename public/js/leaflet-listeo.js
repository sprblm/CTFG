$(document).ready(function(){if(document.getElementById("map")!==null){if($('#map').attr('data-map-scroll')=='true'||$(window).width()<992){var scrollEnabled=false;}else{var scrollEnabled=true;}
var mapOptions={gestureHandling:scrollEnabled,}
window.map=L.map('map',mapOptions);$('#scrollEnabling').hide();function locationData(locationURL,locationImg,locationTitle,locationAddress,locationRating,locationRatingCounter){return(''+
'<a href="'+locationURL+'" class="leaflet-listing-img-container">'+
'<div class="infoBox-close"><i class="fa fa-times"></i></div>'+
'<img src="'+locationImg+'" alt="">'+
'<div class="leaflet-listing-item-content">'+
'<h3>'+locationTitle+'</h3>'+
'<span>'+locationAddress+'</span>'+
'</div>'+
'</a>'+
'<div class="leaflet-listing-content">'+
'<div class="leaflet-listing-title">'+
'<div class="'+infoBox_ratingType+'" data-rating="'+locationRating+'"><div class="rating-counter">('+locationRatingCounter+' reviews)</div></div>'+
'</div>'+
'</div>')}
var infoBox_ratingType='star-rating';map.on('popupopen',function(){if(infoBox_ratingType='numerical-rating'){numericalRating('.leaflet-popup .'+infoBox_ratingType+'');}
if(infoBox_ratingType='star-rating'){starRating('.leaflet-popup .'+infoBox_ratingType+'');}});var locations=[[locationData('listings-single-page.html','images/listing-item-01.jpg',"Tom's Restaurant",'964 School Street, New York','3.5','12'),40.94401669296697,-74.16938781738281,1,'<i class="im im-icon-Chef-Hat"></i>'],[locationData('listings-single-page.html','images/listing-item-02.jpg','Sticky Band','Bishop Avenue, New York','5.0','23'),40.77055783505125,-74.26002502441406,2,'<i class="im im-icon-Electric-Guitar"></i>'],[locationData('listings-single-page.html','images/listing-item-03.jpg','Hotel Govendor','778 Country Street, New York','2.0','17'),40.7427837,-73.11445617675781,3,'<i class="im im-icon-Home-2"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),40.70437865245596,-73.98674011230469,4,'<i class="im im-icon-Hamburger"></i>'],[locationData('listings-single-page.html','images/listing-item-05.jpg','Airport','1512 Duncan Avenue, New York','3.5','46'),40.641311,-73.778139,5,'<i class="im im-icon-Plane"></i>'],[locationData('listings-single-page.html','images/listing-item-06.jpg','Think Coffee','215 Terry Lane, New York','4.5','15'),41.080938,-73.535957,6,'<i class="im im-icon-Coffee"></i>'],[locationData('listings-single-page.html','images/listing-item-04.jpg','Burger House','2726 Shinn Street, New York','5.0','31'),41.079386,-73.519478,7,'<i class="im im-icon-Hamburger"></i>'],];L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}@2x.png?access_token={accessToken}',{attribution:" &copy;  <a href='https://www.mapbox.com/about/maps/'>Mapbox</a> &copy;  <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",maxZoom:18,id:'mapbox.streets',accessToken:'pk.eyJ1IjoidmFzdGVyYWQiLCJhIjoiY2p5cjd0NTc1MDdwaDNtbnVoOGwzNmo4aSJ9.BnYb645YABOY2G4yWAFRVw'}).addTo(map);markers=L.markerClusterGroup({spiderfyOnMaxZoom:true,showCoverageOnHover:false,});for(var i=0;i<locations.length;i++){var listeoIcon=L.divIcon({iconAnchor:[20,51],popupAnchor:[0,-51],className:'listeo-marker-icon',html:'<div class="marker-container">'+
'<div class="marker-card">'+
'<div class="front face">'+locations[i][4]+'</div>'+
'<div class="back face">'+locations[i][4]+'</div>'+
'<div class="marker-arrow"></div>'+
'</div>'+
'</div>'});var popupOptions={'maxWidth':'270','className':'leaflet-infoBox'}
var markerArray=[];marker=new L.marker([locations[i][1],locations[i][2]],{icon:listeoIcon,}).bindPopup(locations[i][0],popupOptions);marker.on('click',function(e){});map.on('popupopen',function(e){L.DomUtil.addClass(e.popup._source._icon,'clicked');}).on('popupclose',function(e){if(e.popup){L.DomUtil.removeClass(e.popup._source._icon,'clicked');}});markers.addLayer(marker);}
map.addLayer(markers);markerArray.push(markers);if(markerArray.length>0){map.fitBounds(L.featureGroup(markerArray).getBounds().pad(0.2));}
map.removeControl(map.zoomControl);var zoomOptions={zoomInText:'<i class="fa fa-plus" aria-hidden="true"></i>',zoomOutText:'<i class="fa fa-minus" aria-hidden="true"></i>',};var zoom=L.control.zoom(zoomOptions);zoom.addTo(map);}
function singleListingMap(){var lng=parseFloat($('#singleListingMap').data('longitude'));var lat=parseFloat($('#singleListingMap').data('latitude'));var singleMapIco="<i class='"+$('#singleListingMap').data('map-icon')+"'></i>";var listeoIcon=L.divIcon({iconAnchor:[20,51],popupAnchor:[0,-51],className:'listeo-marker-icon',html:'<div class="marker-container no-marker-icon ">'+
'<div class="marker-card">'+
'<div class="front face">'+singleMapIco+'</div>'+
'<div class="back face">'+singleMapIco+'</div>'+
'<div class="marker-arrow"></div>'+
'</div>'+
'</div>'});var mapOptions={center:[lat,lng],zoom:13,zoomControl:false,gestureHandling:true}
var map_single=L.map('singleListingMap',mapOptions);var zoomOptions={zoomInText:'<i class="fa fa-plus" aria-hidden="true"></i>',zoomOutText:'<i class="fa fa-minus" aria-hidden="true"></i>',};var zoom=L.control.zoom(zoomOptions);zoom.addTo(map_single);map_single.scrollWheelZoom.disable();marker=new L.marker([lat,lng],{icon:listeoIcon,}).addTo(map_single);L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}@2x.png?access_token={accessToken}',{attribution:" &copy;  <a href='https://www.mapbox.com/about/maps/'>Mapbox</a> &copy;  <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",maxZoom:18,id:'mapbox.streets',accessToken:'pk.eyJ1IjoidmFzdGVyYWQiLCJhIjoiY2p5cjd0NTc1MDdwaDNtbnVoOGwzNmo4aSJ9.BnYb645YABOY2G4yWAFRVw'}).addTo(map_single);$('a#streetView').attr({href:'https://www.google.com/maps/search/?api=1&query='+lat+','+lng+'',target:'_blank'});}
if(document.getElementById("singleListingMap")!==null){singleListingMap();}});