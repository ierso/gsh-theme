<?php
/**
 * gsh functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gsh
 */

if ( ! function_exists( 'gsh_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gsh_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gsh, use a find and replace
	 * to change 'gsh' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gsh', get_template_directory() . '/languages' );

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

	// Register Customer Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'gsh' ),
	) );

	function register_my_menus() {
	  	register_nav_menus(
		    array(
		      'primary-menu' => __( 'Primary' ),
		      'top-menu' => __( 'Top Menu' ),
					'master-menu' => __('Master Menu'),
		      'site-menu' => __( 'Site Map' )
		    )
	  	);
	}
	add_action( 'init', 'register_my_menus' );


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
	add_theme_support( 'custom-background', apply_filters( 'gsh_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'gsh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gsh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gsh_content_width', 640 );
}
add_action( 'after_setup_theme', 'gsh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gsh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gsh' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gsh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
    'name'          => __( 'Connect With Us', 'cp' ),
    'id'            => 'connect-sidebar',
    'description'   => 'Connect With Us Sidebar',
    'before_widget' => '<aside id="connect-wrapper" class="connect-wrapper">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4 class="connect-title">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'gsh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gsh_scripts() {
	wp_enqueue_style( 'gsh-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gsh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gsh-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all' );

	wp_enqueue_script( 'bootstrap-js' );

	wp_register_script( 'slide-toggle', get_template_directory_uri() . '/js/toggle-slide.js', array( 'jquery' ), '3.3.7', true );

	wp_enqueue_script( 'slide-toggle' );

	wp_enqueue_style( 'bootstrap-css' );

	wp_register_style( 'gsh-css', get_template_directory_uri() . '/style.css', array(), '0.0.1','all' );

	wp_enqueue_style( 'gsh-css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gsh_scripts' );

remove_filter('the_content', 'wpautop');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function cory_krumbz() {

  /*$thistitle = wp_title('>', false);

  $page = get_queried_object();

  $parentpages = get_the_title($page->post_parent);

  echo $parentpages ." ". $thistitle;*/

  $delimiter = ' > ';
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';
  echo '<a href="Home">Home</a> > ';
  if ( !is_home() && !is_front_page() || is_paged() ) {
    global $post;
    if ( is_page() && !$post->post_parent ) {
        echo $currentBefore;
        the_title();
        echo $currentAfter; }
    elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
    }
  }

}
