//ADD Question Title Fields and sortable

	jQuery(document).ready(function($){
		
		$('.wp-easy-faq-sortable-list').sortable();
		
		$(document).on('click', '.wp-faq-add-new', function( e ){ 

		var maxId = get_max_id();
		var faq_quest_list = '<li class="dd-item dd3-item rmv-'+maxId+' dd3-item ui-state-default ui-sortable-handle " id="document_title_1" data-id="'+maxId+'"><div class="dd-handle dd3-handle"></div><div class="dd3-content"><h3 class="itemTitle clearfix" data-id="'+maxId+'"><span class="edit_title" id="title-'+maxId+'" title="Click Here To Add Question">Click Here to Add Question</span><input type="text" id="title-'+maxId+'" style="display:none;" name="faq-question[]" placeholder="(add question)" class="section_title"><i class="dashicons dashicons-no-alt easy-faq-delete-list delete-icon" data-id="'+maxId+'"></i></h3></div></li>';


			e.preventDefault();
			$('.wp-easy-faq-sortable-list').append(faq_quest_list);
			$('.wp-easy-faq-sortable-list').sortable();
			$('span').remove('.srt');
			$('.easy-faq-save-message').show();
		});

		function get_max_id(){
			var maxId = 10000;
			$('#nestable-document .dd-item').each( function(){
				var id = $(this).attr('data-id');

				if( id > maxId )
					maxId = id;

			} );

			return parseInt(maxId) + 1;

		}


//Delete Fields

		$(document).on('click', '.easy-faq-delete-list', function( e ){
		
		var id = $(this).attr('data-id');
		
		var msg = 'Are you sure to delete this Question ';
		msg += 'and its Answer?';
		var c = confirm(msg);
		if(c == true){

			$('li').remove('.rmv-'+id ); // Removing title
			$('div').remove('.rmv-ans-'+id); //Removing Answer

		}
		
	});


// Show Add/Edit Title input box
	$(document).on('click','h3.itemTitle span.edit_title',function(e){
		$(this).hide();
		$(this).siblings('.section_title').show().focus().select();
	});

	$(document).on('blur','h3.itemTitle input.section_title',function(e){
		$(this).hide();
		$(this).siblings('span.edit_title').show();

	});

	$(document).on('keyup change', '.section_title', function( e ){
		var titleId = $(this).attr('id');
		var titleValue = ($(this).val())?$(this).val():"(no title)";
		$('#'+titleId ).text(titleValue);
	});

//Shortcode auto select

$("input:text").focus(function() { $(this).select(); } );
$("textarea").focus(function() { $(this).select(); } );

});







