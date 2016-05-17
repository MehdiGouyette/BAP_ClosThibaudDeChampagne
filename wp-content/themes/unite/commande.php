<?php
/**
 *
 * Template Name: Commande
 *
 */

get_header(); ?>
    <div id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <div class="container orderContainer">
                <h2>Générer un Devis</h2>
                <?php echo do_shortcode('[woocommerce_checkout]'); ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>