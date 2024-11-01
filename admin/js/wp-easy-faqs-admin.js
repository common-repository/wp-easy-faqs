jQuery(document).ready(function($) {
    
    // Tab
	$(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });


	// Edit link beside Title
	$('.edit-faq-page').click(function(e){
		e.preventDefault();
		var showContent = $(this).attr('href');

		//console.log(showContent);
		$('#tab-1').hide();
		$('#tab-2').show();

		var tabContainer = $(showContent).closest('div#tabs-container');

		tabContainer.children('ul').children('li:first').removeClass('current');
		tabContainer.children('ul').children('li:eq(1)').addClass('current');
		
		$(showContent).children().children('.faq-content').show();

		$(showContent).prev().find('i.dashicons').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up')
		.closest('div.faq-title').next('.faq-content').addClass('showing');
		var elemTopOffset = $(showContent).offset().top;
		$(window).scrollTop(elemTopOffset-150);
		
	});

	// faq Content Accordian
	$(document).on('click','.faq-title h3',function(e){
		e.preventDefault();				
		var content = $(this).parent().next('.faq-content');
		content.slideToggle();

		if(content.hasClass('showing')){
			content.removeClass('showing');	
			$(this).children('i').addClass('dashicons-arrow-down').removeClass('dashicons-arrow-up');				
		}
		else{
			content.addClass('showing');
			$(this).children('i').addClass('dashicons-arrow-up').removeClass('dashicons-arrow-down');
		}

	});



(function( $ ) {
	// Add Color Picker to all inputs that have 'color-field' class
	$(function() {
	$('.wp-easy-faq-color-field').wpColorPicker();
	});
})( jQuery );


//Show / Hide specific settings for specific FAQ Type :

jQuery(document).ready(function($) {
	$value=$("#easy-faq-type").val();
	
		if($('#chk_title').is(':checked')) {

			$('.col-title').show();

		}

		else{

			$('.col-title').hide();
		}

	
       if($value=='plain-list')
       {
        $('.list-style').hide(); //set default class to be shown here, or remove to hide all
        $('.col-tab').hide(); // hiding the tab color field option
        $('.col-tab-hov').hide(); //hiding the tab hover color
        $('.col-tab-act').hide(); // hiding the tab active color 
        $('.col-text-hov').hide();
        $('.faq-acc-type').hide();
    	}
    	else{
    		$('.list-style').show(); //show
    		$('.col-tab').show(); // showing the tab color field option
        	$('.col-tab-hov').show(); //showing the tab hover color
        	$('.col-tab-act').show(); // Showing the tab active color 
        	$('.col-text-hov').show();
        	$('.faq-acc-type').show();
    	}

jQuery('#easy-faq-type').change(function($) { //on change do stuff
        jQuery('.list-style').toggle();
        jQuery('.col-tab').toggle();
        jQuery('.col-tab-hov').toggle();
        jQuery('.col-tab-act').toggle();
        jQuery('.col-text-hov').toggle();
        jQuery('.faq-acc-type').toggle();
});

jQuery('#chk_title').change(function($) {

		jQuery('.col-title').toggle();

});

// Accordion POP Open on EDIT URL clicked from Frontend

	function getUrlVars()
	{
	    var vars = [], hash;
	    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    for(var i = 0; i < hashes.length; i++)
	    {
	        hash = hashes[i].split('=');
	        vars.push(hash[0]);
	        vars[hash[0]] = hash[1];
	    }
	    return vars;
	}

		var faqurl = getUrlVars()['faq_url'];

		if(faqurl == 1 ){
			
		var showContent = '#'+getUrlVars()["title_id"];
		$('#tab-1').hide();
		$('#tab-2').show();

		var tabContainer = $(showContent).closest('div#tabs-container');

		tabContainer.children('ul').children('li:first').removeClass('current');
		tabContainer.children('ul').children('li:eq(1)').addClass('current');
		
		$(showContent).show();
		$(showContent).prev().find('i.dashicons').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up')
		.closest('div.documentation-title').next('.documentation-content').addClass('showing');
		var elemTopOffset = $(showContent).offset().top;
		
	;
		$(window).scrollTop(elemTopOffset-150);
	
	}	

});  

});

jQuery(document).ready(function($) {
    $("input:radio:checked").next('label').addClass("checked");

    $('input:radio').change(function(){


    	$(this).siblings('label').removeClass('checked')
    	
    	$(this).next('label').addClass('checked')




    });

});

