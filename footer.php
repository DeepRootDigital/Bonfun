<!-- DAN MARKUP! -->
		<div class="footer">
			<div class="footer-ribbon"></div>
			<div class="footer-container">
				<!-- STORE LOCATOR -->
				<div class="store-locator">
					<h1 class="title">store <span>locator</span></h1>
					<img class="title-line" src="<?php echo get_template_directory_uri(); ?>/images/store-locator-title-line.png" />
					<div id="mini-google-map"></div>
					<a href="http://clients.businessonmarketst.com/bonfun/?page_id=59"><img class="find-it" src="<?php echo get_template_directory_uri(); ?>/images/find-it.png" alt="" /></a>
					<img class="store-locator-side-divider" src="<?php echo get_template_directory_uri(); ?>/images/store-locator-side-divider.png" alt="" />
				</div>
				<!-- SPECIAL EVENTS -->
				<div class="special-events">
					<h1 class="title">special <span>events</span></h1>
					<img class="title-line" src="<?php echo get_template_directory_uri(); ?>/images/store-locator-title-line.png" />
					<div class="event-schedule">
<?php if ( dynamic_sidebar('footer_events') ) : else : endif; ?>
</div>
<a href="http://clients.businessonmarketst.com/bonfun/?page_id=28"><img class="events-button" src="<?php echo get_template_directory_uri(); ?>/images/events-button.png" alt="" /></a>
					<img class="special-events-side-divider" src="<?php echo get_template_directory_uri(); ?>/images/store-locator-side-divider.png" alt="" />

				</div>
				<!-- CONTACT BON FUN -->
				<div class="contact-bon-fun">
					<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="" />
					<a href="mailto:sales@bonfunspirits.com"><img class="sales-media" src="<?php echo get_template_directory_uri(); ?>/images/sales-media.png" alt="" /></a>
					<div class="contact-left">
						<p><a href="mailto:sales@bonfunspirits.com">sales</a></p>
						<p><a href="mailto:media@bonfunspirits.com">media</a></p>
					</div>
					<div class="contact-right">
						<a href="tel:+8005648970"><p>800 564 8970</p></a>
						<img class="footer-phone" src="<?php echo get_template_directory_uri(); ?>/images/footer-phone.png" alt="" >
					</div>
					<div class="fb-facepile" data-href="http://facebook.com/doyoubonfun" data-action="Comma separated list of action of action types" data-width="250" data-max-rows="2"></div>
				</div>
				<!-- FOOTER NAVIGATION -->
				<div class="footer-nav">
					<?php wp_nav_menu(array('theme_location' => 'Footer Nav',)); ?>
				</div>
				<img class="footer-bottom-section-divider" src="<?php echo get_template_directory_uri(); ?>/images/footer-bottom-section-divider.png" alt="" />
				<div class="bottom-icons">
					<ul>
						<a href="http://instagram.com/doyoubonfun" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram"></a>
				<a href="https://www.facebook.com/doyoubonfun" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook"></a>
				<a href="https://twitter.com/doyoubonfun" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter"></a>
				<a href="http://www.linkedin.com/company/2640885?trk=tyah&trkInfo=tas%3Abonfun%20spiri" target="_blank""><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin"></a>
<a href="https://plus.google.com/105161029642301998136/posts" target="_blank""><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.png" alt="googleplus"></a>
					</ul>
				</div>
			</div>

			<!-- USED FOR BOTTOM FULL WIDTH SECTION -->
			<div class="footer-bottom-section">
				<div class="footer-mobile-bonfun"></div>
			</div>
		</div>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
// Function to create the map //
function mapinitialize() {

  // Create an array of styles.
  var styles = [
    {
      stylers: [
      // This makes the map black and white //
        { 
Saturation: -100
 }
      ]
    }
  ];



  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 17,
    mapTypeControl: false,
streetViewControl: false,
// Put the coordinates that you want the map to center around //
    center: new google.maps.LatLng(40.424703,-74.571322),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('google-map'),
    mapOptions);

// This will create the tab that shows up when the pin is clicked on //
var contentString = '##################';

// Attachs the tab //
var infowindow = new google.maps.InfoWindow({
content: contentString
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

// Sets the pin location on the map and chooses the picture that will be used //
var image = 'http://clients.businessonmarketst.com/bonfun/wp-content/themes/Bonfun/images/map-pin.png';
// This should be the coordinates where you want the pin to be put //
  var myLatLng = new google.maps.LatLng(40.424703,-74.571322);
  var pinmarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });

// Associates the text tab with the marker you created //
google.maps.event.addListener(pinmarker,'click',function(){
infowindow.open(map,pinmarker);
});

// Puts the marker on the map //
  pinmarker.setMap(map);
              
}

// Puts listener so that the map will not try to load unless it need to //
google.maps.event.addDomListener(window, "load", mapinitialize);

</script>
<script type="text/javascript">
// Function to create the map //
var initialLocation;
var newjersey = new google.maps.LatLng(40.424703, -74.571322);
var browserSupportFlag =  new Boolean();


function mapinitializer() {

  // Create an array of styles.
  var styles = [
    {
      stylers: [
      // This makes the map black and white //
        { 
Saturation: -100
 }
      ]
    }
  ];





  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 14,
    mapTypeControl: false,
streetViewControl: false,
// Put the coordinates that you want the map to center around //
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('mini-google-map'),
    mapOptions);

if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map.setCenter(initialLocation);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  }
else {
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }

function handleNoGeolocation(errorFlag) {
    if (errorFlag == true) {
      initialLocation = newjersey;
    } else {
      initialLocation = newjersey;
    }
    map.setCenter(initialLocation);
  }

// This will create the tab that shows up when the pin is clicked on //
var contentString = '##################';

// Attachs the tab //
var infowindow = new google.maps.InfoWindow({
content: contentString
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

// Sets the pin location on the map and chooses the picture that will be used //
var image = 'http://clients.businessonmarketst.com/bonfun/wp-content/themes/Bonfun/images/map-pin.png';
// This should be the coordinates where you want the pin to be put //
  var myLatLng = new google.maps.LatLng(40.424703,-74.571322);
  var pinmarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });

// Associates the text tab with the marker you created //
google.maps.event.addListener(pinmarker,'click',function(){
infowindow.open(map,pinmarker);
});

// Puts the marker on the map //
  pinmarker.setMap(map);
              
}

// Puts listener so that the map will not try to load unless it need to //
google.maps.event.addDomListener(window, "load", mapinitializer);

</script>
		<?php wp_footer(); ?>
	</body>
	</html>