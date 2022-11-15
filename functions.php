<?php
// affichage titrePage - titreSite   
function moussecf_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); //image mise en avant
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mouss-ecf'),
        'secondary' => __('Secondary Menu', 'mouss-ecf'),
    ));
}
// séparateur titrePage -/- titreSite
function mouss_title_separator()
{
    return ' - ';
}
// link css
function mouss_register_assets()
{
    wp_register_style('mouss-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style("mouss-style");
    wp_register_script('mouss-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
    wp_enqueue_script("mouss-script");
}

// actions
add_action("wp_enqueue_scripts", "mouss_register_assets");
add_action('after_setup_theme', 'moussecf_supports');
add_filter('document_title_separator', 'mouss_title_separator');

// DEQUEUE - REMOVE GUTENBERG CSS

wp_dequeue_style('classic-theme-styles');
wp_dequeue_style('global-styles');
wp_dequeue_style('wp-block-library'); // Wordpress Core
wp_dequeue_style('wp-block-library-theme'); // Wordpress Core
wp_dequeue_style('wc-block-style'); // WooCommerce
wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme