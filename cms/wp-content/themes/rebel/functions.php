<?php
add_action('admin_enqueue_scripts', 'custom_enqueue_assets');
add_filter('show_admin_bar', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');
add_filter('upload_mimes', 'cc_mime_types');
add_theme_support('post-thumbnails');

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function custom_enqueue_assets()
{
    wp_enqueue_style(
        'material-symbols-css',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'admin-css',
        get_stylesheet_directory_uri() . '/css/admin.css',
        [],
        wp_get_theme()->get('Version')
    );
}
