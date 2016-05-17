<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_directory' ); ?>/img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#7d1526">
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#7d1526">

	<!-- Open Graph-->
	<meta property="og:title" content="Le Clos Thibaud de Champagne - Traiteur">
	<meta property="og:type" content="website">
	<meta property="og:url" content="www.leclosthibaudtraiteur.fr">
	<meta property="og:image" content="http://www.leclosthibaudtraiteur.fr/wp-content/uploads/2016/04/logo_Clos-Thibaud.png">
	<meta property="og:site_name" content="Le Clos Thibaud de Champagne - Traiteur">
	<meta property="og:description" content="Le Clos Thibaud de Champagne - Traiteur dans le 77 pour vos évènements professionnels comme personnels.">
	<!-- END Open Graph-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="menu">
		<div id="contactMenu">
			<a href="<?php bloginfo('url'); ?>/contact">
				<img src="<?php bloginfo('template_directory'); ?>/img/mail_phone.png" alt="mail & telephone contact">
			</a>
		</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<?php
				wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
				);
				?>
			</div>
		</nav><!-- .site-navigation -->
	</div>

	<div class="container-fluid header-area">
		<?php /* do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">
				<div class="site-branding col-md-6">
					<?php if( get_header_image() != '' ) : ?>

						<div id="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
						</div><!-- end of #logo -->

					<?php endif; // header image was removed ?>

					<?php if( !get_header_image() ) : ?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>

					<?php endif; // header image was removed (again) ?>
				</div>

			<div class="social-header col-md-6">
				<?php unite_social_icons(); // Social icons in header ?>
			</div>

		</header><!-- #masthead --><?php */ ?>
	</div>

	<div id="content" class="site-content container"><?php
            global $post;
            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
            }
            else{
                $layout_class = of_get_option( 'site_layout' );
            }
            ?>
            <div class="row <?php echo $layout_class; ?>">
