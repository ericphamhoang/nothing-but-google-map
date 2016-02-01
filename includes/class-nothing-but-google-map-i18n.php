<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       nothingbutweb.com.au
 * @since      1.0.0
 *
 * @package    Nothing_But_Google_Map
 * @subpackage Nothing_But_Google_Map/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nothing_But_Google_Map
 * @subpackage Nothing_But_Google_Map/includes
 * @author     Nothing But Web <nbw@nothingbutweb.com.au>
 */
class Nothing_But_Google_Map_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nothing-but-google-map',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
