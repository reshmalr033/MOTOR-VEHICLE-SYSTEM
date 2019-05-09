<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Maps APIs</title>

	<link href="style.css" rel="stylesheet">
        <script>
            
            function initMap() {

	var broadway = {
		info: '<strong>Chipotle on Broadway</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
		lat: 41.976816,
		long: -87.659916
	};
var broadway1 = {
		info: '<strong>Chipotle on Broadway</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
		lat: 41.975816,
		long: -87.659916
	};

var broadway2 = {
		info: '<strong>Chipotle on Broadway</strong><br>\
					5224 N Broadway St<br> Chicago, IL 60640<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
		lat: 41.976816,
		long: -87.669916
	};

	
	var locations = [
      [broadway.info, broadway.lat, broadway.long, 0],
      [broadway1.info, broadway1.lat, broadway1.long, 0],
      [broadway2.info, broadway2.lat, broadway2.long, 0],
      
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(41.976816, -87.659916),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
            </script>
            <style>
        html,
body {
	height: 100%;
	margin: 0;
	padding: 0;
	line-height: 1.5;
}
#map {
	height: 100%;
}

a {
	text-decoration: none;
}
            </style>
</head>

<body>

	<div id="map"></div>

	<script src="script.js"></script>
	<script async defer 
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&&callback=initMap"></script>
</body>

</html>