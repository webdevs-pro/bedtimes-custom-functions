<?php
/**
 * Plugin Name: TheBedTimes Custom Functions
 * Plugin URI: https://github.com/webdevs-pro/bedtimes-custom-functions
 * Version: 1.0.3
 * Description: A place for custom functions for thebedtimes.co website
 * Author: Alex Ishchenko
 * Author URI: https://website.cv.ua
 */

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

final class TBT_Plugin {

	public function __construct() {
		$this->define_constants();
		$this->include_files();
		$this->init_plugin_update_checker();
	}

	function define_constants() {
		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once ( ABSPATH . 'wp-admin/includes/plugin.php' );
		}
		if ( ! function_exists( 'get_home_path' ) ) {
			require_once ( ABSPATH . 'wp-admin/includes/file.php' );
		}
		define( 'TBT_PLUGIN_VERSION', get_plugin_data( __FILE__ )['Version'] );
		// define( 'TBT_HOME_PATH', get_home_path() );
		define( 'TBT_HOME_PATH', ABSPATH );
		define( 'TBT_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
		define( 'TBT_PLUGIN_DIR', dirname( __FILE__ ) );
		define( 'TBT_PLUGIN_FILE', __FILE__ );
		define( 'TBT_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
	}

	function include_files() {
		require_once ( TBT_PLUGIN_DIR . '/inc/vendor/autoload.php' );
		require_once ( TBT_PLUGIN_DIR . '/inc/plugin.php' );
	}

	function init_plugin_update_checker() {
		$UpdateChecker = PucFactory::buildUpdateChecker(
			'https://github.com/webdevs-pro/bedtimes-custom-functions',
			__FILE__,
			'bedtimes-custom-functions'
		);
		
		//Set the branch that contains the stable release.
		$UpdateChecker->setBranch( 'main' );
	}

}

new TBT_Plugin();