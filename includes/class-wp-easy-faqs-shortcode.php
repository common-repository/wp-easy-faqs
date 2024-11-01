<?php
/**
 * The file that defines shortcode
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 */

/**
 *  Shortcode class.
 *
 * This class contains shortcode stuff.
 *
 * @since      1.0.0
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/includes
 * @author     WEN Solutions <wensolution@gmail.com>
 */
class Wp_Easy_Faqs_Shortcode {

	/**
	 * Initialize Shortcode
	 *
	 * @since    1.0.0
	 */
	public function init_shortcode() {

		add_shortcode( 'WP_EASY_FAQ', array( $this, 'wp_easy_faqs_shortcode_callback' ) );

	}

	/**
	 * Check if FAQ is valid and exists.
	 *
	 * @since    1.0.0
	 */
	private function valid_faq_check( $args ) {

		$result = false;
		if ( isset( $args['id'] ) && intval( $args['id'] ) > 0  ) {

			$faq = get_post( intval( $args['id'] ) );

			if ( ! empty( $faq ) && WS_WP_EASY_FAQ_POST_TYPE == $faq->post_type && 'publish' == $faq->post_status ) {
				$result = true;
			}
		}
		return $result;

	}

	function wp_easy_faqs_shortcode_callback( $atts ) {
	?>

		<?php

		$atts = shortcode_atts( array( 'id' => '' ), $atts, 'WP_EASY_FAQ' );

		$atts['id'] = absint( $atts['id'] );

		$check_faq_validity = $this->valid_faq_check( $atts );

		if ( ! $check_faq_validity ) {
			return __( 'FAQ not found', 'wp-easy-faqs' );
		}

		ob_start(); // Starting Output Buffur.

		// Getting Values and Settings.
		$faq_data = get_post_meta( $atts['id'], 'wp_easy_faq_data', true );

		$wp_easy_faq_saved_settings = get_post_meta( $atts['id'], 'wp_easy_faq_all_settings', true );?>



	<?php

	// Check Title is set to display or not.
	if ( isset( $wp_easy_faq_saved_settings['title-display'] ) ) {

		$faq_title = get_the_title( $atts['id'] );?>

		<h2 class="wp-easy-faq-title wp-easy-faq-<?php echo $atts['id']; ?>">
	
			<?php if ( ! empty( $faq_title ) ) : echo esc_html( $faq_title );
endif; ?>
	
		</h2>

		<?php }

	// CHECK FOR FAQ-Display Type.
	if ( isset( $wp_easy_faq_saved_settings['faq-type'] ) && $wp_easy_faq_saved_settings['faq-type'] == 'accordion' ) {

		if ( ! empty( $faq_data['title'] ) ) :

			$questions = array_filter( $faq_data['title'] );

		endif;

		if ( ! empty( $questions ) ) :  ?>

<div class="wp-easy-faq-accordion-wrapper wp-easy-faq-<?php echo $atts['id']; ?>">

	<?php
	  $index = 1;

	foreach ( $questions as $key => $question ) {

		$titleurl = sanitize_title( $faq_data['title'][ $key ] );

	?>
	<div class="faq-accordion-inner">
	<a class="faq-admin-link" title="Link to this question" href="#<?php echo $titleurl; ?>">

		<span class="dashicons dashicons-admin-links"></span>

	</a>
		
	<?php if ( is_user_logged_in() ) {

			$usr_details = wp_get_current_user();
			$capebility_test = $usr_details->allcaps;

			$caps_usr = '';

		if ( ( ! empty( $capebility_test ))  &&  $capebility_test['edit_posts'] ) {

			$faq_edit_link = admin_url() . 'post.php?post=' . $atts['id'] . '&action=edit&faq_url=1&title_id=faq-content-' . $index;

		?>
			  
			<a class="faq-edit-link" title="Edit Answer" href="<?php echo $faq_edit_link; ?>">

				<span class="dashicons dashicons-edit"></span>

			</a>

		<?php }
}

	   // Accordion Toggle icon Check.
if ( isset( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) && ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) {

	$acc_label_class = $wp_easy_faq_saved_settings['faq-acc-icon-type'];

} elseif ( isset( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) && empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) {

	 $acc_label_class = 'accordion-plus-minus';
}

		?>

	  <button id="<?php echo $titleurl; ?>" class="accordion <?php

		if ( isset( $wp_easy_faq_saved_settings['faq-acc-type'] ) && $wp_easy_faq_saved_settings['faq-acc-type'] == 'non-collapsible' ) : echo ' non-collapsible' ;
		  endif;

		echo ' ' . $acc_label_class;

		if ( isset( $wp_easy_faq_saved_settings['faq-acc-type'] ) && $wp_easy_faq_saved_settings['faq-acc-type'] == 'collapsible' ) : echo ' collapsible' ;
		  endif;

		?>">

		<?php

		if ( isset( $wp_easy_faq_saved_settings['index-display'] ) ) {?>

			  <span class="num-counter"> 

				<?php echo $index . '.' ; ?> 

			  </span>

		<?php }

		if ( isset( $faq_data['title'] ) && ! empty( $faq_data['title'] ) ) : echo esc_html( $faq_data['title'][ $key ] );

		  endif;

		// Switch Case For Span-class of toggle icon.
		switch ( $acc_label_class ) {

			case 'accordion-plus-minus':
				echo '<span class="faq-show-hide-icon dashicons dashicons-plus"></span>';
			  break;

			case 'accordion-left-down':
				echo '<span class="faq-show-hide-icon dashicons dashicons-arrow-left"></span>';
			  break;

			case 'accordion-left-down-alt2':
				echo '<span class="faq-show-hide-icon dashicons dashicons-arrow-left-alt2"></span>';
			  break;

			case 'accordion-arrow-down-up':
				echo '<span class="faq-show-hide-icon dashicons dashicons-arrow-down"></span>';
			  break;

			case 'accordion-right-down-alt2':
				echo '<span class="faq-show-hide-icon dashicons dashicons-arrow-right-alt2"></span>';
			  break;

			default:
				echo '<span class="faq-show-hide-icon dashicons dashicons-plus"></span>';
			  break;
		}

		?>

	</button>

		<div class="panel">
		<div class="faq-ans-section" >

		<?php

		if ( isset( $faq_data['answer'][ $key ] ) && ! empty( $faq_data['answer'][ $key ] ) ) : echo wpautop( $faq_data['answer'][ $key ] );

			  endif;

			?>
			

		  </div>
		</div>
	  </div>

	<?php

	if ( isset( $wp_easy_faq_saved_settings['faq-list-type'] ) && 'spaced' == $wp_easy_faq_saved_settings['faq-list-type'] ) {
	  	echo '<br>';
	}

	$index++; } ?>

	</div>

<?php

endif;

	} else {

		// Display Type : Plain List.
		if ( ! empty( $faq_data['title'] ) ) :

			$questions = array_filter( $faq_data['title'] );
endif;

		if ( ! empty( $questions ) ) :  ?>

	<div class="wp-easy-faq-plist-wrapper wp-easy-faq-<?php echo $atts['id']; ?>">

	<?php

	$index = 1;

	foreach ( $questions as $key => $question ) {

		$titleurl = sanitize_title( $faq_data['title'][ $key ] );
	?>
	<div class=faq-quest-content>
	  <div class="faq-quest-head">
		<h3 class="faq-question-plist" id="<?php echo $titleurl; ?>" >
		  
			<?php

			if ( isset( $wp_easy_faq_saved_settings['index-display'] ) ) {?>

			  <span class="num-counter"> 

			<?php echo $index . '.' ; ?> </span>

			<?php }

			if ( isset( $faq_data['title'] ) && ! empty( $faq_data['title'] ) ) :

				echo esc_html( $faq_data['title'][ $key ] );
endif; ?>

		</h3>
	  
	  <div class="faq-icon-list">

		<a class="faq-admin-link" href="#<?php echo $titleurl; ?>">

		  <span class="dashicons dashicons-admin-links"></span>

		</a>

		<?php if ( is_user_logged_in() ) {

			$usr_details = wp_get_current_user();

			$capebility_test = $usr_details->allcaps;
			$caps_usr = '';
			if ( ( ! empty( $capebility_test ))  &&  $capebility_test['edit_posts'] ) {

				$faq_edit_link = $faq_edit_link = admin_url() . 'post.php?post=' . $atts['id'] . '&action=edit&faq_url=1&title_id=faq-content-' . $index; ?>
			  
			  <a class="faq-edit-link" href="<?php echo $faq_edit_link; ?>">
				 
				  <span class="dashicons dashicons-edit"></span>
			  
			  </a>
		   
		<?php }
}

		?>
		</div>
	  </div>
	  <div class="faq-answer-plist">
		 
		  <div class="faq-ans-section" >

			<?php

			if ( isset( $faq_data['answer'][ $key ] ) && ! empty( $faq_data['answer'][ $key ] ) ) {

				echo wpautop( $faq_data['answer'][ $key ] );

			}

				?>
			  

		  </div>

	  </div>

	</div>

	<?php $index++; } ?>

	</div>

	<?php

	endif;

	}

	/**
* Dynamic CSS For Frontend
*/
	include plugin_dir_path( dirname( __FILE__ ) ) . 'public/css/dynamic.css.php';

	$output = ob_get_clean();

	// Get Buffer values and clean.
	return $output;

	}//end wp_easy_faqs_shortcode_callback()

}//end class
