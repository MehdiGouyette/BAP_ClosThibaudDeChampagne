<?php
/**
 *
 * Template Name: Accueil
 *
 */

get_header(); ?>

<div id="homeCarrousel" class="container-fluid">
	<?php echo do_shortcode('[image-carousel category="accueil" interval="8000" showcaption="false"]'); ?>
	<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo_Clos-Thibaud.png" alt="logo Clos Thibaud de Champagne" width="403" height="193" />
	<div class="redSquareHome"><a class="scrollTo" href="#primary"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_down.png" alt="arrow down"></a></div>
	<div class="triangleLeftHome"></div>
	<div class="triangleRightHome"></div>
</div>

<div id="primary" class="content-area col-sm-12">
	<main id="main" class="site-main" role="main">
		<div class="container homePresentation">
			<div class="titlePres row">
				<div class="col-md-4 col-md-offset-4">
					<h1>Michel ALLOUF<br />
						<i>Cuisinier et Traiteur</i></h1>
				</div>
			</div>
			<div class="row homePresentationRow">
				<div class="col-md-4">
					<p>
						<?php the_field('presentation_gauche'); ?>
					</p>
				</div>
				<div id="photoWrapper" class="col-md-4">
					<img class="photoPres" src="<?php bloginfo('template_directory'); ?>/img/michel_allouf.png" alt="photo michel allouf">
				</div>
				<div class="col-md-4">
					<p>
						<?php the_field('presentation_droite'); ?>
					</p>
				</div>
			</div>
		</div>
		<div id="valorSlider" class="container-fluid">
			<div class="row">
				<div id="valorDefault" class="col-md-4">
					<h3><?php the_field('valeurs_title_one'); ?></h3>
					<p>
						<?php the_field('valeurs_text_one'); ?>
					</p>
				</div>
				<div id="valors" class="col-md-7">
					<div class="row">
						<div id="valorWrap" class="col-md-3">
							<div class="redLayout"><h3><?php the_field('valeurs_title_two'); ?></h3></div>
						</div>
						<div id="valorOne" class="col-md-4 textValor">
							<h3><?php the_field('valeurs_title_two'); ?></h3>
							<p>
								<?php the_field('valeurs_text_two'); ?>
							</p>
						</div>
						<div id="valorJacque" class="col-md-3">
							<div class="yellowLayout"><h3><?php the_field('valeurs_title_three'); ?></h3></div>
						</div>
						<div id="valorTwo" class="col-md-4 textValor">
							<h3><?php the_field('valeurs_title_three'); ?></h3>
							<p>
								<?php the_field('valeurs_text_three'); ?>
							</p>
						</div>
						<div id="valorSalade" class="col-md-3">
							<div class="redLayout"><h3><?php the_field('valeurs_title_four'); ?></h3></div>
						</div>
						<div id="valorThree" class="col-md-4 textValor">
							<h3><?php the_field('valeurs_title_four'); ?></h3>
							<p>
								<?php the_field('valeurs_text_four'); ?>
							</p>
						</div>
						<div id="valorTartine" class="col-md-3">
							<div class="yellowLayout"><h3><?php the_field('valeurs_title_five'); ?></h3></div>
						</div>
						<div id="valorFour" class="col-md-4 textValor">
							<h3><?php the_field('valeurs_title_five'); ?></h3>
							<p>
								<?php the_field('valeurs_text_five'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>