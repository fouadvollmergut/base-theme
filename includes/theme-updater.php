<?php

add_filter( 'site_transient_update_themes', 'update_theme' );

function update_theme ($transient) {
	$stylesheet = get_template();
	$version = wp_get_theme()->get('Version');

	$remote = wp_remote_get(
		'https://github.com/fouadvollmergut/base-theme/releases/latest/download/info.json',
		array(
			'timeout' => 10,
			'headers' => array(
				'Accept' => 'application/json'
			)
		)
	);

	if (
		is_wp_error($remote)
		|| 200 !== wp_remote_retrieve_response_code($remote)
		|| empty(wp_remote_retrieve_body($remote))
	) {
		return $transient;
	}

	$remote = json_decode(wp_remote_retrieve_body($remote));

	if (!$remote) {
		return $transient;
	}
	
	$data = array(
		'theme' => $stylesheet,
		'url' => $remote->details_url,
		'requires' => $remote->requires,
		'requires_php' => $remote->requires_php,
		'new_version' => $remote->version,
		'package' => $remote->download_url,
	);

	if (
		$remote
		&& version_compare($version, $remote->version, '<')
		&& version_compare($remote->requires, get_bloginfo('version'), '<')
		&& version_compare($remote->requires_php, PHP_VERSION, '<')
	) {

		$transient->response[$stylesheet] = $data;

	} else {

		$transient->no_update[$stylesheet] = $data;

	}

	return $transient;

}