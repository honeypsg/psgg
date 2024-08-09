<?php
function bootstrap_theme_support() {
  add_theme_support( 'custom-logo' );
  add_theme_support('menus');
  add_theme_support('woocommerce');
  add_theme_support('widgets');
  // add_theme_support( 'wc-product-gallery-zoom' );
  // add_theme_support( 'wc-product-gallery-lightbox' );
  // add_theme_support( 'wc-product-gallery-slider' );

  }
  add_action( 'after_setup_theme', 'bootstrap_theme_support' );
if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

//add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('title-tag');
add_image_size( 'profile-image', 600, 688, true );
add_image_size( 'eyelid', 600, 372, true );

if (function_exists('acf_add_options_page')) {
  acf_add_options_page('Theme Settings');
}
function get_theme_version_number() {
    $theme = wp_get_theme();
    return $theme->get('Version');
}
/**
 * Proper way to enqueue scripts and styles
 */
 
 function enqueue_google_fonts() {
     // Add preconnect links for Google Fonts
     echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . PHP_EOL;
     echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . PHP_EOL;
 }
add_action( 'wp_head', 'enqueue_google_fonts' );
function bootstrap_theme_scripts_styles()
{
 $filename = get_stylesheet_directory().'/style.css';
  wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime($filename));
  wp_enqueue_style(
    'bootstrap-css',
    get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css',[],'5.3.0'
  );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700&display=swap', array(), null );
  wp_enqueue_script(
    'bootstrap-js',
    get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.bundle.min.js',
    ['jquery'],
    '5.3.0',
    true
  );
 wp_enqueue_script(
    'select2',
    'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
    ['jquery'],
    '4.1.0-rc',
    true
  );
  wp_enqueue_script(
    'jquery-ui',
    'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
    ['jquery'],    
    '1.12.1',
    true
  );
  wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null );
 
  wp_enqueue_style(
   'fancybox',
   '//cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css',[],'4.0'
  );
  
  wp_enqueue_script(
   'fancybox',
   '//cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js',
   ['jquery'],
   '4.0',
   true
  );
 
  wp_enqueue_script(
    'AOS',
    'https://unpkg.com/aos@next/dist/aos.js',
    ['jquery'],
    '3.0',
    false
  );
    
  wp_enqueue_style('AOS', 'https://unpkg.com/aos@next/dist/aos.css', array(), null );  

  wp_enqueue_script(
    'slick',
    '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    ['jquery'],
    '1.8.1',
    true
  );
  wp_enqueue_script(
    'cookies',
    'https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js',
    ['jquery'],
    '3.0.5',
    true
  );
  wp_enqueue_script(
    'site-script',
    get_template_directory_uri() . '/inc/jquery.site.script.js',
    ['jquery'],
    get_theme_version_number(),
    true
  );
}

add_action('wp_enqueue_scripts', 'bootstrap_theme_scripts_styles');

function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


/* Add menus to the site  */
if (
  !file_exists(
    get_template_directory() . '/inc/bootstrap/bootstrap-5-wordpress-navbar-walker.php'
  )
) {
  // file does not exist... return an error.
  return new WP_Error(
    'class-wp-bootstrap-navwalker-missing',
    __(
      'It appears the class-wp-bootstrap-navwalker.php file may be missing.',
      'wp-bootstrap-navwalker'
    )
  );
} 

/* Add classes to body */
function add_slug_body_class($classes)
{
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_slug_body_class');

/* Basic Menus */
function register_my_menus()
{
  register_nav_menus([
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
  ]);
}
//add_action('init', 'register_my_menus');

function custom_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( 'image_editor_output_format', function( $formats ) {
  $formats['image/jpeg'] = 'image/webp';
  return $formats;
} );

function redirect_404_to_front_page() {
    if (is_404()) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'redirect_404_to_front_page');

function generateCamelCase($input) {
  // Extract the first two words
  $words = explode(' ', $input, 3); // Limit to 3 to keep any remaining words intact
  $firstTwoWords = implode(' ', array_slice($words, 0, 2));

  // Remove special characters
  $cleanedString = preg_replace('/[^a-zA-Z0-9\s]/', '', $firstTwoWords);

  // Convert to camel case
  $words = explode(' ', $cleanedString);
  $camelCase = lcfirst(implode('', array_map('ucfirst', $words)));

  return $camelCase;
}

function extract_oembed_url($oembed_value) {
  preg_match('/src="([^"]+)"/', $oembed_value, $matches);
  if (isset($matches[1])) {
      // Extracted URL from the src attribute
      $oembed_url = $matches[1];
      return esc_url($oembed_url);
  }
  return null;
}