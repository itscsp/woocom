<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Woocom
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="container error-404 not-found vh-100">
			<div class="row">
				<div class="col-sm-12 text-center">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'woocom' ); ?></h1>
					</header><!-- .page-header -->
		
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'woocom' ); ?></p>
		
							<?php
							get_search_form();
							?>
		
		
					</div><!-- .page-content -->
				</div>

			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
