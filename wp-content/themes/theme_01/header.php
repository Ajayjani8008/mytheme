<!doctype html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('chatset') ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
</head>

<body <?php body_class(); ?>>
    <?php if (is_front_page()) : ?>
        <section class="intro-area">
            <div class="">
                <div class="intro-area-11">
                <?php endif; ?>
                <!-- header area -->
                <section class="header header--8">
                    <!-- start menu area -->
                    <div class="menu_area menu8">
                        <div class="container">
                            <nav class="navbar navbar-expand-lg navbar-light px-0 ">
                                <a class="navbar-brand order-sm-1 order-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="" /></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="la la-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse order-md-1 justify-content-end" id="navbarSupportedContent22">
                                    <div class="m-right-15">
                                        <ul class="navbar-nav ">
                                            <?php
                                            // Get the menu items from the primary menu location
                                            $primary_menu_items = wp_get_nav_menu_items('primary menu');
                                            if ($primary_menu_items) :
                                                // Check if the menu item is a top-level item (parent)
                                                foreach ($primary_menu_items as $menu_item) :
                                                    if ($menu_item->menu_item_parent == 0) :
                                                        // Start creating the list item for the menu item
                                                        echo '<li class="nav-item';
                                                        $submenu_items = get_submenu_items($menu_item->ID, $primary_menu_items);

                                                        if (!empty($submenu_items)) {
                                                            echo ' dropdown'; // Add dropdown class if submenu exists
                                                        }
                                                        echo '">';
                                                        // Output the link for the menu item
                                                        echo '<a class="nav-link';
                                                        if (!empty($submenu_items)) {
                                                            echo ' dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
                                                        }
                                                        echo '"href="' . $menu_item->url . '">' . $menu_item->title;
                                                        // If submenus exist, start creating the submenu list

                                                        if (!empty($submenu_items)) {
                                                            echo '</a><div class="dropdown-menu">';
                                                            // Iterate through each submenu item
                                                            foreach ($submenu_items as $submenu_item) {
                                                                // Output the link for the submenu item
                                                                echo '<a class="dropdown-item" href="' . $submenu_item->url . '">' . $submenu_item->title . '</a>';
                                                            }
                                                            echo '</div>'; // Close dropdown-menu
                                                        } else {
                                                            echo '</a>'; // Close menu item link
                                                        }
                                                        echo '</li>'; // Close menu item list item

                                                    endif;
                                                endforeach;
                                            endif;

                                            // Recursive function to get submenu items
                                            function get_submenu_items($parent_id, $items)
                                            {
                                                $submenu_items = [];
                                                foreach ($items as $item) {
                                                    if ($item->menu_item_parent == $parent_id) {
                                                        $submenu_items[] = $item; // Add submenu item to the array
                                                    }
                                                }
                                                return $submenu_items;
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>

                                <div class="nav_right_content m-left-30 d-flex align-items-center order-2 order-sm-2">
                                    <div class="nav_right_module search_module">
                                        <span class="la la-search search_trigger"></span>

                                        <div class="search_area">
                                            <form action="https://demo.Prefix.com/">
                                                <div class="input-group input-group-light">
                                                    <span class="icon-left" id="basic-addon78">
                                                        <i class="la la-search"></i>
                                                    </span>
                                                    <input type="text" class="form-control search_field" placeholder="Type words and hit enter...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- end menu area -->

                </section><!-- end: .header -->