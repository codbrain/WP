<?php
/**
 * Law functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Law
 */

if ( ! function_exists( 'law_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function law_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Law, use a find and replace
		 * to change 'law' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'law', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'law' ),
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
		add_theme_support( 'custom-background', apply_filters( 'law_custom_background_args', array(
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
add_action( 'after_setup_theme', 'law_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function law_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'law_content_width', 640 );
}
add_action( 'after_setup_theme', 'law_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function law_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'law' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'law' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'law_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function law_scripts() {
	wp_enqueue_style( 'law-style', get_stylesheet_uri() );
	wp_enqueue_style( 'law-googlefonts', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800' );
	wp_enqueue_style( 'law-animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'law-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
	wp_enqueue_style( 'law-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'law-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'law-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'law-owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'law-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css' );
	wp_enqueue_style( 'law-theme', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'law-custom', get_template_directory_uri() . '/assets/css/law.css' );

	wp_enqueue_script( 'law-modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js' );
	wp_enqueue_script( 'law-respond-js', get_template_directory_uri() . '/assets/js/respond.min.js' );
    wp_script_add_data('law-respond-js', 'conditional', 'lt IE 9');

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'law-jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '', true );
	wp_enqueue_script( 'law-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'law-jquery-waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '', true );
	wp_enqueue_script( 'law-jquery-stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), '', true );
	wp_enqueue_script( 'law-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'law-jquery-flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), '', true );
	wp_enqueue_script( 'law-jquery-countTo-js', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array(), '', true );
	wp_enqueue_script( 'law-jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '', true );
	wp_enqueue_script( 'law-magnific-popup-options-js', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', array(), '', true );
	wp_enqueue_script( 'law-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'law_scripts' );

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

require_once get_template_directory() . '/inc/tgm/tgm.php';