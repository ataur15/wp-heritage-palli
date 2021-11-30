<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heritage-palli
 */

?>

<footer>
	<div class="footer-area">
		<div class="max-w-4xl m-auto px-4">
			<?php dynamic_sidebar('footer-nav');?>
<!-- <div class="footer-nav">
	<h4>Policy &amp; Shipping</h4>
	<ul>
		<li><a href="#">Privacy Policy</a></li>
		<li><a href="#">Return Policy</a></li>
		<li><a href="#">Payment Options</a></li>
		<li><a href="#">Terms and Condition</a></li>
	</ul>
</div>
<div class="footer-nav">
	<h4>Your Account</h4>
	<ul>
		<li><a href="#">Create Account</a></li>
		<li><a href="#">My Account</a></li>
		<li><a href="#">My Wishlist</a></li>
		<li><a href="#">Orders History</a></li>
	</ul>
</div>
<div class="footer-nav">
	<h4>Company</h4>
	<ul>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Stores</a></li>
		<li><a href="#">Career</a></li>
		<li><a href="#">Contact Us</a></li>
	</ul>
</div> -->
		</div>
	</div>
	<div class="footer-bottom">
		<div class="max-w-4xl m-auto px-4">
			<?php dynamic_sidebar('copyright');?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>