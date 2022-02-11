<?php

/**
 * Online Education Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Online_Education_Theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function online_education_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Online Education Theme, use a find and replace
		* to change 'online-education-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('online-education-theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'online-education-theme'),
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
			'online_education_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'online_education_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function online_education_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('online_education_theme_content_width', 640);
}
add_action('after_setup_theme', 'online_education_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function online_education_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'online-education-theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'online-education-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'online_education_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function online_education_theme_scripts()
{
	wp_enqueue_style('online-education-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('google-font-lora', '//fonts.googleapis.com/css?family=Lora:400,400i,700,700i', array(), _S_VERSION);
	wp_enqueue_style('online-education-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-flaticon', get_template_directory_uri() . '/assets/flaticon/flaticon.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-lightcase', get_template_directory_uri() . '/assets/css/lightcase.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-quick-view', get_template_directory_uri() . '/assets/css/quick-view.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-nstSlider', get_template_directory_uri() . '/assets/css/jquery.nstSlider.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('online-education-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);

	wp_style_add_data('online-education-theme-style', 'rtl', 'replace');

	wp_enqueue_script('online-education-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-swiper', get_template_directory_uri() . '/assets/js/swiper.jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-velocity', get_template_directory_uri() . '/assets/js/velocity.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-quick-view', get_template_directory_uri() . '/assets/js/quick-view.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-nstSlider', get_template_directory_uri() . '/assets/js/jquery.nstSlider.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('online-education-custom', get_template_directory_uri() . '/	assets/js/custom.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'online_education_theme_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// New Role - Student
add_role('student_role', __('Student'), array('read' => true));

// Redirect student accounts out of admin and onto homepage
add_action('admin_init', 'redirectStudentToFrontend');

function redirectStudentToFrontend()
{
	$ourCurrentUser = wp_get_current_user();

	if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'student_role') {
		wp_redirect(site_url('/'));
		exit;
	}
}

add_action('wp_loaded', 'noStudentAdminBar');

function noStudentAdminBar()
{
	$ourCurrentUser = wp_get_current_user();

	if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'student_role') {
		show_admin_bar(false);
	}
}

// Redirect to homepage on logout
add_action('wp_logout', 'auto_redirect_after_logout');

function auto_redirect_after_logout()
{
	wp_safe_redirect(home_url());
	exit;
}

// Course Custom Post Type
function create_project_type()
{

	register_post_type(
		'courses',
		// CPT Options
		array(
			'supports' => array(
				'title', 'editor', 'thumbnail', 'excerpt'
			),
			'labels' => array(
				'name' => __('Courses'),
				'singular_name' => __('Course')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'courses'),
			'show_in_rest' => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-welcome-write-blog',

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_project_type');
