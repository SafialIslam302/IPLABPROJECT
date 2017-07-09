function initMap() {

	var broadway = {
		info: '<strong>Plot: 81, Block: E, Bashundhara R/A,</strong><br>\
					 Dhaka 1229, Bangladesh<br>\
					<a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
		lat: 23.8099,
		long: 90.4311
	};

	var belmont = {
		info: '<strong>Mirpur Rd, Dhaka 1216, Bangladesh<br>\
					<a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
		lat: 23.8036,
		long: 90.3772
	};

	var sheridan = {
		info: '<strong>House- 06, Road No 4, Dhaka 1205, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7419,
		long: 90.3831
	};

	var loc1 = {
		info: '<strong>Syed Mahbub Morshed Ave, Dhaka 1207, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7731,
		long: 90.3688
	};

	var loc2 = {
		info: '<strong>Plot 15, Rd No 71, Dhaka 1212, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.8046,
		long: 90.4156
	};

	var loc3 = {
		info: '<strong>190/1, Wireless Railgate Bara Moghbazar, Dhaka 1217, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7499,
		long: 90.4092
	};

	var loc4 = {
		info: '<strong>32 Rabindra Sarani, Sector-7, Uttara, Dhaka-1230, Bangladesh., Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.8677,
		long: 90.3961
	};

	var loc5 = {
		info: '<strong>122,Kazi Nazrul Islam Avenue,Shahbagh,Dhaka 1000, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7393,
		long: 90.3965
	};

	var loc6 = {
		info: '<strong>Plot 3 IUBAT Rd, Dhaka 1230, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.8873,
		long: 90.3911
	};

	var loc7 = {
		info: '<strong>Krishi Khamar Rd, Dhaka 1215, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7585,
		long: 90.3850
	};

	var loc8 = {
		info: '<strong>2/1, Ring Rd, Dhaka 1207, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7738,
		long: 90.3615
	};

	var loc9 = {
		info: '<strong> 53/1, Johnson Rd, Dhaka 1100, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7108,
		long: 90.4123
	};

	var loc10 = {
		info: '<strong>Mitford Rd, Dhaka 1100, Bangladesh<br>\
					<a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
		lat: 23.7111,
		long: 90.4010
	};

	var locations = [
      [broadway.info, broadway.lat, broadway.long, 0],
      [belmont.info, belmont.lat, belmont.long, 1],
      [sheridan.info, sheridan.lat, sheridan.long, 2],
      [loc1.info, loc1.lat, loc1.long, 3],
      [loc2.info, loc2.lat, loc2.long, 4],
      [loc3.info, loc3.lat, loc3.long, 5],
      [loc4.info, loc4.lat, loc4.long, 6],
      [loc5.info, loc5.lat, loc5.long, 7],
      [loc6.info, loc6.lat, loc6.long, 8],
      [loc7.info, loc7.lat, loc7.long, 9],
      [loc8.info, loc8.lat, loc8.long, 10],
      [loc9.info, loc9.lat, loc9.long, 11],
      [loc10.info, loc10.lat, loc10.long, 12],
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		center: new google.maps.LatLng(23.7850, 90.4312),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3], locations[i][4], locations[i][5], locations[i][6]
				, locations[i][7], locations[i][8], locations[i][9], locations[i][10], locations[i][11], locations[i][12]),
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