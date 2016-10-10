<?php

add_theme_support('menus');

function register_theme_menus()  {
  
  register_nav_menus(
    array(
        'primary-menu' => _('Primary Menu')
    )
  );

}

add_action('init', 'register_theme_menus');

function wpt_theme_styles() {
  wp_enqueue_style('bulma_css', get_template_directory_uri() .'/css/bulma.css');
  wp_enqueue_style('main_css', get_template_directory_uri() .'/style.css');
}

add_action( 'wp_enqueue_scripts', wpt_theme_styles);

function wpt_theme_js() {


}

?>
