<?php

function clean_theme_support() {

  add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'clean_theme_support');

function clean_register_styles() {

  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome_css', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'simple-line_css', get_stylesheet_directory_uri() . '/css/simple-line-icons.css' );
  wp_enqueue_style( 'animate_css',  get_stylesheet_directory_uri() . '/css/animate.css' );
  wp_enqueue_style( 'style_css', get_stylesheet_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'clean_register_styles' );

function clean_register_scripts() {

  wp_enqueue_script( 'modernizr_custom_js', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array(), 'modernizr.custom.js', false);
  wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/js/jquery-1.11.1.min.js', array(), 'jquery-1.11.1.min.js', true );
  wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), 'bootstrap.min.js', true );
  wp_enqueue_script( 'parallax_js', get_stylesheet_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), 'jquery.parallax-1.1.3.js', true);
  wp_enqueue_script( 'images_js', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.js', array(), 'imagesloaded.pkgd.js', true);
  wp_enqueue_script( 'jqsticky_js', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array(), 'jquery.sticky.js', true);
  wp_enqueue_script( 'smoothscroll_js', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array(), 'smoothscroll.js', true);
  wp_enqueue_script( 'wowmin_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), 'wow.min.js', true);
  wp_enqueue_script( 'jqeasypiechart_js', get_stylesheet_directory_uri() . '/js/jquery.easypiechart.js', array(), 'jquery.easypiechart.js', true);
  wp_enqueue_script( 'waypoints_js', get_stylesheet_directory_uri() . '/js/waypoints.min.js', array(), 'waypoints.min.js', true);
  wp_enqueue_script( 'jqrotator_js', get_stylesheet_directory_uri() . '/js/jquery.cbpQTRotator.js', array(), 'jquery.cbpQTRotator.js', true );
  wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() .'/js/custom.js', array(), 'custom.js', true );

}

add_action( 'wp_enqueue_scripts', 'clean_register_scripts' );

function clean_menu() {
  $location = array(
      'primary' => __( 'Primary Menu', 'clean' ),
  );

  register_nav_menus($location);
}

add_action( 'init', 'clean_menu');

function clean_register_settings() {
  register_setting( 'clean_theme_options', 'clean_theme_options' );
}

add_action( 'admin_init', 'clean_register_settings' );

function clean_admin_styles() {
  wp_enqueue_style( 'clean_admin_fa', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'clean_admin_gl', get_template_directory_uri() . '/css/admin.css');
}
add_action('admin_enqueue_scripts', 'clean_admin_styles');

function cleanoptions_menu() {
    $theme_menu_name = __('Clean Theme Options', 'clean');
    add_theme_page($theme_menu_name, $theme_menu_name, 'manage_options', 'clean_options.php', 'cleanoptions_page');
}

function cleanoptions_page() {
    global $select_options;
    include_once("includes/clean-routing.php");
}
add_action('admin_menu', 'cleanoptions_menu');

function clean_home_option($option) {
  $cl_home_options = get_option('clean_theme_options');
  if (isset($cl_home_options[$option])) {
                return $cl_home_options[$option];
        } else {
          return $cl_home_options;
        }
}

function clean_admin_notice() {
  echo '<div class="notice notice-success is-dismissible">
   <p>';
   _e('Clean Theme Installed', 'clean');
 echo '</p>
   </div>';
  if ( !is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
    echo '<div class="notice notice-error">
      <p>';
    _e('Please install and activate <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">contact 7</a>  plugin', 'clean');
    echo '</p>
     </div>';
   }
   echo '<div class="notice notice-warning is-dismissible">
     <p>';
     _e('Please look at Import Folder', 'clean');
   echo '</p>
     </div>';
}
add_action('admin_notices', 'clean_admin_notice');

