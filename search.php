<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package heritage-palli
 */

get_header();
get_sidebar();
?>
	<div class="main-right-sidebar">
		<div id="primary" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'heritage-palli' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
					<?php
					while ( have_posts() ) :
						the_post();

						if ( class_exists( 'WooCommerce' ) ) {
							get_template_part( 'template-parts/product', 'search' );
						} else {
							get_template_part( 'template-parts/content', 'search' );
						}

					endwhile;
					?>
				</div>
				<?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</div><!-- #main -->
	</div>

<?php
get_footer();
