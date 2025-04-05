<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-main">
			<div class="wrapper">
				<div class="footer-content">
					<div class="footer-logo">
						<?= get_footer_logo(); ?>
					</div>
					<div class="footer-menu">
						<nav id="site-navigation" class="footer-navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_id'        => 'footer-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->

						<p><?= get_phone(); ?></p>
						<p><?= get_email(); ?></p>
						<p><?= get_address(); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="wrapper">
				Copyright &copy; <?= date('Y') ?> | <?= get_bloginfo('name'); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
