<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin
 * @author     WEN Solutions <wensolution@gmail.com>
 */
class Wp_Easy_Faqs_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->callback = new Wp_Easy_Faq_Callback();

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Easy_Faqs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Easy_Faqs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$screen = get_current_screen();
		if ( WS_WP_EASY_FAQ_POST_TYPE === $screen->id ) :
			// WP Color-picker API.
			wp_enqueue_style( 'wp-color-picker' );

			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-easy-faqs-admin.css', array(), $this->version, 'all' );
			wp_enqueue_style( $this->plugin_name . '-tab-style', plugin_dir_url( __FILE__ ) . 'css/tab.css', array(), $this->version, 'all' );

		endif;

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Easy_Faqs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Easy_Faqs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$screen = get_current_screen();
		if ( WS_WP_EASY_FAQ_POST_TYPE === $screen->id ) :
			// WP Color-picker API.
			wp_enqueue_script( 'wp-color-picker' );

			// Admin Interface JS.
			wp_enqueue_script( $this->plugin_name . '-admin', plugin_dir_url( __FILE__ ) . 'js/wp-easy-faqs-admin.js', array( 'jquery' ), $this->version, false );

			// Custom Sortable.
			wp_enqueue_script( $this->plugin_name . '-custom-sortable-js', plugin_dir_url( __FILE__ ) . 'js/custom-sortable.js', array( 'jquery' ), $this->version, false );

			// settings accordian JS.
			wp_enqueue_script( $this->plugin_name . '-settings-acc', plugin_dir_url( __FILE__ ) . 'js/settings-acc.js', array( 'jquery' ), $this->version, false );

			endif;

		if ( WS_WP_EASY_FAQ_POST_TYPE == $screen->post_type ) :

			wp_enqueue_script( $this->plugin_name . 'easy-faq-column-js', plugin_dir_url( __FILE__ ) . 'js/easy-faq-columns.js', array( 'jquery' ), $this->version, false );

			endif;

	}

	/**
	 * Register Wp Easy FAQ post type
	 */

	public function register_wp_faq_init() {

		$labels = array(
		'name'                => __( 'WP Easy FAQs', 'wp-easy-faqs' ),
		'singular_name'       => __( 'FAQ', 'wp-easy-faqs' ),
		'add_new'             => _x( 'Add New', 'wp-easy-faqs', 'wp-easy-faqs' ),
		'add_new_item'        => __( 'Add New', 'wp-easy-faqs' ),
		'edit_item'           => __( 'Edit FAQ', 'wp-easy-faqs' ),
		'new_item'            => __( 'New FAQ', 'wp-easy-faqs' ),
		'view_item'           => __( 'View FAQ', 'wp-easy-faqs' ),
		'all_items'			  => __( 'All FAQs', 'wp-easy-faqs' ),
		'search_items'        => __( 'Search WP FAQs', 'wp-easy-faqs' ),
		'not_found'           => __( 'No FAQs found', 'wp-easy-faqs' ),
		'not_found_in_trash'  => __( 'No FAQs found in Trash', 'wp-easy-faqs' ),
		'parent_item_colon'   => __( 'Parent FAQ:', 'wp-easy-faqs' ),
		'menu_name'           => __( 'FAQs', 'wp-easy-faqs' ),
		);

		$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => __( 'Description.', 'wp-easy-faqs' ),
		'taxonomies'          => array(),
		'public'              => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-editor-help',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'wp-faq' ),
		'can_export'          => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
		'revisions',
		),
		);

		register_post_type( WS_WP_EASY_FAQ_POST_TYPE, $args );

	}
	/**
	 * Register Meta Boxes.
	 */
	function wp_easy_faq_meta_boxes() {

		$screen = get_current_screen();
		if ( in_array( $screen->id, array( WS_WP_EASY_FAQ_POST_TYPE ) ) ) :

			if ( $screen->id === WS_WP_EASY_FAQ_POST_TYPE ) :

				add_meta_box(
					'wp_easy_faq_tab_metabox',
					__( 'FAQ Configurations', 'wp-easy-faqs' ),
					array( $this->callback,'tab_meta_box_callback' ),
					$screen,
					'normal',
					'high'
				);
			endif;

			/**
 * Help Metabox
 */

			add_meta_box(
				'wp_easy_faq_our_plugins',
				__( 'Help?', 'wp-easy-faqs' ),
				array( $this->callback,'help_box_callback' ),
				$screen,
				'side',
				'low'
			);

			/**
 * Faq Metabox
 */

			add_meta_box(
				'wp_easy_faq_faq',
				__( 'Documentation', 'wp-easy-faqs' ),
				array( $this->callback,'faq_box_callback' ),
				$screen,
				'side',
				'low'
			);

			/**
 * Our Plugins Metabox
 */

			add_meta_box(
				'wp_easy_faq_help',
				__( 'Our Plugins', 'wp-easy-faqs' ),
				array( $this->callback,'our_plugins_callback' ),
				$screen,
				'side',
				'low'
			);

			endif;
	}
	/**
	 * Save All FAQ DATA.
	 *
	 * @param  Int $post_id POST ID.
	 * @return Null
	 */
	function save_wp_easy_faq_data( $post_id ) {

		if ( WS_WP_EASY_FAQ_POST_TYPE != get_post_type( $post_id ) ) {
			return $post_id;
		}

		// Bail if we're doing an auto save.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return;
		}

		// if our nonce isn't there, or we can't verify it, bail.
		if ( ! isset( $_POST['wp_easy_faq_nonce_field'] ) || ! wp_verify_nonce( $_POST['wp_easy_faq_nonce_field'], 'wp_easy_faq_nonce_action' ) ) {
		    return $post_id;
		}

		// if our current user can't edit this post, bail.
		if ( ! current_user_can( 'edit_post' , $post_id ) ) {
			return $post_id;
		}

		// Saving Questions Data.
		if ( isset( $_POST['faq-question'] ) && ! empty( $_POST['faq-question'] ) ) {
			$faq_question = array_filter( $_POST['faq-question'] );
			if ( ! empty( $faq_question ) ) {
				$faq_question = array_values( $_POST['faq-question'] );
			}

			$faq_contents['title'] = array_map( 'sanitize_text_field', $_POST['faq-question'] );

		}
		if ( isset( $_POST['faq_answers'] ) && ! empty( $_POST['faq_answers'] ) ) {

			$faq_contents['answer'] = $_POST['faq_answers'];
		}
			update_post_meta( $post_id, 'wp_easy_faq_data', $faq_contents );

		// Saving Settings.
		if ( isset( $_POST['wp_easy_faq_settings'] ) ) {

			$wp_easy_faq_settings = array_map( 'strip_tags', $_POST['wp_easy_faq_settings'] );

			update_post_meta( $post_id, 'wp_easy_faq_all_settings', $wp_easy_faq_settings );

		}

	}

	/**
	 * ADDING SHORTCODES COLUMN TO THE POST TYPE DASHBOARD.
	 *
	 * @param  Array $columns [The Columns Elements Array]
	 * @return Array          [Modified Array]
	 */
	function easy_faq_shortcode_column_head( $columns ) {
		$new_columns['cb']     = '<input type="checkbox" />';
		$new_columns['title']  = $columns['title'];
		$new_columns['shortcode']  = __( 'Shortcodes', 'wp-easy-faqs' );
		$new_columns['date']   = $columns['date'];
		return $new_columns;
	}
	/**
	 * Adds the Shortcode column Field Values
	 *
	 * @param  Array $column_name Modified Columns Array
	 * @param  int   $post_id     Post ID
	 * @return HTML             The HTML Markup for the shortcode.
	 */
	function easy_faq_shortcode_content( $column_name, $post_id ) {
		switch ( $column_name ) {

			case 'shortcode': ?>
					
			<input type="text" readonly="readonly" class="shortcode-usage" value="[WP_EASY_FAQ id='<?php echo $post_id; ?>']" ></div>

				<?php
				break;
			default:
				break;
		}

	}


	/**
	 * Updated Admin Messages.
	 *
	 * @param  Array $messages WordPress Default Messages.
	 * @return Array           Modified Messages.
	 */
	function wp_easy_faq_updated_messages( $messages ) {

		$post             = get_post();
		$post_type        = get_post_type( $post );
		$post_type_object = get_post_type_object( $post_type );

		$messages[ WS_WP_EASY_FAQ_POST_TYPE ] = array(
		0  => '', // Unused. Messages start at index 1.
		1  => __( 'FAQ updated.', 'wp-easy-faqs' ),
		2  => __( 'Custom field updated.', 'wp-easy-faqs' ),
		3  => __( 'Custom field deleted.', 'wp-easy-faqs' ),
		4  => __( 'FAQ updated.', 'wp-easy-faqs' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'FAQ restored to revision from %s', 'wp-easy-faqs' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6  => __( 'FAQ created.', 'wp-easy-faqs' ),
		7  => __( 'FAQ saved.', 'wp-easy-faqs' ),
		8  => __( 'FAQ submitted.', 'wp-easy-faqs' ),
		9  => sprintf(
			__( 'FAQ scheduled for: <strong>%1$s</strong>.', 'wp-easy-faqs' ),
			// translators: Publish box date format, see http://php.net/date.
			date_i18n( __( 'M j, Y @ G:i', 'wp-easy-faqs' ), strtotime( $post->post_date ) )
		),
		10 => __( 'FAQ draft updated.', 'wp-easy-faqs' ),
		);

		return $messages;

	}

	/**
	 * Removes The Sortable Behaviour of the Main Metabox.
	 *
	 * @return [type] [description]
	 */
	function wp_easy_faqs_remove_sortable() {
		$screen = get_current_screen();
		if ( WS_WP_EASY_FAQ_POST_TYPE == $screen->id ) :
	?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$('#wp_easy_faq_tab_metabox').sortable({
		      		disabled:true,
		      		sort: false,		      		
		      	}).children('h2').removeClass('hndle').css('border-bottom','1px solid #e5e5e5');
			});
		</script>
	<?php
		endif;
	}

	/**
	 * Removes The View from FAQ lists
	 *
	 * @param  [array] $actions [Array of all actions]
	 * @return [array]          [modified Array]
	 */
	function easy_faq_remove_row_actions( $actions ) {
		if ( get_post_type() === WS_WP_EASY_FAQ_POST_TYPE ) {
			unset( $actions['view'] );
		}
		return $actions;
	}



}

