<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.test.lt
 * @since             1.0.0
 * @package           Fertilizer
 *
 * @wordpress-plugin
 * Plugin Name:       fertilizer
 * Plugin URI:        fertilizer
 * Description:       This is a plugin for our fertilizers.
 * Version:           1.0.0
 * Author:            Marijus
 * Author URI:        www.test.lt
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fertilizer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fertilizer-activator.php
 */
function activate_fertilizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fertilizer-activator.php';
	Fertilizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fertilizer-deactivator.php
 */
function deactivate_fertilizer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fertilizer-deactivator.php';
	Fertilizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fertilizer' );
register_deactivation_hook( __FILE__, 'deactivate_fertilizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fertilizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fertilizer() {

	$plugin = new Fertilizer();
	$plugin->run();

}
run_fertilizer();
