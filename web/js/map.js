var map, trafficLayer, directionsDisplay;
var crimeMarkers = [];
var fireMarkers = [];
var crimeMarkerCluster;
var fireMarkerCluster;

var createMarkers = function () {
    //markers


    $.each(crimeMarkersCoordinates, function (key, value) {
        var crimeicon = 'http://i.imgur.com/0ldv7Q8.png';
        var pos = new google.maps.LatLng(value.long, value.lat);
        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            icon: crimeicon
        });
        crimeMarkers.push(marker);
    });
    var clusterStyles = [
        {
            textColor: 'white',
            url: 'http://i.imgur.com/0ldv7Q8.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/0ldv7Q8.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/0ldv7Q8.png',
            height: 40,
            width: 40
        }
    ];
    var mcOptions = {
        gridSize: 50,
        styles: clusterStyles,
        maxZoom: 15
    };
    crimeMarkerCluster = new MarkerClusterer(map, crimeMarkers, {
        ignoreHiddenMarkers: true,
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    });


    $.each(fireMarkersCoordinates, function (key, value) {
        var fireicon = 'http://i.imgur.com/gFcRPgn.png';
        var pos2 = new google.maps.LatLng(value.long, value.lat);
        var marker2 = new google.maps.Marker({
            position: pos2,
            map: map,
            icon: fireicon
        });
        fireMarkers.push(marker2);
    });
    fireMarkerCluster = new MarkerClusterer(map, fireMarkers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    //end markers
};

var initMap = function () {
    console.log(crimeMarkersCoordinates, fireMarkersCoordinates);

    directionsDisplay = new google.maps.DirectionsRenderer();
    trafficLayer = new google.maps.TrafficLayer();
    var aston = {lat: 52.487232, lng: -1.8896852};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: aston
    });
    map.setOptions({minZoom: 5, maxZoom: 30});
    directionsDisplay.setMap(map);
    createMarkers();

    categoryToggle($('input[name="fancy-checkbox-crime"]'), crimeMarkers, crimeMarkerCluster);
    categoryToggle($('input[name="fancy-checkbox-fire"]'), fireMarkers, fireMarkerCluster);

};