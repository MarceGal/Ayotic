<?php 
/*
function mg_load_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_directory'). '/assets/css/style.css',false,'0.0.1','all');

}

add_action('wp_enqueue_scripts', 'mg_load_styles');
*/

/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////

function mg_load_styles() {
	
	
	//Salient\nectar\helpers\enqueue-styles.php
	
	wp_dequeue_style( 'nectar-slider' );
    wp_deregister_style( 'nectar-slider' );
	
	wp_dequeue_style( 'nectar-portfolio' );
    wp_deregister_style( 'nectar-portfolio' );
	
	wp_dequeue_style( 'nectar-flickity' );
    wp_deregister_style( 'nectar-flickity' );
	
	wp_dequeue_style( 'twentytwenty' );
    wp_deregister_style( 'twentytwenty' );
	
	wp_dequeue_style( 'nectar-image-with-hotspots' );
    wp_deregister_style( 'nectar-image-with-hotspots' );
	
	wp_dequeue_style( 'nectar-element-fancy-box' );
    wp_deregister_style( 'nectar-element-fancy-box' );	
	
	wp_dequeue_style( 'nectar-element-flip-box' );
    wp_deregister_style( 'nectar-element-flip-box' );
	
	wp_dequeue_style( 'nectar-element-category-grid' );
    wp_deregister_style( 'nectar-element-category-grid' );
	
	wp_dequeue_style( 'nectar-element-post-grid' );
    wp_deregister_style( 'nectar-element-post-grid' );
			
	wp_dequeue_style( 'font-awesome' );
    wp_deregister_style( 'font-awesome' );
		
	wp_dequeue_style( 'woocommerce' );
    wp_deregister_style( 'woocommerce' );
		  	  
	wp_dequeue_style( 'iconsmind' );
    wp_deregister_style( 'iconsmind' );  
		  	  
	//wp_dequeue_style( 'dashicons' );
    //wp_deregister_style( 'dashicons' );  
	
	wp_dequeue_style( 'wp-color-picker' );
    wp_deregister_style( 'wp-color-picker' ); 
	
	wp_dequeue_style( 'magnific' );
    wp_deregister_style( 'magnific' ); 
		
	wp_dequeue_style( 'nectar-element-fancy-box' );
    wp_deregister_style( 'nectar-element-fancy-box' );	

	wp_dequeue_style( 'fancyBox' );
    wp_deregister_style( 'fancyBox' ); 
	
	wp_dequeue_style( 'nectar-element-testimonial' );
    wp_deregister_style( 'nectar-element-testimonial' ); 	    
      
    /*
	wp_enqueue_style('dynamic-css');
    wp_deregister_style('dynamic-css');
    */
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_directory'). '/assets/css/style.css',false,'0.8.0','all');

}


add_action('wp_enqueue_scripts', 'mg_load_styles', 100 );

?>
