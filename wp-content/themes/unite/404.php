<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found container" style="padding:60px 0 40px 0;">
				<header class="page-header">
					<h1 class="page-title" style="color:#7d1526;">Désolé ! La page ne peut être trouvée.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Rien n'a été trouvé à cette adresse. Essayez un autre lien.</p>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>