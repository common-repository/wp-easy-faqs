<?php  
/**
 * Dynamic CSS Settings for front-page display Options.
 */

?>

<style type="text/css">
	
/* Style the buttons that are used to open and close the accordion panel */
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion {
    background-color:<?php echo (!empty($wp_easy_faq_saved_settings['col-quest-tab'])) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-tab'] ) : '#4e4e4e' ?> ;
    color:<?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#fff' ?> ;
    cursor: pointer;
    padding: 12px 70px 12px 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    border-radius: 0;
    margin-bottom: 1px;

}

.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion-active {

     background-color:<?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-tab-act'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-tab-act'] ) : '#000' ?>;
    z-index: 9999;


}

.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-plus, 
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-left,
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-left-alt2,
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-up,
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-right-alt2{
    /* Unicode character for "plus" sign (+) */
        font-size: 20px;
    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#fff' ?> ;
    float: right;
    margin-left: 5px;
    margin-right: -60px;
     opacity: 0.7;

}
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-minus, 
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-down,
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-down-alt2,
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion .dashicons-arrow-down {
      /* Unicode character for "minus" sign (-) */
          font-size: 20px;
      float: right;
    margin-left: 5px;
    margin-right: -60px;
     opacity: 0.7;
    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#fff' ?> ;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion:active {
    background-color:<?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-tab-act'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-tab-act'] ) : '#4e4e4e' ?>;
    z-index: 9;
}

.wp-easy-faq-<?php echo $atts['id']; ?> button.accordion:hover {

	background-color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-tab-hov'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-tab-hov'] ):' ; opacity: 0.6'?>;
    

    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text-hov'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text-hov'] ) : '#fff' ?>;
}

/* Style the accordion panel. Note: hidden by default */
.wp-easy-faq-<?php echo $atts['id']; ?> div.panel {
    padding: 0 18px;
    background-color: #fff;
    display: none;
    overflow: hidden;
    border-bottom: 1px solid #fff !important;
    margin: 0;
    border: none;
    box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
}

/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
.wp-easy-faq-<?php echo $atts['id']; ?> div.panel.show {
    opacity: 1;
    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
}

.wp-easy-faq-<?php echo $atts['id']; ?> h3.faq-question-plist{

color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#000' ?> ;


}

.wp-easy-faq-title.wp-easy-faq-<?php echo $atts['id']; ?>{

    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-faq-title'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-faq-title'] ) : '#111111' ?> ;
}
.wp-easy-faq-<?php echo $atts['id']; ?> .wp-easy-faq-accordion-wrapper .panel p {
    margin-top: 15px;
}

.wp-easy-faq-<?php echo $atts['id']; ?> .faq-ans-section{

    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-ans-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-ans-text'] ) : '#000' ?> ;

    margin-top: 15px;

}

.wp-easy-faq-<?php echo $atts['id']; ?> a.faq-admin-link {

    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#fff' ?> ;
    
}


.wp-easy-faq-<?php echo $atts['id']; ?> a.faq-edit-link{

    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#fff' ?> ;
    
}

.wp-easy-faq-<?php echo $atts['id']; ?> .faq-icon-list a {
    color: <?php echo (!empty( $wp_easy_faq_saved_settings['col-quest-text'] )) ? esc_attr( $wp_easy_faq_saved_settings['col-quest-text'] ) : '#000' ?> ;
}

</style>

<?php

