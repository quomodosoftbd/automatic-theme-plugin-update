<?php
/**/
add_filter('pre_set_site_transient_update_themes', 'check_for_update');
function check_for_update($checked_data) {
	$raw_response = wp_remote_post($api_url, $send_for_check);
	if (!is_wp_error($raw_response) && ($raw_response['response']['code'] == 200))
	// Feed the update data into WP updater
	return $checked_data;
if (is_admin())