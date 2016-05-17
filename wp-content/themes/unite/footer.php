<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
            </div><!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-3">
					<img class="logoFooter" src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="logo Clos Thibaud de Champagne" width="250" height="120" />
				</div>
				<div class="col-md-2 col-md-offset-2 linkedinLink">
					<a  href="https://www.linkedin.com/in/michel-allouf-a2165311a?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin-square fa-5x"></i></a>
					<a class="mailLink" href="contact"><i class="fa fa-envelope fa-5x"></i></a>
				</div>
				<div class="col-md-2 col-md-offset-2 contactFooter">
					<a href="<?php bloginfo('url'); ?>/contact">
						<img src="<?php bloginfo('template_directory'); ?>/img/mail_phone.png" alt="mail & telephone contact">
					</a>
				</div>
				<div class="col-md-1 logoHouse">
					<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/house_logo.jpg" alt="logo"/>
				</div>
			</div>
			<div class="row">
				<nav role="navigation" class="col-md-6">
					<?php unite_footer_links(); ?>
				</nav>

				<div class="copyright col-md-6">
					<a href="<?php bloginfo('url'); ?>/mentions-legales">Mentions Légales</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>