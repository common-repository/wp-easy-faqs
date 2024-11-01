<?php
/**
 * File Containing FAQ Settings.
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin/partials
 */

$wp_easy_faq_saved_settings = get_post_meta( $post->ID, 'wp_easy_faq_all_settings', true );

?>

<div class="wp-easy-faq-settings-wrapper">

	<div class="wp-faq-setting-option">
	<h4 class="faq-setting-title"><a href="#" class="faq-options-showing"> <?php esc_html_e( 'General Options', 'wp-easy-faqs' );?><i class="dashicons dashicons-arrow-up"></i></a></h4>
	
	<div class="easy-faq-options faq-setting-fields">

		<div class="easy-faq-option-wrapper">
			
			<label for="chk_title" ><?php esc_html_e( 'Display FAQ Title?', 'wp-easy-faqs' ) ?></label>
				<div class="easy-faq-option-field">
			
					<div class="easy-faq-plain-label">
						<input id="chk_title" type="checkbox" value="1" name="wp_easy_faq_settings[title-display]" <?php if ( isset( $wp_easy_faq_saved_settings['title-display'] ) ) {
							checked( $wp_easy_faq_saved_settings['title-display'], true );
} ?>>
						<div class="easy-faq-side-note"> <?php esc_html_e( 'Check if you want to display FAQ Title in the frontend.','wp-easy-faqs' ) ?></div>
					</div>

				</div>
		</div>
		<div class="easy-faq-option-wrapper">

			<label for="chk_index" ><?php esc_html_e( 'Display FAQ Index?', 'wp-easy-faqs' ) ?></label>
				<div class="easy-faq-option-field">
			
					<div class="easy-faq-plain-label">
						<input id="chk_index" type="checkbox" value="1" name="wp_easy_faq_settings[index-display]" <?php if ( isset( $wp_easy_faq_saved_settings['index-display'] ) ) {
							checked( $wp_easy_faq_saved_settings['index-display'], true );
} ?> >
						<div class="easy-faq-side-note"> <?php esc_html_e( 'Check if you want to display FAQ Index Number in the frontend.','wp-easy-faqs' ) ?></div>
					</div>

				</div>
		</div>
	</div>
	</div>
	

	<div class="wp-faq-setting-option">
	<h4 class="faq-setting-title"><a href="#"> <?php esc_html_e( 'Layout Options','wp-easy-faqs' ) ?><i class="dashicons dashicons-arrow-down"></i></a></h4>

	<div class="easy-faq-options faq-setting-fields">

		<div class="easy-faq-option-wrapper">

			<label for="easy-faq-type" ><?php esc_html_e( 'FAQ Display Type', 'wp-easy-faqs' ) ?></label>
			<div class="easy-faq-option-field">
			
				<div class="easy-faq-plain-label">
					<select id="easy-faq-type" name="wp_easy_faq_settings[faq-type]" >
						<option value="accordion"  <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-type'], 'accordion' );} ?> > <?php esc_html_e( 'Accordion', 'wp-easy-faqs' ) ?> </option>
						<option value="plain-list" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-type'], 'plain-list' );} ?> > <?php esc_html_e( 'Plain List', 'wp-easy-faqs' ) ?> </option>
					</select><br>
					<div class="easy-faq-side-note"> <?php esc_html_e( 'Select FAQ Display Type in the Frontend.','wp-easy-faqs' ) ?></div>
				</div>

			</div>
		</div>

		<div class="easy-faq-option-wrapper list-style">

			<label for="easy-faq-style"><?php esc_html_e( 'Question List Style', 'wp-easy-faqs' ) ?></label>
			<div class="easy-faq-option-field">
			
				<div class="easy-faq-plain-label">
					<select id="easy-faq-style" name="wp_easy_faq_settings[faq-list-type]" >
						<option value="compact"  <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-list-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-list-type'], 'compact' );} ?> > <?php esc_html_e( 'Compact', 'wp-easy-faqs' ) ?> </option>
						<option value="spaced" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-list-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-list-type'], 'spaced' );} ?> > <?php esc_html_e( 'Spaced', 'wp-easy-faqs' ) ?> </option>
					</select><br>
					<div class="easy-faq-side-note"> <?php esc_html_e( 'Question List Display Style for the frontend.','wp-easy-faqs' ) ?></div>
				</div>

			</div>
		</div>

		<div class="easy-faq-option-wrapper faq-acc-type">

			<label for="easy-faq-acc-type"><?php esc_html_e( 'Accordion Open Type', 'wp-easy-faqs' ) ?></label>
			<div class="easy-faq-option-field">
			
				<div class="easy-faq-plain-label">
					<select id="easy-faq-acc-type" name="wp_easy_faq_settings[faq-acc-type]" >
						<option value="collapsible"  <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-acc-type'], 'collapsible' );} ?> > <?php esc_html_e( 'Single Open', 'wp-easy-faqs' ) ?> </option>
						<option value="non-collapsible" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-type'] ) ) { selected( $wp_easy_faq_saved_settings['faq-acc-type'], 'non-collapsible' );} ?> > <?php esc_html_e( 'Multiple Open', 'wp-easy-faqs' ) ?> </option>
					</select><br>
					<div class="easy-faq-side-note"> <?php esc_html_e( 'Accordion Display Type for the frontend.','wp-easy-faqs' ) ?></div>
				</div>

			</div>
		</div>

		 <div class="easy-faq-option-wrapper list-style">

			<label for="easy-faq-acc-icon-type"><?php esc_html_e( 'Accordion Toggle icon type', 'wp-easy-faqs' ) ?></label>
			<div class="easy-faq-option-field">
			
				<div class="easy-faq-plain-label toggle-type">
					<!-- <select id="easy-faq-acc-icon-type" name="wp_easy_faq_settings[faq-acc-icon-type]" > -->

					<!-- Icon : Plus / Minus  -->
						<input id="toggle-pm" type="radio" name="wp_easy_faq_settings[faq-acc-icon-type]" value="accordion-plus-minus" checked <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) { checked( $wp_easy_faq_saved_settings['faq-acc-icon-type'], 'accordion-plus-minus' );} ?> ><label for="toggle-pm"><img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/plus-minus.png"></label>
					<!-- Icon : Left / Down  -->
					   <input id="toggle-ld" type="radio" name="wp_easy_faq_settings[faq-acc-icon-type]" value="accordion-left-down" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) { checked( $wp_easy_faq_saved_settings['faq-acc-icon-type'], 'accordion-left-down' );} ?> ><label for="toggle-ld"><img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/left-down.png"></label>
					<!-- Icon : Left / Down-alt  -->
						<input id="toggle-lda" type="radio" name="wp_easy_faq_settings[faq-acc-icon-type]" value="accordion-left-down-alt2" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) { checked( $wp_easy_faq_saved_settings['faq-acc-icon-type'], 'accordion-left-down-alt2' );} ?> ><label for="toggle-lda"><img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/left-down-alt.png"></label> 
					<!-- Icon : Arrow Down /  Up -->
						<input id="toggle-adu" type="radio" name="wp_easy_faq_settings[faq-acc-icon-type]" value="accordion-arrow-down-up" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) { checked( $wp_easy_faq_saved_settings['faq-acc-icon-type'], 'accordion-arrow-down-up' );} ?> ><label for="toggle-adu"><img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/down-up.png"></label>
					<!-- Icon : Right / Down  -->
						<input id="toggle-rtd" type="radio" name="wp_easy_faq_settings[faq-acc-icon-type]" value="accordion-right-down-alt2" <?php if ( ! empty( $wp_easy_faq_saved_settings['faq-acc-icon-type'] ) ) { checked( $wp_easy_faq_saved_settings['faq-acc-icon-type'], 'accordion-right-down-alt2' );} ?> ><label for="toggle-rtd"><img src="<?php echo WS_WP_EASY_FAQ_URL ?>/admin/images/right-down.png"></label><br>

					<div class="easy-faq-side-note"> <?php esc_html_e( 'Frontend Accordion Toggle icon type','wp-easy-faqs' ) ?></div>
				</div>

			</div>
		</div>

	</div>
</div>
	<div class="wp-faq-setting-option">
	<h4 class="faq-setting-title"><a href="#"><?php esc_html_e( 'Color Options','wp-easy-faqs' ) ?><i class="dashicons dashicons-arrow-down"></i></a></h4>

<div class="easy-faq-options faq-setting-fields">
	<div class="easy-faq-option-wrapper col-title">
			
		<label for="easy-faq-title-col" ><?php esc_html_e( 'FAQ List Title Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input id="easy-faq-title-col" type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-faq-title'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-faq-title'] );?>" name="wp_easy_faq_settings[col-faq-title]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the FAQ Title', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper">
			
		<label><?php esc_html_e( 'Question Text Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] );?>" name="wp_easy_faq_settings[col-quest-text]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Question Text', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper col-text-hov">
			
		<label><?php esc_html_e( 'Question Text Color on Hover', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-quest-text-hov'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-quest-text-hov'] );?>" name="wp_easy_faq_settings[col-quest-text-hov]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Question Text on Hover', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper">
			
		<label><?php esc_html_e( 'Answer Text Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-ans-text'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-ans-text'] );?>" name="wp_easy_faq_settings[col-ans-text]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Answer Text', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper col-tab">
			
		<label><?php esc_html_e( 'Question Tab Background Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-quest-tab'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-quest-tab'] );?>" name="wp_easy_faq_settings[col-quest-tab]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Question Tab', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper col-tab-hov">
			
		<label><?php esc_html_e( 'Question Tab Hover Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-quest-tab-hov'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-quest-tab-hov'] );?>" name="wp_easy_faq_settings[col-quest-tab-hov]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Question Tab on Hover', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>
	<div class="easy-faq-option-wrapper col-tab-act">
			
		<label><?php esc_html_e( 'Active Question Tab Color', 'wp-easy-faqs' ) ?></label>
		<div class="easy-faq-option-field">
			
		   <input type="text" value="<?php echo(empty( $wp_easy_faq_saved_settings['col-quest-tab-act'] )) ? '' :esc_attr( $wp_easy_faq_saved_settings['col-quest-tab-act'] );?>" name="wp_easy_faq_settings[col-quest-tab-act]" class="wp-easy-faq-color-field">
		   <div class="easy-faq-option-note"><?php esc_html_e( 'Sets the color for the Question Tab when Active', 'wp-easy-faqs' ) ?></div>

		</div>
	</div>

	</div>
</div>
</div>
