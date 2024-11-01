<?php
/**
 * File to Save / Display FAQ Questions / Titles.
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin/partials
 */

global $post; ?>
<?php wp_nonce_field( 'wp_easy_faq_nonce_action', 'wp_easy_faq_nonce_field' ); ?>
<?php $faq_data = get_post_meta( $post->ID, 'wp_easy_faq_data', true ); ?>

<section id="wp-faq-questions-section">		
	<ul class="wp-easy-faq-sortable-list" id="nestable-document">
	<?php
	if ( ! empty( $faq_data['title'] ) ) :
		$questions = array_filter( $faq_data['title'] );
endif;
	if ( ! empty( $questions ) ) :
		$index = 1;
		foreach ( $questions as $key => $question ) {
	?>

		<li class="dd-item dd3-item rmv-<?php echo absint( $index ); ?> dd3-item ui-state-default ui-sortable-handle" id="<?php echo absint( $key ); ?>" data-id="<?php echo absint( $index ); ?>">
			<div class="dd-handle dd3-handle"></div>
				<div class="dd3-content">
					<h3 class="itemTitle clearfix" data-id="<?php echo absint( $index ); ?>">
						<span class="edit_title" id="title-<?php echo absint( $index ); ?>" title="Click Here To Add/Edit Question"><?php echo esc_html( $question ); ?>
							
						</span>
					<input class="section_title" id="title-<?php echo absint( $index ); ?>" style="display:none;" type="text" name="faq-question[<?php echo absint( $index ) ?>]" placeholder="(add question)" class="section_title" value="<?php echo esc_html( $question ); ?>">
							
						<a href="#faq-list_<?php echo absint( $index );?>" class="edit-faq-page">
							<span class="dashicons dashicons-edit" title="Add/Edit Answer"></span>
						</a>
							
						<i class="dashicons dashicons-no-alt easy-faq-delete-list delete-icon" data-id="<?php echo absint( $index ); ?>"></i>
				</h3>
			</div>
		</li>
		<?php
		$index++;
		} else :  ?> <span class="edit_title wp-faq-add-new-message srt" id="title-<?php echo absint( $index ); ?>" title="Click Here To Edit Title"><?php esc_html_e( 'Add questions to get started !!','wp-easy-faqs' )  ?></span>

<?php endif;  ?>


	</ul>
	
		<div class="faq-quest-button clearfix">		
			<input type="button" value="<?php  esc_attr( esc_html_e( 'Add New Question', 'wp-easy-faqs' ) ); ?>" class="button button-primary wp-faq-add-new" />		
		</div>

		<br>
	<span style="display:none" class="easy-faq-save-message save-notice">

		<?php esc_html_e( 'Please Publish/Update before you move on to Answers section','wp-easy-faqs' ); ?>
		
	</span>
</section>


<?php




