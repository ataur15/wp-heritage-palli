<!doctype html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' );?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head();?>
	</head>
	<body <?php body_class();?>>
		<?php wp_body_open();?>
		<div id="page" class="site">
			<div class="mobile-menu"></div>
			<div class="header-topbar">
				<div class="header-top">
					<div class="search-bar">
						<?php get_product_search_form();?>
					</div>
					<div class="shopping-cart">
						<?php do_action("heritage_palli_header", "heritage-palli"); ?>
					</div>
					<div class="top-nav">
						<ul>
							<li>
								<?php if ( is_user_logged_in() ) {?>
									<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'My Account', 'national-foam' );?>">
										<i class="uil uil-user"></i>										                            								                            								                            								                            									                            								                            								                            								                             <?php _e( 'My Account', 'national-foam' );?>
									</a>
								<?php } else {?>
									<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'Sign In', 'national-foam' );?>">
										<i class="uil uil-signin"></i>										                              								                              								                              								                              								                              								                              								                              								                               <?php _e( 'Sign In', 'national-foam' );?>
									</a>
								<?php }?>
							</li>
						</ul>
					</div>
				</div>
			</div>