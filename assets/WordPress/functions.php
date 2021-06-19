<?php

    function theme_supports () {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'Entête du menu');
    }

    function wpdocs_register_plugin_styles () {
        wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap');
    }


    add_action('after_setup_theme', 'theme_supports');
    add_action('wp_enqueue_scripts', 'wpdocs_register_plugin_styles');
    
    add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )                                            
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
// register_sidebar( array(
// 	'id' => 'blog-sidebar',
// 	'name' => 'Blog',
// ) );