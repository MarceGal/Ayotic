<?php 

//*****************************************************
//**ADD JS THEME FUNCION**********************
//*****************************************************
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/
// https://stackoverflow.com/questions/19263390/wordpress-loading-multiple-scripts-with-enqueue
	
function mg_load_scripts() 
{
	
	//wp_dequeue_script('fancyBox');      
	//wp_dequeue_style('fancyBox');   	
	
	//wp_register_script('ayotic-barba', get_bloginfo('stylesheet_directory') .  '/assets/vendors/barba/barba.min.js' );
	wp_register_script('ayotic-script', get_bloginfo('stylesheet_directory') .  '/assets/js/main.js' );
	
	//wp_enqueue_script( 'ayotic-barba', '', array( 'jquery' ), '0.0.1', true );
	wp_enqueue_script( 'ayotic-script', '', array(), '0.0.1', true );
	
}

add_action( 'wp_enqueue_scripts', 'mg_load_scripts', 100 );

?>