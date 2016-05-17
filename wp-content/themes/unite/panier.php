<?php
/**
 *
 * Template Name: Panier
 *
 */

get_header(); ?>
    <div id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <div class="container cartContainer">
                <h2>Ma Sélection</h2>
                <?php echo do_shortcode('[woocommerce_cart]'); ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>
