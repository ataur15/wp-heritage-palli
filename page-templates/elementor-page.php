<?php

/**
 * Template Name: Heritage Elementor
 */

get_header();

?>

<?php get_sidebar();?>

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
