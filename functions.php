<?php
function theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    
    // Register menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'text-domain'),
        'sidebar-works-menu' => __('Sidebar Works Menu', 'text-domain'),
        'sidebar-contact-menu' => __('Sidebar Contact Menu', 'text-domain')
    ));
}

wp_enqueue_style('theme-style', get_stylesheet_uri());


add_action('after_setup_theme', 'theme_setup');



function custom_image_sizes() {
    add_image_size('custom-size', 800, 600, true); // 800px width, 600px height, cropped
}
add_action('after_setup_theme', 'custom_image_sizes');



function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');





function add_gfs_didot_font() {
    wp_enqueue_style('gfs-didot-font', 'https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap');
}
add_action('wp_enqueue_scripts', 'add_gfs_didot_font');





add_action('init', function() {
    add_post_type_support('page', 'custom-fields');
});


add_action('init', function() {
    $latest = get_posts(array(
        'post_type'      => 'page',
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'fields'         => 'ids'
    ));

    if (!empty($latest)) {
        $current_front = get_option('page_on_front');
        if ($latest[0] != $current_front) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $latest[0]);
        }
    }
});



function theme_scripts() {
    // Load Splide JS & CSS
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.4');
    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '4.1.4', true);

    // Load custom script AFTER Splide
    wp_enqueue_script(
        'theme-scripts',
        get_template_directory_uri() . '/js/scripts.js',
        array('splide-js'), // Explicit dependency
        filemtime(get_template_directory() . '/js/scripts.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts');