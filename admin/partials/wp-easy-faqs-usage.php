<?php
/**
 * File for the Usage Tab.
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin/partials
 */

$custom_id = get_the_ID(); ?>

<div class="wp-easy-faq-settings-wrapper">
<h4 class="faq-setting-title"> <?php esc_html_e( 'Display via Shortcode','wp-easy-faqs' ); ?> </h4>
	<div class="easy-faq-option-wrapper">
	   
			
		  
				<div class="easy-faq-side-note"> <?php esc_html_e( 'Copy this Shortcode to display FAQ in pages/posts :','wp-easy-faqs' ) ?>  </div><br>
				<div class="faq-field-text">
				<input type="text" readonly="readonly" class="shortcode-usage" value="[WP_EASY_FAQ id='<?php echo absint( $custom_id ); ?>']" ></div>
			   
		  

	   
	</div>

<h4 class="faq-setting-title"> <?php esc_html_e( 'Display via PHP Function','wp-easy-faqs' ); ?> </h4>

	<div class="easy-faq-option-wrapper">
		
			
		  
				<div class="easy-faq-side-note"> <?php esc_html_e( 'Copy the PHP Function below to display FAQ in templates :','wp-easy-faqs' ) ?></div><br>
				<div class="faq-field-text">
				<textarea rows="1" cols="50" name="shortcode-function" readonly="readonly">&lt;?php echo do_shortcode("[WP_EASY_FAQ id='<?php echo absint( $custom_id ); ?>']"); ?&gt; </textarea>
				</div>
				
		
	   
	</div>
</div>
