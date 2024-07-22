<?php
function register_news_post_type()
{
    $labels = array(
        'name'                   =>_x('News', 'Post Type  General Name'),
        'singular_name'          =>_x('News', 'Post Type Singular Name'),
        'menu_name'              =>_('News'),
        'name_admin_bar'         =>_('News'),
        'archives'              => __('News Archives'),
        'parent_item_colon'     => __('Parent News'),
        'all_items'             => __('All News'),
        'add_new_item'          => __('Add New News'),
        'edit_item'             => __('Edit News'),
        'update_item'           => __('Update News'),
        'view_item'             => __('View News'),
        'search_items'          => __('Search News'),
        'not_found'             => __('Not found'),
        'not_found_in_trash'    => __('Not found in Trash'),
        'featured_image'        => __('Featured Image'),
        'set_featured_image'    => __('Set featured image'),
        'remove_featured_image' => __('Remove featured image'),
        'use_featured_image'    => __('Use as featured image'),
        'items_list'            => __('News list'),
        'items_list_navigation' => __('News list navigation'),
        'filter_items_list'     => __('Filter News list'),

    );
    $args = array(
        'label'                 => __('News'),
        'description'           => __('News Description'),
        'labels'                => $labels,
        'supports'              => array('title', 'author'),
        'public'                => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'news', 'with_front' => false),
    );

    register_post_type('news',$args);
}
add_action('init','register_news_post_type',0);
