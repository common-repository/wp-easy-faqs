<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 * @author     WEN Solutions <wensolution@gmail.com>
 */
class Wp_Easy_Faqs {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wp_Easy_Faqs_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'wp-easy-faqs';

		$this->version = '1.0.2';

		$this->load_dependencies();

		$this->set_locale();

		$this->define_admin_hooks();

		$this->define_public_hooks();

		$this->init_shortcodes();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wp_Easy_Faqs_Loader. Orchestrates the hooks of the plugin.
	 * - Wp_Easy_Faqs_i18n. Defines internationalization functionality.
	 * - Wp_Easy_Faqs_Admin. Defines all hooks for the admin area.
	 * - Wp_Easy_Faqs_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-easy-faqs-loader.php';

		/**
		 * The class responsible for defining callback functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-easy-faqs-callback.php';

		/**
		 * The class responsible for adding shortcode funttionality to the wp-easy-faqs plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-easy-faqs-shortcode.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-easy-faqs-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wp-easy-faqs-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wp-easy-faqs-public.php';

		$this->loader = new Wp_Easy_Faqs_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wp_Easy_Faqs_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Wp_Easy_Faqs_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}


	/**
	 * Init shortcodes.
	 *
	 * @since    1.0.0
	 */
	public function init_shortcodes() {

		$plugin_shortcode = new Wp_Easy_Faqs_Shortcode();
		$plugin_shortcode->init_shortcode();

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Wp_Easy_Faqs_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$this->loader->add_action( 'init', $plugin_admin, 'register_wp_faq_init', 1 );

		$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'wp_easy_faq_meta_boxes' );

		$this->loader->add_action( 'save_post', $plugin_admin, 'save_wp_easy_faq_data' );

		// removing sortable content meta box.
		$this->loader->add_action( 'admin_footer', $plugin_admin, 'wp_easy_faqs_remove_sortable' );

		// Add Admin column.
		$this->loader->add_filter( 'manage_' . WS_WP_EASY_FAQ_POST_TYPE . '_posts_columns', $plugin_admin, 'easy_faq_shortcode_column_head' );

		$this->loader->add_action( 'manage_' . WS_WP_EASY_FAQ_POST_TYPE . '_posts_custom_column', $plugin_admin, 'easy_faq_shortcode_content', 10, 2 );

		// Remove View from FAQ Columns.
		$this->loader->add_filter( 'post_row_actions', $plugin_admin, 'easy_faq_remove_row_actions' );

		// Custom Post messages FAQs.
		$this->loader->add_filter( 'post_updated_messages', $plugin_admin, 'wp_easy_faq_updated_messages' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Wp_Easy_Faqs_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {

		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {

		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Wp_Easy_Faqs_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {

		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {

		return $this->version;
	}

}
