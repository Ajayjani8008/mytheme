<?php

add_action('after_setup_theme', 'theme_slug_setup');

function theme_slug_setup()
{
    add_theme_support('wp-block-styles');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 480,
        'width' => 720,
    ));
}
