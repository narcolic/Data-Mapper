var map, trafficLayer, directionsDisplay;
var crimeMarkers = [];
var fireMarkers = [];
var crimeMarkerCluster;
var fireMarkerCluster;

var createMarkers = function () {
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
    var crimeClusterStyle = [
        {
            textColor: 'white',
            url: 'http://i.imgur.com/zpeXWBT.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/Dp3uOjo.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/7s9LMVZ.png',
            height: 40,
            width: 40
        }
    ];
    var mcOptions = {
        gridSize: 50,
        styles: crimeClusterStyle,
        ignoreHiddenMarkers: true,
        maxZoom: 15
    };
    crimeMarkerCluster = new MarkerClusterer(map, crimeMarkers, mcOptions);


    $.each(fireMarkersCoordinates, function (key, value) {
        var fireicon = 'http://i.imgur.com/gFcRPgn.png';
        var pos2 = new google.maps.LatLng(value.long, value.lat);
        var marker2 = new google.maps.Marker({
            position: pos2,            map: map,
            icon: fireicon
        });
        fireMarkers.push(marker2);
    });
    var fireClusterStyle = [
        {
            textColor: 'white',
            url: 'http://i.imgur.com/Lsk0ukb.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/lMtC1v2.png',
            height: 40,
            width: 40
        },
        {
            textColor: 'white',
            url: 'http://i.imgur.com/MaudGLR.png',
            height: 40,
            width: 40
        }
    ];
    var mfOptions = {
        gridSize: 50,
        styles: fireClusterStyle,
        ignoreHiddenMarkers: true,
        maxZoom: 15
    };
    fireMarkerCluster = new MarkerClusterer(map, fireMarkers, mfOptions);
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