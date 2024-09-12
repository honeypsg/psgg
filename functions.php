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

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
      $id = 'menu-item-' . $item->ID; // Custom ID based on menu item ID
      $output .= sprintf( '<li id="%s" class="%s"><a href="%s">%s</a>',
          esc_attr( $id ),
          esc_attr( implode( ' ', $item->classes ) ),
          esc_attr( $item->url ),
          esc_html( $item->title )
      );
  }
}

//add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('title-tag');
add_image_size( 'profile-image', 600, 688, true );

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



  wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null );


  wp_enqueue_script(
    'slick1',
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

function hide_preloader_script() {
  ?>
  <script>
      window.addEventListener('load', function () {
          const preloader = document.getElementById('preloader');
          preloader.style.display = 'none';
      });
  </script>
  <?php
}
add_action('wp_footer', 'hide_preloader_script');

