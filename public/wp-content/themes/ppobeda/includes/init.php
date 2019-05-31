<?php
/**
 * ppobeda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ppobeda
 */

/**
 * Enqueue scripts and styles.
 */
if ( !is_admin() ) {
  add_action( 'wp_print_styles', 'ppobeda_style_method' );
}
function ppobeda_style_method () {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap-ppobeda.css", '', '', '' );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/css/concat.css", '', '', '' );
}

add_action('wp_enqueue_scripts', 'ppobeda_scripts_method');
function ppobeda_scripts_method()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', "https://yastatic.net/jquery/2.0.3/jquery.min.js", '', '', 'true');
    wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js", '', '', 'true');
    wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js", '', '', 'true');
    wp_enqueue_script('pushy', get_template_directory_uri() . "/js/pushy.min.js", '', '', 'true');
    // wp_enqueue_script('fancybox', get_template_directory_uri() . "/js/jquery.fancybox.min.js", '', '', 'true');
    // wp_enqueue_script('script', get_template_directory_uri() . "/js/script.js", '', '', 'true');
}

function ppobeda_register_menu(){
  register_nav_menus(array(
      'main_menu'  => __('Основное меню'),
      'aside_menu' => __('Боковое меню'),
  ));
}
if (function_exists('register_nav_menus')) {
  add_action( 'init', 'ppobeda_register_menu' );
}

function ppobeda_register_sidebar(){
  if (function_exists('register_sidebar')) register_sidebar(array(
      'id' => 'shop',
      'name' => 'Боковое меню',
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<div id="%1$s" class="search widget %2$s">',
      'after_widget' => '</div>'
  ));
}
add_action( 'widgets_init', 'ppobeda_register_sidebar' );

// Отключаем сжатие изображений
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');
 
// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
 
// Отключаем события REST API
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
 
// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
 
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );
 
remove_filter( 'the_content', 'wptexturize' ); /* убираем авотдобавление параграфиов */
remove_action( 'wp_head', 'wp_resource_hints', 2 ); /* удаляем dns-prefetch */
 
// Удаляем автоподстановку размера картинок
function remove_thumbnail_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
 
// убираем emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
 
// Убираем мусор из шапки
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
 
/* удаляем shortlink и canonical */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action ('wp_head', 'rel_canonical');
 
// Убираем RSS
function fb_disable_feed() {
  wp_redirect(get_option('siteurl'));
}
 
add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'fb_disable_feed', 1);
add_action('do_feed_atom_comments', 'fb_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
 
/* Сброс фильтра для html в описании категории */
remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('pre_term_description', 'wp_kses_data');


function remove_footer_admin (){
  echo '<span id="footer-thankyou">Разработка сайта - Spaceweb Studio</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Кастомизация логин формы
function pobrda_login_logo() {
  echo '<style  type="text/css">
    .login h1 a { 
      background: url("/wp-content/themes/ppobeda/img/logo.svg") no-repeat !important; 
      background-size: contain !important;
      width: 160px;
    }
    </style>';
}
add_action('login_head', 'pobrda_login_logo');