<?php
// Load scripts
function load_scripts()
{
  wp_enqueue_script('jquery');
  // Bootstrap
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap-css');

  wp_register_script('bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap-js');

  // Fontawesome
  wp_register_style('fontawesome-style', get_template_directory_uri() . '/dist/css/fontawesome.min.css', array(), false, 'all');
  wp_enqueue_style('fontawesome-style');

  wp_register_script('fontawesome-script', get_template_directory_uri() . '/dist/js/fontawesome.min.js', array(), '0.1', true);
  wp_enqueue_script('fontawesome-script');

  // Solid
  wp_register_style('fontawesome-solid-style', get_template_directory_uri() . '/dist/css/solid.min.css', array(), false, 'all');
  wp_enqueue_style('fontawesome-solid-style');

  wp_register_script('fontawesome-solid-script', get_template_directory_uri() . '/dist/js/solid.min.js', array(), '0.1', true);
  wp_enqueue_script('fontawesome-solid-script');

  // Brands
  wp_register_style('fontawesome-brands-style', get_template_directory_uri() . '/dist/css/brands.min.css', array(), false, 'all');
  wp_enqueue_style('fontawesome-brands-style');

  wp_register_script('fontawesome-brands-script', get_template_directory_uri() . '/dist/js/brands.min.js', array(), '0.1', true);
  wp_enqueue_script('fontawesome-brands-script');

  // Regular
  wp_register_style('fontawesome-regular-style', get_template_directory_uri() . '/dist/css/regular.min.css', array(), false, 'all');
  wp_enqueue_style('fontawesome-regular-style');

  wp_register_script('fontawesome-regular-script', get_template_directory_uri() . '/dist/js/regular.min.js', array(), '0.1', true);
  wp_enqueue_script('fontawesome-regular-script');

  // Styles
  wp_register_style('style', get_template_directory_uri() . '/dist/css/main.min.css');
  wp_enqueue_style('style');

  // Styles
  wp_register_style('glide', get_template_directory_uri() . '/assets/css/glide.core.css');
  wp_enqueue_style('glide');

  // Scripts
  wp_register_script('script', get_template_directory_uri() . '/dist/js/app.min.js', array(), '0.1', true);
  wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menu
register_nav_menus(
  array(
    'main-navigation' => 'Main Navigation',
    'mobile-navigation' => 'Mobile Navigation',
    'footer-navigation' => 'Footer Navigation',
  )
);

// Custom image sizes
add_image_size('oval-long', 775, 525, false);
add_image_size('project-thumb', 575, 475, false);
add_image_size('rectangle-small', 350, 375, false);
add_image_size('circle-small', 60, 60, false);

// Hide Editor on pages
function hide_editor()
{
  remove_post_type_support('page', 'editor');
  remove_post_type_support('page', 'title');
}
add_action('admin_init', 'hide_editor');

// Hide default posts & reactions
function hide_dashboard_menu_pages()
{
  remove_menu_page('edit.php'); // Remove "Posts" menu
  remove_menu_page('edit-comments.php'); // Remove "Comments" menu
}
add_action('admin_menu', 'hide_dashboard_menu_pages');

function modify_menu_link($items, $args)
{
  if ($args->theme_location == 'main-navigation') { // Replace 'primary-menu' with your actual menu location
    foreach ($items as $item) {
      if ($item->title == 'projecten') { // Replace 'Link Text' with the actual menu item text
        $item->url = 'http://localhost:3000/vectr/'; // Replace with the URL of the destination page
      }
    }
  }
  return $items;
}
add_filter('wp_nav_menu_objects', 'modify_menu_link', 10, 2);

// Custom logo
function custom_logo_setup()
{
  $defaults = array(
    'height' => 35,
    'width' => 200,
    'flex-height' => false,
    'flex-width' => false,
    'header-text' => array('site-title', 'site-description'),
    'unlink-homepage-logo' => false,
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_logo_setup');

// Custom footer logo
function footer_logo_support()
{
  add_theme_support(
    'custom-logo',
    array(
      'footer-logo' => __('Footer Logo', 'custom-footer-logo'),
    )
  );
}

add_action('after_setup_theme', 'footer_logo_support');

// Custom post type for the projects (by the students)
function projects_custom_post_type()
{
  $args = array(
    'labels' => array(
      'name' => 'Projects',
      'singular_name' => 'Project',
      'has_archive' => true,
    ),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array('title', 'thumbnail'),
  );

  register_post_type('projects', $args);
}

add_action('init', 'projects_custom_post_type');

function vectr_custom_post_type()
{
  $args = array(
    'labels' => array(
      'name' => 'Vectr',
      'singular_name' => 'Vectr project',
    ),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-businessman',
    'supports' => array('title', 'thumbnail'),
  );

  register_post_type('vectr', $args);
}

add_action('init', 'vectr_custom_post_type');

function projects_taxonomy()
{
  $args = array(
    'labels' => array(
      'name' => 'Vakken',
      'singular_name' => 'Vak'
    ),
    'public' => true,
    'hierarchical' => true,
  );
  register_taxonomy('vakken', array('projects', 'vectr', 'galerij'), $args);
}

add_action('init', 'projects_taxonomy');

// Enquiry form
add_action('wp_ajax_enquiry', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');
function enquiry_form()
{
  $formdata = [];

  wp_parse_str($_POST['enquiry'], $formdata);

  wp_send_json_success($formdata['']);
}

// Infinity scroll
function load_more_gallery()
{
  $page = $_POST['page'];

  // Customize your query to fetch additional gallery images
  $args = array(
    'post_type' => 'gallery',
    // Replace with your custom post type
    'posts_per_page' => 6,
    // Number of posts to load per request
    'paged' => $page,
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()):
      $query->the_post();
      // Output your gallery image HTML here
      // Example: echo '<img src="' . get_the_post_thumbnail_url() . '" />';
    endwhile;
    wp_reset_postdata();
  } else {
    echo 'no more'; // Indicates no more posts are available
  }

  die();
}

add_action('wp_ajax_load_more_gallery', 'load_more_gallery');
add_action('wp_ajax_nopriv_load_more_gallery', 'load_more_gallery');


?>