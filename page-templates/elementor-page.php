<?php

/**
 * Template Name: Heritage Elementor
 */

get_header();

?>

<div class="mainbar">
    <div class="left-sidebar">
        <div class="logo-bar">
            <?php the_custom_logo(); ?>
        </div>
        <div class="menubar">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'nav-menu',
                    'menu_id'         => '',
                    'menu_class'      => '',
                    'container'       => 'div',
                    'container_id'    => 'navmenu'
                )
            );
            ?>
        </div>
    </div>
    <div class="main-right-sidebar">
        <div class="slider">
            <?php echo do_shortcode("[tiny_slider]"); ?>
        </div>
        <div class="banner-main">
            <div class="banner-area">
                <?php echo do_shortcode("[meta_fields]"); ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</div>