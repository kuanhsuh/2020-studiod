<?php

/**
 * studiod functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package studiod
 */

if (!function_exists('studiod_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function studiod_setup()
  {
    /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on studiod, use a find and replace
         * to change 'studiod' to the name of your theme in all the template files.
         */
    load_theme_textdomain('studiod', get_template_directory() . '/languages');

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
    register_nav_menus(array(
      'menu-1' => esc_html__('Primary', 'studiod'),
    ));

    /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('studiod_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ));
  }
endif;
add_action('after_setup_theme', 'studiod_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studiod_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('studiod_content_width', 640);
}
add_action('after_setup_theme', 'studiod_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studiod_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'studiod'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'studiod'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'studiod_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function studiod_scripts()
{
  wp_enqueue_style('studiod-style', get_stylesheet_uri());

  wp_enqueue_script('studiod-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

  wp_enqueue_script('studiod-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'studiod_scripts');

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

/**
 * CUSTOM Functions
 * Load Styles
 */

function wpb_adding_styles()
{
  // wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  // wp_register_style('icons', get_template_directory_uri() . '/assets/css/elegant-icons.css', array('bootstrap'));
  wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500&display=swap&subset=chinese-traditional', false);
  wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/tailwind-prod.css');
  wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
  wp_register_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_register_style('owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
  wp_register_style('venobox', get_template_directory_uri() . '/assets/css/venobox.css');
  wp_register_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
  wp_enqueue_style('wpb-google-fonts');
  wp_enqueue_style('tailwind-style');
  wp_enqueue_style('animate');
  wp_enqueue_style('owl');
  wp_enqueue_style('owltheme');
  wp_enqueue_style('venobox');
  wp_enqueue_style('magnific');
}
add_action('wp_enqueue_scripts', 'wpb_adding_styles', 1);


function wpb_adding_scripts()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, true);
  // wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
  wp_register_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array('bootstrap'), false, true);
  wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('easing'), false, true);
  wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('wow'), false, true);
  wp_register_script('magnific', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('owl'), false, true);
  // wp_register_script('scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('magnific'), false, true);
  wp_register_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('magnific'), false, true);
  if (is_page_template('page-home.php')) {
    wp_register_script('typed', get_template_directory_uri() . '/
    assets/js/typed.min.js', array('ajaxchimp'), false, true);
    wp_register_script('text-type', get_template_directory_uri() . '/assets/js/text-typed.js', array('typed'), false, true);
  }
  if (is_page_template('page-home.php')) {
    wp_register_script('venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array('text-type'), false, true);
  } else {
    wp_register_script('venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array('ajaxchimp'), false, true);
  }
  wp_register_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'venobox'), false, true);
  wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'wpb_adding_scripts');

function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length()
{
  return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
  return $excerpt;
}

//Exlude cats from the_category()
function incomplete_cat_list($separator)
{
  $first_time = 1;
  foreach ((get_the_category()) as $category) {
    if ($category->cat_name != '未分類') {
      if ($first_time == 1) {
        echo '<a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a>';
        $first_time = 0;
      } else {
        echo $separator . '<a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a>';
      }
    }
  }
}

function add_image_class($class)
{
  $class .= ' border';
  return $class;
}
add_filter('get_image_tag_class', 'add_image_class');
