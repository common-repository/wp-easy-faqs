

//Front-end Accordion Display Scripts
//TYPE :-> NON- Collapsible

jQuery(document).ready(function($){
	

$(document).on('click', '.non-collapsible', function(){

	//Accordion icon style plus / minus

	if( $(this).hasClass('accordion-plus-minus')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-plus')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-plus').addClass('dashicons-minus');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-minus').addClass('dashicons-plus');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}

	}

	//Accordion icon style Left / Down

    if( $(this).hasClass('accordion-left-down')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-left')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-left').addClass('dashicons-arrow-down');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-left');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		
	}

	//Accordion icon style Left / Down Alternative

	if( $(this).hasClass('accordion-left-down-alt2')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-left-alt2')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-left-alt2').addClass('dashicons-arrow-down-alt2');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-left-alt2');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		
	}

	//Accordion icon style Arrow Down / Up

	if( $(this).hasClass('accordion-arrow-down-up')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-down')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-up').addClass('dashicons-arrow-down');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		
	}


	//Accordion icon style Right Down Alternative

	if( $(this).hasClass('accordion-right-down-alt2')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-right-alt2')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-right-alt2').addClass('dashicons-arrow-down-alt2');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-right-alt2');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		
	}
});

//TYPE :-> NON- Collapsible END -------------------------------------------------------------------------------->>>>>>>>>>>>>>>>>>>>

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Collapsible JS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

$(document).on('click', '.collapsible', function(){

//Accordion icon style plus / minus

	if( $(this).hasClass('accordion-plus-minus')){

		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-plus')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-plus').addClass('dashicons-minus');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		$(this).parent().siblings().children().children('.faq-show-hide-icon').removeClass('dashicons-minus').addClass('dashicons-plus');
		$(this).parent().siblings().children('.collapsible').removeClass('accordion-active');
		}
		
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-minus').addClass('dashicons-plus');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}

	}

	//Accordion icon style Left / Down

    if( $(this).hasClass('accordion-left-down')){

    	if( $(this).hasClass('accordion-left-down')){
		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-left')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-left').addClass('dashicons-arrow-down');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		$(this).parent().siblings().children().children('.faq-show-hide-icon').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-left');
		$(this).parent().siblings().children('.collapsible').removeClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-left');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		
	}
		
}

	//Accordion icon style Left / Down Alternative

	if( $(this).hasClass('accordion-left-down-alt2')){

	if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-left-alt2')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-left-alt2').addClass('dashicons-arrow-down-alt2');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		$(this).parent().siblings().children().children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-left-alt2');
			$(this).parent().siblings().children('.collapsible').removeClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-left-alt2');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}
		

		
	}

	//Accordion icon style Arrow Down / Up

	if( $(this).hasClass('accordion-arrow-down-up')){

		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-down')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		$(this).parent().siblings().children().children('.faq-show-hide-icon').removeClass('dashicons-arrow-up').addClass('dashicons-arrow-down');
			$(this).parent().siblings().children('.collapsible').removeClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-up').addClass('dashicons-arrow-down');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}


		
	}


	//Accordion icon style Right Down Alternative

	if( $(this).hasClass('accordion-right-down-alt2')){

		if($(this).children('.faq-show-hide-icon').hasClass('dashicons-arrow-right-alt2')){
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-right-alt2').addClass('dashicons-arrow-down-alt2');
			$(this).next('.panel').slideDown();
			$(this).addClass('accordion-active');
		$(this).parent().siblings().children().children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-right-alt2');
			$(this).parent().siblings().children('.collapsible').removeClass('accordion-active');
		}
		else{
			$(this).children('.faq-show-hide-icon').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-right-alt2');
			$(this).next('.panel').slideUp();
			$(this).removeClass('accordion-active');
		}

		
	}
	
	//$(this).siblings('.panel').slideDown();
	$(this).parent().siblings().children('.panel').slideUp();


});

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Collapsible JS END >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// frontend url link
	$(document).on('click','.faq-admin-link',function(e){
		e.preventDefault();				
		var URL = window.location.href.split('#')[0];   
		var MYURL = $(this).attr('href') ;
		
		prompt("Please copy(ctrl+c) to use url", URL+MYURL );
		

	});


// Open Accordion with Hash Link to the URL

var show_link = location.hash;

$(show_link).click();


});


// Accordion pop up style one at a time JS

