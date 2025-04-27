<?php

// register nav menu using funtion file


function html2wp_theme_setup(){

add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('home-featured', 600, 500, array('center', 'center'));
add_image_size('single-img', 600, 500, array('center', 'center'));
add_theme_support('automatic-feed-links');

register_nav_menus(array('primary'=>__('Primary Menu', 'Html2wp')));

};

add_action('after_setup_theme', 'html2wp_theme_setup');



// register widget


function html2wp_widget_init(){

register_sidebar(array(
'name'=> __('primary sidebar', 'Html2wp'),
'id'=> 'main-sidebar',
'description'=> 'main rigt sidebar',
'before_widget'=> '<li>',
'after_widget'=> '</li>',
'before_title'=> '<h2>',
'after_title'=> '<h2>',

));


register_sidebar(array(
'name'=> __('foter widget 1', 'Html2wp'),
'id'=> 'footer-widget1',
'description'=> 'footer widget',
'before_widget'=> '<li>',
'after_widget'=> '</li>',
'before_title'=> '<h2>',
'after_title'=> '<h2>',

));


register_sidebar(array(
'name'=> __('foter widget 2', 'Html2wp'),
'id'=> 'footer-widget2',
'description'=> 'footer widget',
'before_widget'=> '<li>',
'after_widget'=> '</li>',
'before_title'=> '<h2>',
'after_title'=> '<h2>',

));

register_sidebar(array(
'name'=> __('foter widget 3', 'Html2wp'),
'id'=> 'footer-widget3',
'description'=> 'footer widget',
'before_widget'=> '<li>',
'after_widget'=> '</li>',
'before_title'=> '<h2>',
'after_title'=> '<h2>',

));


}

add_action('widgets_init', 'html2wp_widget_init');

// register custom post types

$args = array(
    'labels' => array(
            'name'          => 'Portfolios',
            'singular_name' => 'Portfolio',
            'menu_name'     => 'Portfolios',
            'add_new'       => 'Add New Portfolio',
            'add_new_item'  => 'Add New Portfolio',
            'new_item'      => 'New Portfolio',
            'edit_item'     => 'Edit Portfolio',
            'view_item'     => 'View Portfolio',
            'all_items'     => 'All Portfolio',
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
);

register_post_type( 'Portfolio', $args );






function html2wp_script(){

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "html2wp_script");







?>