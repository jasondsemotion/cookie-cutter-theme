<?php



	//Google
	wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDTdCi-8E6VIso7JLMgsq3pBtIVmZ-6iYo', false, false );


	function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDTdCi-8E6VIso7JLMgsq3pBtIVmZ-6iYo';

		return $api;

	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');




