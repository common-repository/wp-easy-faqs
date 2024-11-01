<?php
/**
 * File to save / display the Answers Contents.
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://wensolutions.com/
 * @since      1.0.0
 *
 * @package    Wp_Easy_Faqs
 * @subpackage Wp_Easy_Faqs/admin/partials
 */

$faq_data = get_post_meta( $post->ID, 'wp_easy_faq_data', true ); ?>

<section id="wp-faq-section">

<?php
if ( ! empty( $faq_data['title'] ) ) :
	$questions = array_filter( $faq_data['title'] );
endif;
if ( ! empty( $questions ) ) :

	$index = 1;
	foreach ( $questions as $key => $question ) { ?>

			<div class="faq-list-warp">
			<div id="faq-list_description"> <!-- wrapper div to delete list -->
				<!-- Other faq editors -->
				<div class="faq-list rmv-ans-<?php echo absint( $index ); ?>" id="faq-list_<?php echo absint( $index );?>"> <!-- wrapper div to delete list -->
					<div  >
						<div class="faq-title">
							<h3 class="clearfix">
						
								 <i class="dashicons dashicons-arrow-down"></i><?php echo esc_html( $question );  ?>
							</h3>

						</div>
				
						<div class="faq-content" id="faq-content-<?php echo absint( $index ); ?>">

							<?php

							$editor_id = 'editor-' . get_the_ID() . '-' . $index;
							$content = isset( $faq_data['answer'][ $key ] ) ? $faq_data['answer'][ $key ] : '';
							$textarea_name = 'faq_answers[' . $index . ']';

							wp_editor( $content, $editor_id, array( 'textarea_name' => $textarea_name, 'editor_height' => 300 ) );
							?>
						</div>
					</div>
		
				</div> 
			</div>

		<?php $index++; } ?>

<?php else : ?> 

	<span class="edit_title wp-faq-add-new-message srt" id="title-<?php echo absint( $index ); ?>" title="<?php esc_html_e( 'Click Here To Edit Title', 'wp-easy-faqs' );?>"><?php esc_html_e( 'Please ADD QUESTION First !!','wp-easy-faqs' ) ?></span> 

<?php endif; ?>	

</section>
