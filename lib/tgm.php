<?php
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'heritage_palli_register_required_plugins' );

function heritage_palli_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => 'Tiny Slider',
			'slug'               => 'tiny-slider',
			'source'             => get_template_directory() . '/plugins/tiny-slider.zip',
			'required'           => true,
		),
		array(
			'name'               => 'Meta Fields',
			'slug'               => 'meta-fields',
			'source'             => get_template_directory() . '/plugins/meta-fields.zip',
			'required'           => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'heritage-palli',        // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
