<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus()  {
  
  register_nav_menus(
    array(
        'primary-menu' => _('Primary Menu')
    )
  );

}

add_action('init', 'register_theme_menus');

function wpt_create_widget( $name, $id, $description ) {

  register_sidebar(array(
    'name' => __( $name ),   
    'id' => $id, 
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="module-heading">',
    'after_title' => '</h2>'
  ));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function wpt_theme_styles() {
  // wp_enqueue_style('bulma_css', get_template_directory_uri() .'/css/bulma.css');
  wp_enqueue_style('main_css', get_template_directory_uri() .'/style.css');
}

add_action( 'wp_enqueue_scripts', wpt_theme_styles);

function wpt_theme_js() {


}

?>
