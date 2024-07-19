<?php
function mytheme_setup()
{
    // Add support for a custom logo
    // add_theme_support('');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 500,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true,
    ));

}
add_action('after_setup_theme', 'mytheme_setup');


// Add menu support
function register_custom_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_custom_menus');




function prefix_theme_enqueue_additional_styles()
{
    wp_enqueue_style('prefix-theme-plugin-min-css', get_template_directory_uri() . "/assets/css/plugin.min.css", array(), '1.0');
    // Enqueue plugin.rtl.min.css with dependency on plugin.min.css
    wp_enqueue_style('prefix-theme-plugin-rtl-min-css', get_template_directory_uri() . '/assets/css/plugin-rtl.min.css', array('prefix-theme-plugin-min-css'), '1.0', true);
    // Enqueue additional-styles.css
    wp_enqueue_style('prefix-theme-main-styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'prefix_theme_enqueue_additional_styles');



// Enqueue main stylesheet (style.css)
function prefix_theme_enqueue_styles()
{
    wp_enqueue_style('prefix-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'prefix_theme_enqueue_styles'); // Priority 10



function prefix_enqueue_google_maps_script() {
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY', array(), null, true);
}
add_action('wp_enqueue_scripts', 'prefix_enqueue_google_maps_script');



// Enqueue additional scripts
function prefix_theme_enqueue_additional_scripts()
{
    // Enqueue plugin.min.js
    wp_enqueue_script('prefix-theme-plugin-script', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), '1.0', true); // Dependency on jQuery

    // Enqueue other scripts as needed
}
add_action('wp_enqueue_scripts', 'prefix_theme_enqueue_additional_scripts');


// Enqueue main script (script.min.js)
function prefix_theme_enqueue_scripts()
{
    wp_enqueue_script('prefix-theme-script', get_template_directory_uri() . '/assets/js/script.min.js', array(), '1.0', true); // The 'true' parameter indicates that the script should be loaded in the footer
}
add_action('wp_enqueue_scripts', 'prefix_theme_enqueue_scripts');



// Enqueue Google Fonts
function enqueue_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'enqueue_google_fonts' );



// Enqueue JavaScript file for AJAX functionality
function enqueue_ajax_comments_script()
{
    wp_enqueue_script('ajax-comments', get_template_directory_uri() . '/assets/js/ajax-comments.js', array('jquery'), null, true);
    wp_localize_script('ajax-comments', 'ajax_comments_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'post_id' => get_the_ID(),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_comments_script');



function prefix_theme_enqueue_extra_fonts()
{
    // Enqueue custom fonts from the 'font' folder

    wp_enqueue_style('prefix-theme-font1', get_template_directory_uri() . '/fonts/revicons/revicons90c6.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font2', get_template_directory_uri() . '/fonts/revicons/revicons90c6.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font3', get_template_directory_uri() . '/fonts/revicons/revicons90c6.ttf', array(), '1.0');
    wp_enqueue_style('prefix-theme-font4', get_template_directory_uri() . '/fonts/revicons/revicons90c6.woff', array(), '1.0');

    wp_enqueue_style('prefix-theme-font11', get_template_directory_uri() . '/fonts/fa-brands-400.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font21', get_template_directory_uri() . '/fonts/fa-brands-400.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font31', get_template_directory_uri() . '/fonts/fa-brands-400.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font41', get_template_directory_uri() . '/fonts/fa-brands-400d41d.eot', array(), '1.0');

    wp_enqueue_style('prefix-theme-font12', get_template_directory_uri() . '/fonts/fa-regular-400.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font22', get_template_directory_uri() . '/fonts/fa-regular-400.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font32', get_template_directory_uri() . '/fonts/fa-regular-400.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font42', get_template_directory_uri() . '/fonts/fa-regular-400d41d.eot', array(), '1.0');
    
    wp_enqueue_style('prefix-theme-font13', get_template_directory_uri() . '/fonts/fa-solid-900.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font23', get_template_directory_uri() . '/fonts/fa-solid-900.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font33', get_template_directory_uri() . '/fonts/fa-solid-900.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font43', get_template_directory_uri() . '/fonts/fa-solid-900d41d.eot', array(), '1.0');

    wp_enqueue_style('prefix-theme-font14', get_template_directory_uri() . '/fonts/fontelloc5e6.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font24', get_template_directory_uri() . '/fonts/fontelloc5e6.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font34', get_template_directory_uri() . '/fonts/fontelloc5e6.ttf', array(), '1.0');
    wp_enqueue_style('prefix-theme-font44', get_template_directory_uri() . '/fonts/fontelloc5e6.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font54', get_template_directory_uri() . '/fonts/fontelloc5e6.woff2', array(), '1.0');

    wp_enqueue_style('prefix-theme-font15', get_template_directory_uri() . '/fonts/line-awesomeeb4f.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font25', get_template_directory_uri() . '/fonts/line-awesomeeb4f.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font35', get_template_directory_uri() . '/fonts/line-awesomeeb4f.ttf', array(), '1.0');
    wp_enqueue_style('prefix-theme-font45', get_template_directory_uri() . '/fonts/line-awesomeeb4f.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font55', get_template_directory_uri() . '/fonts/line-awesomeeb4f.woff2', array(), '1.0');

    wp_enqueue_style('prefix-theme-font16', get_template_directory_uri() . '/fonts/Linearicons-Free54e9.eot', array(), '1.0');
    wp_enqueue_style('prefix-theme-font26', get_template_directory_uri() . '/fonts/Linearicons-Free54e9.svg', array(), '1.0');
    wp_enqueue_style('prefix-theme-font36', get_template_directory_uri() . '/fonts/Linearicons-Free54e9.ttf', array(), '1.0');
    wp_enqueue_style('prefix-theme-font46', get_template_directory_uri() . '/fonts/Linearicons-Free54e9.woff', array(), '1.0');
    wp_enqueue_style('prefix-theme-font56', get_template_directory_uri() . '/fonts/Linearicons-Free54e9.woff2', array(), '1.0');
    wp_enqueue_style('prefix-theme-font66', get_template_directory_uri() . '/fonts/Linearicons-Freed41d.eot', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'prefix_theme_enqueue_extra_fonts');