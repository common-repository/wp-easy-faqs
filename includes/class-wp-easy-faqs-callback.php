<?php
/**
 * Contains the callback functions for the plugin
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 */

/**
 * Includes all the callback Functions of plugins
 *
 * @link       http://author@wensolutions.com
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 */
class Wp_Easy_Faq_Callback {

	/**
	 * Main Metabox
	 */
	public function tab_meta_box_callback() {
		?>

	    <div id="tabs-container" class="clearfix">
		    <ul class="tabs-menu clearfix">
		        <li class="current"><a href="#tab-1"><?php esc_html_e( 'FAQ Questions', 'wp-easy-faqs' ); ?></a></li>
		        <li><a href="#tab-2"><?php esc_html_e( 'Answers', 'wp-easy-faqs' ); ?></a></li>	
		        <li><a href="#tab-3"><?php esc_html_e( 'Settings', 'wp-easy-faqs' ); ?></a></li>	
		        <li><a href="#tab-4"><?php esc_html_e( 'Usage', 'wp-easy-faqs' ); ?></a></li>		        	        
		    </ul>
		    <div class="tab clearfix">
		        <div id="tab-1" class="tab-content">
	            	<?php include WS_WP_EASY_FAQ_DIR . '/admin/partials/wp-easy-faqs-title.php'; ?>
		        </div>
		        <div id="tab-2" class="tab-content">
		        	<?php include WS_WP_EASY_FAQ_DIR . '/admin/partials/wp-easy-faqs-content.php'; ?>
	            </div>
		        <div id="tab-3" class="tab-content">
		        	<?php include WS_WP_EASY_FAQ_DIR . '/admin/partials/wp-easy-faqs-settings.php'; ?>
	            </div>	
		        <div id="tab-4" class="tab-content">
		        	<?php include WS_WP_EASY_FAQ_DIR . '/admin/partials/wp-easy-faqs-usage.php'; ?>
	            </div>	       	        
		    </div>
		</div>		
	<?php
	}


	/**
	 * Documentaton Box and Help Box Callbacks
	 */
	public function our_plugins_callback() {
		?>

		   <div class="thumbnail">
			<img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/plugin.png" style="max-width:100%;">
			 <p class="text-justify"><?php esc_html_e( 'Checkout our other cools plugins for WordPress.', 'wp-easy-faqs' ); ?>
			 	
			 </p>
			 
			 <p class="text-center">

			 	<a href="<?php echo esc_url( 'http://wensolutions.com/plugins' ) ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Our Plugins', 'wp-easy-faqs' ); ?>
			 		
			 	</a>
			 </p>
		   </div>             

		<?php
	}

	/**
	 * Callback Function For FAQ Metabox.
	 */
	public function faq_box_callback() {
		?>

		   <div class="thumbnail">
			<img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/docico.png" style="max-width:100%">
			 <p class="text-justify"><?php esc_html_e( 'Click below for our full documentation about WP Easy FAQs.', 'wp-easy-faqs' ); ?> 
			 </p>

			 <p class="text-center"><a href="<?php echo esc_url( 'http://wensolutions.com/documentation/wp-easy-faqs/' ) ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Get Documentation Here', 'wp-easy-faqs' ) ?></a>
			 </p>
		   </div>             

		<?php
	}
	/**
	 * Callback function for help Metabox.
	 */
	public function help_box_callback() {
		?>

	   <div class="thumbnail">
			<img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/help.png" style="max-width:100%;">
			 <p class="text-justify"><?php esc_html_e( 'If you need further assistance, Please feel free to visit our support forum.', 'wp-easy-faqs' ); ?>
			 	
			 </p>
			 
			 <p class="text-center">

			 	<a href="<?php echo esc_url( 'http://themepalace.com/forum/wp-easy-faqs/' ) ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Get Support Here', 'wp-easy-faqs' ); ?>
			 		
			 	</a>
			 </p>
	   </div>             

		<?php
	}


}
