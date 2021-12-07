<?php
	global $woocommerce;
	$currency = get_woocommerce_currency_symbol();
	$price = get_post_meta( get_the_ID(), '_regular_price', true);
	$sale = get_post_meta( get_the_ID(), '_sale_price', true);
?>

<div>
	<div class="product-search-img"><?php heritage_palli_post_thumbnail(); ?></div>
	<div class="product-summary">
		<?php the_title( sprintf( '<h2 class="product-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>

		<?php if($sale) : ?>
			<p class="product-price-tickr"><del><?php echo $currency; echo $price; ?></del> <?php echo $currency; echo $sale; ?></p>
		<?php elseif($price) : ?>
			<p class="product-price-tickr"><?php echo $currency; echo $price; ?></p>
		<?php endif; ?>
	</div>
</div>
