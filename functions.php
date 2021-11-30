<?php
/**
 * heritage-palli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package heritage-palli
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'heritage_palli_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function heritage_palli_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on heritage-palli, use a find and replace
		 * to change 'heritage-palli' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'heritage-palli', get_template_directory() . '/languages' );

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
				'nav-menu' => esc_html__( 'Nav Menu', 'heritage-palli' ),
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
				'heritage_palli_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'heritage_palli_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function heritage_palli_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'heritage_palli_content_width', 640 );
}
add_action( 'after_setup_theme', 'heritage_palli_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function heritage_palli_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'heritage-palli' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'heritage-palli' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Nav', 'heritage-palli' ),
			'id'            => 'footer-nav',
			'description'   => esc_html__( 'Add widgets here.', 'heritage-palli' ),
			'before_widget' => '<div id="%1$s" class="grid grid-cols-1 md:grid-cols-3 gap-x-10 gap-y-4 text-center md:text-left">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'heritage-palli' ),
			'id'            => 'copyright',
			'description'   => esc_html__( 'Add widgets here.', 'heritage-palli' ),
			'before_widget' => '<div id="%1$s" class="copyright">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'heritage_palli_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heritage_palli_scripts() {
	// Tailwind
	wp_enqueue_style( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' );
	// Unicons
	wp_enqueue_style( 'unicons', 'https://unicons.iconscout.com/release/v4.0.0/css/line.css' );
	// Responsive Menu CSS
	wp_enqueue_style( 'heritage-palli-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), _S_VERSION );
	// Style sheet
	wp_enqueue_style( 'heritage-palli-style', get_stylesheet_uri(), array(), _S_VERSION );
	// Custom CSS
	wp_enqueue_style( 'heritage-palli-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), time() );

	// Mobile Menu JS
    wp_enqueue_script( 'heritage-palli-jquery.meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array( 'jquery' ), _S_VERSION, true );
    // Main JS
    wp_enqueue_script( 'heritage-palli-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'heritage_palli_scripts' );


/**
 * Custom product Search Form
 */

function heritage_palli_search_form() {
    $link    = esc_url( get_home_url() );
    $newform = <<<FORM
<form role="search" method="get" class="woocommerce-product-search" action="$link">
    <div class="search">
        <input type="search" placeholder="Search..." value="" name="s" autocomplete="off">
        <span class="search-icon"><i class="uil uil-search"></i></span>
        <input type="hidden" name="post_type" value="product" />
    </div>
</form>
FORM;
    return $newform;
}


add_filter("get_product_search_form", "heritage_palli_search_form");


/**
 * Custom hooks
 */
if ( class_exists( 'WooCommerce' ) ) {
	require 'woocommerce/woocommerce-template-hooks.php';
	require 'woocommerce/woocommerce-template-functions.php';
}

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
