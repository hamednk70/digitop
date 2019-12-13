<?php

define("HA",get_template_directory_uri());
function ha_setup(){

    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    register_nav_menus( array(
        'main' => 'main menu',
    ) );
}
add_action('after_setup_theme',"ha_setup");
add_filter('show_admin_bar', '__return_false');

function ha_scripts(){
    wp_enqueue_style( 'bootstrap', HA.'/css/bootstrap.min.css' );
    wp_enqueue_style( 'flipTimer', HA.'/css/flipTimer.css' );
    wp_enqueue_style( 'bootstrap-select', HA.'/css/bootstrap-select.css' );
    wp_enqueue_style( 'light', HA.'/css/light.min.css' );
    wp_enqueue_style( 'mCustomScrollbar', HA.'/css/jquery.mCustomScrollbar.min.css' );
    wp_enqueue_style( 'style-ha', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap', HA . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'light', HA . '/js/light.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'elevatezoom', HA . '/js/jquery.elevatezoom.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mCustomScrollbar', HA . '/js/jquery.mCustomScrollbar.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mousewheel', HA . '/js/jquery.mousewheel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'city', HA . '/js/city.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ostan', HA . '/js/ostan.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-select', HA . '/js/bootstrap-select.js', array('jquery','bootstrap'), '1.0.0', true );
    wp_enqueue_script( 'flipTimer', HA . '/js/jquery.flipTimer.js', array(), '1.0.0', false );
    wp_enqueue_script( 'index', HA . '/js/index.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts','ha_scripts');

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/cmb2/init.php';
    require_once dirname( __FILE__ ) . '/functions/cmb2-options.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
//register widget/////////////////////////////////////
function ha_widget_init(){
    register_sidebar(array(
        'name'          => 'فوتر',
        'id'            => 'wg_footer',    // ID should be LOWERCASE  ! ! !
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div class="col-lg-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ));
    register_sidebar(array(
        'name'          => 'خبرنامه',
        'id'            => 'wg_news',    // ID should be LOWERCASE  ! ! !
        'description'   => '',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));
}
add_action('widgets_init','ha_widget_init');
//end register widget/////////////////////////////////////



