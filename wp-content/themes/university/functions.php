<?php
/**
 * university functions and definitions
 *
 * @package university
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

if ( ! function_exists( 'university_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function university_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on university, use a find and replace
	 * to change 'university' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'university', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );



		// Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'university' ),
		'social' => __( 'Social Menu', 'university'),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	//add_theme_support( //'custom-background', //apply_filters( //'university_custom_background_args//', array(
//		'default-color' => //'ffffff',
	//	'default-image' => '',
	//) ) );
//
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // university_setup
add_action( 'after_setup_theme', 'university_setup' );

/**
 * Enqueue scripts and styles.
 */
function university_scripts() {
	wp_enqueue_style( 'university-style', get_stylesheet_uri() );
	
		wp_enqueue_style( 'university-contnt-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );
		
			wp_enqueue_style( 'university-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,700,900,900italic,400italic|PT+Serif+Caption');
	
	wp_enqueue_style( 'university-fontawsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');


wp_enqueue_script( 'university-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );

wp_enqueue_script( 'university-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('university-superfish'), '20140328', true );

	wp_enqueue_script( 'university-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'university-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'university_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';