<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              nothingbutweb.com.au
 * @since             1.0.0
 * @package           Nothing_But_Google_Map
 *
 * @wordpress-plugin
 * Plugin Name:       NBW Google Map
 * Plugin URI:        nothingbutweb.com.au
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nothing But Web
 * Author URI:        nothingbutweb.com.au
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nothing-but-google-map
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nothing-but-google-map-activator.php
 */
function activate_nothing_but_google_map() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nothing-but-google-map-activator.php';
	Nothing_But_Google_Map_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nothing-but-google-map-deactivator.php
 */
function deactivate_nothing_but_google_map() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nothing-but-google-map-deactivator.php';
	Nothing_But_Google_Map_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nothing_but_google_map' );
register_deactivation_hook( __FILE__, 'deactivate_nothing_but_google_map' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nothing-but-google-map.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nothing_but_google_map() {

	$plugin = new Nothing_But_Google_Map();
	$plugin->run();

}
run_nothing_but_google_map();
