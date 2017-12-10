<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Notebook
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php if ( has_header_image() ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
				</a>
			<?php } ?>
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oy vey! That page can&rsquo;t be found.', 'notebook' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>
						<?php esc_html_e( 'It looks like nothing was found at this location. Head back to the ', 'notebook' ); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">front page</a>.
					</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
