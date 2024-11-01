<?php
/**
 * Plugin Main File.
 *
 * @link              http://wensolutions.com/
 * @since             1.0.0
 * @package           Wp_Easy_Faqs
 *
 * @wordpress-plugin
 * Plugin Name:       WP Easy FAQs
 * Plugin URI:        http://wensolutions.com/plugins/wp-easy-faqs
 * Description:       Creating FAQs for your site has never been this easy!
 * Version:           1.0.5
 * Requires at least: 3.0.1
 * Requires PHP: 5.6
 * Tested up to: 6.0
 * Author:            WEN Solutions
 * Author URI:        http://wensolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-easy-faqs
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define.
define( 'WS_WP_EASY_FAQ_POST_TYPE', 'wp_faq' );
define( 'WS_WP_EASY_FAQ_DIR_BASE', __FILE__ );
define( 'WS_WP_EASY_FAQ_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'WS_WP_EASY_FAQ_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-easy-faqs-activator.php
 */
function activate_wp_easy_faqs() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-faqs-activator.php';
	Wp_Easy_Faqs_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-easy-faqs-deactivator.php
 */
function deactivate_wp_easy_faqs() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-faqs-deactivator.php';
	Wp_Easy_Faqs_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_easy_faqs' );
register_deactivation_hook( __FILE__, 'deactivate_wp_easy_faqs' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-easy-faqs.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_easy_faqs() {

	$plugin = new Wp_Easy_Faqs();
	$plugin->run();

}
run_wp_easy_faqs();
