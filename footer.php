<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kindred
 */

?>
	</main>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
