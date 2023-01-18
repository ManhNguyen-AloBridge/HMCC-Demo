<?php

function get_template_child_directory()
{
    $template     = 'twentytwentyone-child';
    $theme_root   = get_theme_root_uri($template);
    $template_dir = "$theme_root/$template";

    return apply_filters('template_directory', $template_dir, $template, $theme_root);
}

add_action('wp_enqueue_scripts', 'add_layout_style');
function add_layout_style()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
    wp_enqueue_script('child-theme-main-js', get_stylesheet_directory_uri() . '/assets/js/pages/layout/index.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'add_pages_style');
function add_pages_style()
{
    wp_enqueue_style('home-page', get_template_child_directory() . '/assets/css/pages/home/index.css');
    wp_enqueue_style('activity-page', get_template_child_directory() . '/assets/css/pages/activity/index.css');
    wp_enqueue_style('member-page', get_template_child_directory() . '/assets/css/pages/member/index.css');
    wp_enqueue_style('news-page', get_template_child_directory() . '/assets/css/pages/news/index.css');
    wp_enqueue_style('join-us-page', get_template_child_directory() . '/assets/css/pages/join-us/index.css');
    wp_enqueue_style('accelerator-program-page', get_template_child_directory() . '/assets/css/pages/accelerator-program/index.css');
}

function create_posttype()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'thumbnail', // featured images
        'custom-fields', // custom fields
        'revisions', // post revisions
    );
    $labels = array(
        'name' => __('Members'),
        'singular_name' => __('News')
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'ccc'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('news', $args);
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
