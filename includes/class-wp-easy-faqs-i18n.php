<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 * @author     WEN Solutions <wensolution@gmail.com>
 */
class Wp_Easy_Faqs_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-easy-faqs',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
