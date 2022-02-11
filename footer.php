<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Online_Education_Theme
 */

?>

<!-- Footer Start here -->
<footer>
	<div class="footer-top">
		<div class="container">
			<p>© Copyright E-learning Theme 2022.</p>
		</div><!-- container -->
	</div><!-- footer top -->
</footer>
<!-- Footer End here -->

<script type="text/javascript">
	//Home Page map
	var styleArray = [{
		"featureType": "water",
		"elementType": "geometry.fill",
		"stylers": [{
			"color": "#65ac4c"
		}]
	}];

	var mapOptions = {
		center: new google.maps.LatLng(55.864237, -4.251806),
		zoom: 09,
		styles: styleArray,
		scrollwheel: false,
		backgroundColor: 'transparent',
		mapTypeControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("home-map"),
		mapOptions);
	var myLatlng = new google.maps.LatLng(55.864237, -4.251806);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: 'images/map-icon.png'
	});
</script>


<?php wp_footer(); ?>

</body>

</html>