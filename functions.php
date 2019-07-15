<?php
/**
 * AVAZ Theme Functions
 *
 *
 * @package AVAZ
 */

function avaz_setup() {
	
	// Classes
	require_once 'classes/walker_class.php';

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'avaz-featured-image', 2000, 1200, true );

	add_image_size( 'avaz-thumbnail-avatar', 100, 100, true );
	
	add_image_size( 'header-image', 1920, 800, true );
	
	add_image_size( 'block-image', 500, 500, true );
	
	add_image_size( 'portfolio-block-thumb-2cols', 560 );
	
	add_image_size( 'portfolio-block-thumb-3cols', 370 );
	

	// This theme uses wp_nav_menu() in one locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'avaz' ),
		'main'    => __( 'Main Menu', 'avaz' ),
		'mobile'    => __( 'Mobile Menu', 'avaz' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	// remove emjoi styles & scripts
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
	remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// prevent auto adding of p tags to content editor
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	
}
add_action( 'after_setup_theme', 'avaz_setup' );

// enqueue styles and scripts */
function avaz_enqueue_assets() {	
	// normalize
	wp_enqueue_style( 'normalize-css' , get_template_directory_uri() . '/assets/css/normalize.min.css' );
	
	// azmd-animation
	// wp_enqueue_style( 'azmd-animation-css' , get_template_directory_uri() . '/assets/css/avaz.animation.css' );
	
	// owl carousel
	wp_enqueue_style( 'owl-css' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	
	// uikit
	wp_enqueue_style( 'uikit-css' , get_template_directory_uri() . '/assets/css/uikit.min.css' );
	
	// fonts
	wp_enqueue_style( 'fonts-css' , get_template_directory_uri() . '/assets/css/fonts.css' );
	
	// pixeicons
	wp_enqueue_style( 'pixeicons-css' , get_template_directory_uri() . '/assets/css/pixeicons.css' );
	
	// font awesome icons 4.7
	wp_enqueue_style( 'fontawesome-css' , get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	
	// theme's primary style.css file
	wp_enqueue_style( 'avaz-css' , get_stylesheet_uri() );
	
	// loading scripts

	wp_enqueue_script( 'avaz-anime-js', get_template_directory_uri() . '/assets/js/anime.min.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'avaz-animation-js', get_template_directory_uri() . '/assets/js/avaz.animation.js', '', '1.0.0', true );
	wp_enqueue_script( 'avaz-uikit-js', get_template_directory_uri() . '/assets/js/uikit.min.js', array('jquery'), '3.0.0' );
	// wp_enqueue_script( 'avaz-isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.6', true );
	// wp_enqueue_script( 'avaz-front-js', get_template_directory_uri() . '/assets/js/front.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'avaz-uikit-icons-js', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array('jquery'), '3.0.3' );
	wp_enqueue_script( 'avaz-owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
	// wp_enqueue_script( 'avaz-validate-js', get_template_directory_uri() . '/assets/js/validate.js', array('jquery'), '1.11.0', true );
	wp_enqueue_script( 'avaz-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	
}
add_action( 'wp_enqueue_scripts' , 'avaz_enqueue_assets' );

function avaz_load_more_scripts() {
	
	if ( is_home() ) {
 
	global $wp_query; 
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'avaz_loadmore', get_stylesheet_directory_uri() . '/assets/js/avazloadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'avaz_loadmore', 'avaz_loadmore_params', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'avaz_loadmore' ); }
}
 
add_action( 'wp_enqueue_scripts', 'avaz_load_more_scripts' );

function avaz_loadmore_ajax_handler(){
	
	get_template_part( 'template-parts/post/post', 'upper' );
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
	
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
		get_template_part( 'template-parts/post/post', 'block' );
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
	
	get_template_part( 'template-parts/post/post', 'lower' );
}

add_action('wp_ajax_loadmore', 'avaz_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'avaz_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


// Return an alternate title, without prefix, for every type used in the get_the_archive_title().
add_filter('get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
            $title = _x( 'Asides', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
            $title = _x( 'Galleries', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
            $title = _x( 'Images', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
            $title = _x( 'Videos', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
            $title = _x( 'Quotes', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
            $title = _x( 'Links', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
            $title = _x( 'Statuses', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
            $title = _x( 'Audio', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
            $title = _x( 'Chats', 'post format archive title' );
        }
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } else {
        $title = __( 'Blog' );
    }
    return $title;
});

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


/* options page */


add_action( 'admin_menu', 'azto_add_admin_menu' );
add_action( 'admin_init', 'azto_settings_init' );


function azto_add_admin_menu(  ) { 

	add_menu_page( 'Avaz Theme Options', 'Avaz Theme Options', 'manage_options', 'avaz_theme_options', 'azto_options_page' );

}


function azto_settings_init(  ) { 

	register_setting( 'pluginPage', 'azto_settings' );

	add_settings_section(
		'azto_pluginPage_section', 
		__( 'Your section description', 'wordpress' ), 
		'azto_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'azto_text_field_0', 
		__( 'Settings field description', 'wordpress' ), 
		'azto_text_field_0_render', 
		'pluginPage', 
		'azto_pluginPage_section' 
	);

	add_settings_field( 
		'azto_select_field_1', 
		__( 'Settings field description', 'wordpress' ), 
		'azto_select_field_1_render', 
		'pluginPage', 
		'azto_pluginPage_section' 
	);

	add_settings_field( 
		'azto_text_field_2', 
		__( 'Settings field description', 'wordpress' ), 
		'azto_text_field_2_render', 
		'pluginPage', 
		'azto_pluginPage_section' 
	);

	add_settings_field( 
		'azto_radio_field_3', 
		__( 'Settings field description', 'wordpress' ), 
		'azto_radio_field_3_render', 
		'pluginPage', 
		'azto_pluginPage_section' 
	);

	add_settings_field( 
		'azto_textarea_field_4', 
		__( 'Settings field description', 'wordpress' ), 
		'azto_textarea_field_4_render', 
		'pluginPage', 
		'azto_pluginPage_section' 
	);


}


function azto_text_field_0_render(  ) { 

	$options = get_option( 'azto_settings' );
	?>
	<input type='text' name='azto_settings[azto_text_field_0]' value='<?php echo $options['azto_text_field_0']; ?>'>
	<?php

}


function azto_select_field_1_render(  ) { 

	$options = get_option( 'azto_settings' );
	?>
	<select name='azto_settings[azto_select_field_1]'>
		<option value='1' <?php selected( $options['azto_select_field_1'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['azto_select_field_1'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function azto_text_field_2_render(  ) { 

	$options = get_option( 'azto_settings' );
	?>
	<input type='text' name='azto_settings[azto_text_field_2]' value='<?php echo $options['azto_text_field_2']; ?>'>
	<?php

}


function azto_radio_field_3_render(  ) { 

	$options = get_option( 'azto_settings' );
	?>
	<input type='radio' name='azto_settings[azto_radio_field_3]' <?php checked( $options['azto_radio_field_3'], 1 ); ?> value='1'>
	<?php

}


function azto_textarea_field_4_render(  ) { 

	$options = get_option( 'azto_settings' );
	?>
	<textarea cols='40' rows='5' name='azto_settings[azto_textarea_field_4]'> 
		<?php echo $options['azto_textarea_field_4']; ?>
 	</textarea>
	<?php

}


function azto_settings_section_callback(  ) { 

	echo __( 'This section description', 'wordpress' );

}


function azto_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Avaz Theme Options</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}


