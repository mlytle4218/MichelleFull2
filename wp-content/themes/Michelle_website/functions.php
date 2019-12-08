<?php

	// error_log("message", 3, 'errors.txt');

// Load the theme stylesheets
function theme_styles()  
{ 
	//load up the css
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// echo get_template_directory_uri();
	wp_enqueue_style( 'myStyle', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_style( 'lightGalleryStyle', get_template_directory_uri() . '/css/lightgallery.min.css' );
}

function theme_js() {
//	wp_deregister_script('jquery');
	wp_enqueue_script('jquery2', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery2'));
//    wp_enqueue_script( 'lightgallery-js', get_template_directory_uri() . '/js/lightgallery.min.js', array('jquery'));
//    wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/js/lg-thumbnail.js', array('jquery'));
}

// add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 250, 250, true ); // default Featured Image dimensions (cropped)
    // set_post_thumbnail_size( 250, 250 ); // default Featured Image dimensions (cropped)
    set_post_thumbnail_size('my-thumbnail', 250, 250, array( 'center', 'center')  ); // 50 pixels wide by 50 pixels tall, crop from the center

 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 200, 200, array( 'center', 'center') ); 
    // add_filter('image_size_names_choose', 'my_image_sizes');
 }

add_action('wp_enqueue_scripts', 'theme_js' );
add_action('wp_enqueue_scripts', 'theme_styles');


?>
