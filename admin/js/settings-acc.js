jQuery(document).ready(function($){

	$('.faq-setting-title a').parent().next("div.faq-setting-fields").hide();
	$('.faq-setting-title a').parent().next("div.faq-setting-fields:eq(0)").show();
	

	// setting option accordian JS
    $(document).on('click','.faq-setting-title a',function(e){
		e.preventDefault();		
		$(this).parent().next("div.faq-setting-fields").slideToggle();
		
		if($(this).hasClass('faq-options-showing')){
			$(this).removeClass('faq-options-showing').children('i').removeClass('dashicons-arrow-up').addClass('dashicons-arrow-down');				
		}
		else{
			$(this).addClass('faq-options-showing').children('i').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up');				
		}
	}); 
	
});