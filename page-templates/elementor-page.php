<?php
/**
 * Template Name: Heritage Elementor
 */

/* get_header();
the_post();
echo "<div";
    the_content();
echo "</div>";
get_footer();
 */
?>

<?php get_header();?>
<div class="mainbar">
    <div class="left-sidebar">
        <div class="logo-bar"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></div>
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
        <?php
        the_post();
        the_content();
        ?>
        <div class="slider">
            <div>
                <img src="https://source.unsplash.com/collection/1673600/1600x700" alt="" class="loaded tns-complete">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri();?>/images/banner.jpg" alt="">
            </div>
        </div>
        <div class="banner-main">
            <div class="banner-area">
                <div class="banner-bar">
                    <a href="#"><img class="image-hover" src="<?php echo get_template_directory_uri();?>/images/img1.jpg" alt=""></a>
                    <div class="tooltip">
                        <p><a href="#">Eid Collection</a></p>
                        <p>Explore the collection</p>
                    </div>
                </div>
                <div class="banner-bar">
                    <a href="#"><img class="image-hover" src="<?php echo get_template_directory_uri();?>/images/img2.jpg" alt=""></a>
                    <div class="tooltip">
                        <p><a href="#">Women Mask</a></p>
                        <p>Explore the collection</p>
                    </div>
                </div>
            </div>
            <div class="banner-bar">
                <a href="#"><img class="image-hover" src="<?php echo get_template_directory_uri();?>/images/img5.jpg" alt=""></a>
            </div>
            <div class="banner-area">
                <div class="banner-bar">
                    <a href="#"><img class="image-hover" src="<?php echo get_template_directory_uri();?>/images/img6.jpg" alt=""></a>
                    <div class="tooltip">
                        <p><a href="#">Men Collection</a></p>
                        <p>Explore the collection</p>
                    </div>
                </div>
                <div class="banner-bar">
                    <a href="#"><img class="image-hover" src="<?php echo get_template_directory_uri();?>/images/img7.jpg" alt=""></a>
                    <div class="tooltip">
                        <p><a href="#">Women Collection</a></p>
                        <p>Explore the collection</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>