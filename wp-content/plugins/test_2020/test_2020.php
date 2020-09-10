<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://localhost
 * @since             1.0.0
 * @package           Test_2020
 *
 * @wordpress-plugin
 * Plugin Name:       Test_2020
 * Plugin URI:        http://localhost
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bruno
 * Author URI:        http://localhost
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       test_2020
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TEST_2020_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-test_2020-activator.php
 */

 
function activate_test_2020() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test_2020-activator.php';
	Test_2020_Activator::activate();
	global $wpdb;
	$table_name = $wpdb->prefix . "test_plugin_settings";
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	  Win_Word text NOT NULL,
	  Lose_Word text NOT NULL,
	  Tie_Word text NOT NULL,
	  Minimum int NOT NULL,
	  PRIMARY KEY  (id)
	) $charset_collate;";
	
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-test_2020-deactivator.php
 */
function deactivate_test_2020() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-test_2020-deactivator.php';
	Test_2020_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_test_2020' );
register_deactivation_hook( __FILE__, 'deactivate_test_2020' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-test_2020.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function wporg_options() {
	
}

function test_plugin_setup_menu(){

	add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
	
	if($_POST['my_form']) {
		include "includes/gif.php";
	}else {
		include "includes/widget.php";
	}

	
}


function run_test_2020() {

	$plugin = new Test_2020();
	$plugin->run();
	// test_plugin_setup_menu();
	add_action('admin_menu', 'test_plugin_setup_menu');
	if($_POST['my_form']) {
		get_gif();
	}
	

	// settings_fields( 'extra-post-info-settings' ); 
	// $plugin->test_plugin_setup_menu();
	// function wporg_settings_init() {
    // 	// Register a new setting for "wporg" page.
	// 	register_setting( 'settings', 'wporg_options' );
	// }


}
run_test_2020();