function clean_setup_theme() {

  load_theme_textdomain( 'clean', get_template_directory() . '/languages' );

  $sql_key='clean_theme_options';

  global $wpdb;

  $results = $wpdb->get_results( "SELECT COUNT(*) FROM {$wpdb->prefix}options WHERE option_name = 'clean_theme_options'", ARRAY_N );

  if ($results[0][0] != 1) {

    $default_options = [ "header_status" => "on", "header_blur" => "on", "service_status" => "on", "portfolio_status" => "on",
     "skills_status" => "on", "cta_status" => "on", "tesl_status" => "on", "contact_status" => "on", "footer_status" => "on",
     "header_image" => null, "sup_txt" => null, "mid_txt" => null, "inf_txt" => null, "titfsq_txt" => null,
     "iconfsq_txt" => null, "txtfsq_txt" => null, "iconssq_txt" => null, "icontsq_txt" => null, "tittsq_txt" => null,
     "txttsq_txt" => null, "iconhsq_txt" => null, "tithsq_txt" => null, "txthsq_txt" => null, "titport_txt" => null,
     "txtport_txt" => null, "portfsq_txt" => null, "portssq_txt" => null, "porttsq_txt" => null, "porthsq_txt" => null,
     "portfvsq_txt" => null, "portsxsq_txt" => null, "portfsq_tit" => null, "portssq_tit" => null, "porttsq_tit" => null,
     "porthsq_tit" => null, "portfvsq_tit" => null, "portsxsq_tit" => null, "portfsq_image" => null, "portssq_image" => null,
     "porttsq_image" => null, "porthsq_image" => null, "portfvsq_image" => null, "portsxsq_image" => null, "titskill_txt" => null,
     "txtskill_txt" => null, "skillfpt_tit" => null, "skillfpt_per" => null, "skillspt_per" => null, "skilltpt_per" => null,
     "skillfhpt_per" => null, "skillspt_tit" => null, "skilltpt_tit" => null, "skillfhpt_tit" => null, "titcta_txt" => null,
     "txtcta_txt" => null, "btncta_txt" => null, "cta_image" => null, "tittesl_txt" => null, "txttesl_txt" => null,
     "teslfd_txt" => null, "teslfn_txt" => null, "teslsd_txt" => null, "teslsn_txt" => null, "teslfd_image" => null,
     "teslsd_image" => null, "titcont_txt" => null, "txtcont_txt" => null, "idcont_txt" => null, "foot_ficon" => null,
     "foot_sicon" => null, "foot_ticon" => null, "foot_hicon" => null, "foot_vicon" => null, "foot_f_txt" => null,
     "foot_f_nwin" => "Off", "foot_s_txt" => null, "foot_s_nwin" => "Off", "foot_t_txt" => null, "foot_t_nwin" => "Off",
     "foot_h_txt" => null, "foot_h_nwin" => null, "foot_v_txt" => null, "foot_v_nwin" => "Off"
     ];

    update_option("clean_theme_options", $default_options);

  }

  $menu_exists = wp_get_nav_menu_object( 'Clean-Menu' );

  if( !$menu_exists ){

    register_nav_menus(
       array(
           'main_nav' => __('Primary Menu', 'clean'),
       )
     );
    $menu_id = wp_create_nav_menu( 'Clean-Menu' );

    $menu_names = [ "Home" => "#home", "Services" => "#services", "Works" => "#portfolio", "Skills" => "#skills", "Testmonials" => "#testimonials", "Contact" => "#contact"];

    $menu_item = [];

    if ( $menu_id > 0 ) {
          // set our new MENU up at our theme's nav menu location
         set_theme_mod( 'nav_menu_locations' , array( 'main_nav' => $menu_id ) );
    }

    foreach ($menu_names as $menu_text => $menu_link) {
    $menu_item = [ 'menu-item-title' => __($menu_text, 'clean'), 'menu-item-url' => $menu_link, 'menu-item-status' => 'publish',
      'menu-item-type' => 'custom' ];

      if ( $menu_id > 0 ) {
        // add a menu item to that new menu
        wp_update_nav_menu_item( $menu_id , 0, $menu_item );
      }
    }

   $location = get_theme_mod('nav_menu_locations');
   $location['primary'] = $menu_id;
   set_theme_mod('nav_menu_locations', $location);

  }

}

add_action( 'after_setup_theme', 'clean_setup_theme' );
