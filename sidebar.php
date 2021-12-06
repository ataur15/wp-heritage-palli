<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heritage-palli
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

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