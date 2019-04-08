<?php
/**
 * smak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package smak
 */

if ( ! function_exists( 'smak_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function smak_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on smak, use a find and replace
		 * to change 'smak' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'smak', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'smak' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'smak_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'smak_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smak_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smak_content_width', 1140 );
}
add_action( 'after_setup_theme', 'smak_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smak_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'smak' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'smak' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'smak_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function smak_scripts() {
	
	wp_enqueue_style( 'smak-bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	
	
	wp_enqueue_style( 'smak-fontawsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
	
	
	
	wp_enqueue_script( 'smak-google', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '20140328', true );
	
	wp_enqueue_script( 'smak-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '20140328', true );
	
	wp_enqueue_script( 'smak-latest-js', 'http://code.jquery.com/jquery-latest.js', array('jquery'), '20140328', true );
	
	wp_enqueue_script( 'smak-google', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '20140328', true );
	
	
	
	wp_enqueue_script( 'smak-isotope-jquery', get_template_directory_uri() . '/src/js/jquery.isotope.js', array('jquery'), '20140328', true );
	wp_enqueue_style( 'smak-isotope-style', get_template_directory_uri() . '/src/css/isptope_style.css');
	
	wp_enqueue_style( 'smak-jquerysctipttop-style', get_template_directory_uri() . '/src/css/jquerysctipttop.css');
	
	wp_enqueue_style( 'smak-progressbar', get_template_directory_uri() . '/src/css/jQuery-plugin-progressbar.css');
	
	
	wp_enqueue_script( 'smak-google', 'http://code.jquery.com/jquery-2.1.4.min.js', array('jquery'), '20140328', true );
	
	wp_enqueue_script( 'smak-progressbarJS', get_template_directory_uri() . '/src/js/jQuery-plugin-progressbar.js', array('jquery'), '20170915', true );
	
	
		
	wp_enqueue_style( 'smak-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'smak-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'smak-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smak_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

