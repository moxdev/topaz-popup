function initialize() {
	// MAKE SURE WE ARE SEEING SOME DATA FROM THE PHP ARRAYS THAT ARE PASSED TO JS ARRAYS
	// console.log('Categories: ' + categories);
	//console.log('Locations: ' + locations[10]);
	
	var center = new google.maps.LatLng(38.984997, -77.089988);
	// SET UP A STYLE SET FOR EACH MAP TYPE
	var thStyles = [
		{
			"stylers": [
				{ "hue": "#41414C" },
				{ "saturation": -75 }
	    	]
		}
	];

	// ADD NAMES FOR OUR CUSTOM MAP TYPE CONTROLS
	var thMap = new google.maps.StyledMapType(thStyles, {
		name: 'Topaz House'
	});
	
	// WE'LL NEED THIS IN A BIT
	var markers = [];
	
	directionsDisplay = new google.maps.DirectionsRenderer();
	
	// SET OUR MAP OPTIONS
	var myOptions = {
		zoom:17,
		center: center,
		
		/********** ADD AND REMOVE SOME DEFAULT MAP CONTROLS **********/
		//zoomControl: false,
		mapTypeControl: false,
		scrollwheel: false,
		panControl:false,
		rotateControl:false,
		streetViewControl:false,
		
	// ADD ALL OF THE MAP TYPES THAT WE WANT TO USE IN OUR MAP
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN, google.maps.MapTypeId.SATELLITE, 'thStyles']
		}, mapTypeId: google.maps.MapTypeId.ROADMAP	
	};
	
	// LOAD THE MAP
	var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
	directionsDisplay.setMap(map);
	var oms = new OverlappingMarkerSpiderfier(map);

	// ADD CUSTOM MAP TYPES TO MAP CONTROLS
	map.mapTypes.set('thStyles', thMap);
	map.setMapTypeId('thStyles');

	
	var bounds = new google.maps.LatLngBounds();
	
	// LOOP THROUGH OUR LOCATIONS ARRAY AND ADD EACH MARKER TO THE "MARKERS" ARRAY CREATED ABOVE
	var infowindow = new google.maps.InfoWindow();
	var marker, i;
	/*var shadow = new google.maps.MarkerImage('imgs/map/shadow.png',
		new google.maps.Size(66, 51),
		new google.maps.Point(0,0),
		new google.maps.Point(20, 49)
	);*/

	// ADD OUR STATIC PROPERTY MARKER
    var image = {
		url: '/wp-content/themes/topaz-house/imgs/icon-area-map.png'
	}
    var markerTH = new google.maps.Marker({
    	position: new google.maps.LatLng(38.984997, -77.089988),
		map: map,
		icon:image,
		zIndex: 1000
   });

	// ADD ALL THE MARKERS IN OUR LOCATIONS ARRAY
	for (i=0; i<locations.length; i++) {
		var image = '/wp-content/themes/topaz-house/imgs/icon-' + locations[i][8] + '.png';
		var url = locations[i][6];
		if(url != '') {
			url = '<a target="_blank" href="' + locations[i][6] + '">Visit Website &raquo;</a>';
		} else {
			url = '';
		}
		var details = locations[i][7];
		if(details != '') {
			details= '<br><br><p>' +  locations[i][7] + '</p>';
			var windowClass="no-scroll-fix";
		} else {
			details = '';
			var windowClass = 'scroll-fix';
		}

		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon: image,
			//visible:false,
			//shadow:shadow,
			//title: locations[i][0],
			html: '<div class="' + windowClass + '"><strong class="heading">' + locations[i][0] + '</strong><br />' + locations[i][3] + '<br />' + locations[i][4] + '<br />' + locations[i][5] + '<br />' + url + details + '</div>'
		});
		oms.addMarker(marker);
		markers.push(marker);
		
		// YOU WILL NEED THIS IF YOU DON'T WANT TO USE THE SPIDER MARKERS
		/*google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(this.html);
				infowindow.open(map, marker);
			}
		})(marker, i));*/
		oms.addListener('click', function(marker) {
		  infowindow.setContent(marker.html);
		  //homeInfoWindow.close();
		  infowindow.open(map, marker);
		});
		
		bounds.extend(marker.getPosition());
    }

    map.fitBounds(bounds);

    // CONTROLS
	jQuery('.toggle').click(function() {
		var cat = jQuery(this).parent().attr('id');
		//console.log(cat);
		for (var i=0; i<locations.length; i++) {
			if (locations[i][8] == cat) {
				markers[i].setVisible(true);
				markers[i].setOptions({zIndex:1100});
			} else if (locations[i][8] != cat) {
				markers[i].setVisible(false);
			}
		}
		infowindow.close();
		//jQuery('.community-listing-wrapper').css('display', 'none');
		//jQuery('.community-listing-wrapper.' + cat).css('display', 'block');
		//jQuery('main article').css('display', 'none');
		jQuery('.toggle').addClass('toggled').removeClass('active');
		jQuery(this).removeClass('toggled').addClass('active');	
		
		jQuery('#reset').fadeIn('fast');
		
		return false;
	});
	
	// RESET THE MAP TO THE INITIAL STATE	
	jQuery("#reset").click(function() {
		infowindow.close();
		map.fitBounds(bounds);
		//map.setCenter(center);
		//map.setZoom(17);
		directionsDisplay.setMap(map);
		for (var i=0; i<locations.length; i++) {
			markers[i].setVisible(true);
		}
		jQuery('.toggle').removeClass('active');
		jQuery('.toggle').removeClass('toggled');
		jQuery('.community-listing-wrapper').css('display', 'none');
		jQuery(this).fadeOut('fast');
		return false;
	});
	
}

// BUILD THE NAV THAT WILL TOGGLE THE MARKERS BASED ON THE CATEGORIES ARRAY
var mapNav = jQuery("<nav>", {id: "map-nav"});
jQuery('#map-canvas').after(mapNav);
jQuery('#map-nav').append('<ul>');

for (i=0; i<categories.length; i++) {
	var catList = jQuery("<li>", {id: categories[i][1], html: '<a class="toggle"><span class="icon"></span> <span class="cat-name">' + categories[i][0] + '</span></a>'});
	jQuery('#map-nav ul').append(catList);
}

jQuery(window).load(function() {
	initialize();
});

jQuery(window).on("orientationchange", function(){
	initialize();
	jQuery('.toggle').removeClass('toggled');
	jQuery('.toggle').removeClass('active');
});