<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Notebook
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'notebook' ), '<a href="https://wordpress.org/">WordPress</a>' );
			?>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '(and %1$s by %2$s).', 'notebook' ), 'Notebook', '<a href="https://rudzki.org">Chris Rudzki</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
