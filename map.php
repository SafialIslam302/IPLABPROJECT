<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	  <title>Map</title>
    <link rel="icon" type="image/png" href="img/arogya.png" />
	<style>
       #map {
        height: 540px;
        width: 100%;
    	padding-top: 100px;
       }
    </style>
    <script type="text/javascript" src="js/scri.js"></script>
</head>
<body>
	<div id="map"></div>
    <script src="js.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfw6b-GbfaBHzhyvaPe7afNLUxVyXJAAo&callback=initMap"></script>
</body>
</html>