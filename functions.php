<?php
/**
 * Marinate The Restaurant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marinate_The_Restaurant
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marinate_the_restaurant_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Marinate The Restaurant, use a find and replace
		* to change 'marinate-the-restaurant' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'marinate-the-restaurant', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'marinate-the-restaurant' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'marinate_the_restaurant_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'marinate_the_restaurant_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marinate_the_restaurant_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marinate_the_restaurant_content_width', 640 );
}
add_action( 'after_setup_theme', 'marinate_the_restaurant_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marinate_the_restaurant_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'marinate-the-restaurant' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'marinate-the-restaurant' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'marinate_the_restaurant_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marinate_the_restaurant_scripts() {
	wp_enqueue_style( 'marinate-the-restaurant-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'vendors', get_template_directory_uri() . '/assets/css/vendors.min.css', array() );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	//index2.html
  wp_enqueue_style( 'flex slider', get_template_directory_uri() . '/assets/css/flex_slider.css', array() );
	wp_enqueue_style( 'wizard', get_template_directory_uri() . '/assets/css/wizard.css', array() );
	wp_enqueue_style( 'vegas', get_template_directory_uri() . '/assets/css/vegas.min.css', array());
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/assets/css/day_menu.css', array());
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', array() );

	wp_enqueue_script( 'common_scripts', get_template_directory_uri() . '/assets/js/common_scripts.min.js', array(), '', true );
	//index2.html
  // wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), '', true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '', true );
	// wp_enqueue_script( 'slider-2', get_template_directory_uri() . '/assets/js/slider_2.js', array(), '', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), '', true );
	wp_enqueue_script( 'common_func', get_template_directory_uri() . '/assets/js/common_func.js', array(), '', true );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/day_menu.js', array(), '', true );
	//index3.hmtl
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(),'', true );
	wp_enqueue_script( 'video-header', get_template_directory_uri() . '/assets/js/video_header.min.js', array(), '', true );

  //index5.html
	wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/js/typed.min.js', array(), '', true );

  //SPECIFIC SCRIPTS (wizard form)
  wp_enqueue_script( 'wizard_script', get_template_directory_uri() . '/assets/js/wizard/wizard_scripts.min.js', array(), '', true );
	wp_enqueue_script( 'wizard_func', get_template_directory_uri() . '/assets/js/wizard/wizard_func.js', array(), '', true );




  // wp_style_add_data( 'marinate-the-restaurant-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'marinate-the-restaurant-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marinate_the_restaurant_scripts' );

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



/**
 * Get the assets folder path using `get_template_directory_uri`.
 *
 * @param string $path Path or name of the asset.
 *
 * @return string Returns the full path of the asset.
 */
function asset_path($path, $echo = false)
{
	if (!$path) {
		return '';
	}

	$asset_url = '';

	$base_path = get_template_directory_uri() . '/assets';

	$asset_url = $path[0] === '/'
		? $base_path . $path
		: $base_path . '/' . $path;

	if (!$echo) {
		return $asset_url;
	}

	echo $asset_url;
}