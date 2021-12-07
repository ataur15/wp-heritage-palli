<?php
/**
 * Template Name: Heritage Palli
 */

get_header();
get_sidebar();

?>
<div class="main-right-sidebar">
    <div class="slider">
        <?php
            if(class_exists('TinySlider')){
                echo do_shortcode("[tiny_slider]");
            }
        ?>
    </div>
    <div class="banner-main">
        <div class="banner-area">
            <?php
                if(class_exists('MetaFields')){
                    echo do_shortcode("[meta_fields]");
                }
            ?>

        </div>
    </div>
    <?php get_footer(); ?>
</div>
