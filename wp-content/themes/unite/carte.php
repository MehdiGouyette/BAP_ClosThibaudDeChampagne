<?php
/**
 *
 * Template Name: Cartes
 *
 */

get_header(); ?>

    <div id="homeCarrousel" class="container-fluid">
        <div class="headImage headImageMenu"></div>
        <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo_Clos-Thibaud.png" alt="logo Clos Thibaud de Champagne" width="403" height="193" />
        <div class="redSquare"><a class="scrollTo" href="#primary"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_down.png" alt="arrow down"></a></div>
        <div class="triangleLeft"></div>
        <div class="triangleRight"></div>
    </div>

    <div id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
            <div class="container homePresentation">
                <div class="titlePres row">
                    <div class="col-md-12">
                        <ul class="carteNav">
                            <li><a class="scrollTo" href="#entrees">Les entrées</a></li>
                            <li><a class="scrollTo" href="#plats">Les plats</a></li>
                            <li><a class="scrollTo" href="#desserts">Les desserts</a></li>
                            <li><a class="scrollTo" href="#vins">Les vins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="entrees" class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row titleCategoryCarte">
                            <h4>Les entrées</h4>
                        </div>
                    </div>
                        <div class="row productRow">
                            <?php
                            $args = array( 'post_type' => 'product', 'posts_per_page' => 120, 'product_cat' => 'entrees', 'order' => 'ASC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                                <div class="col-md-4 product">
                                    <?php echo get_the_post_thumbnail($loop->post->ID); ?>
                                    <div class="productDescription">
                                        <h5><?php the_title(); ?></h5>

                                        <?php the_content(); ?>
                                        <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>

                                        <div class="addToCartContainer">
                                            <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                                <div class="row">

                                                    <div class="col-md-9">
                                                        <?php echo sprintf( '<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'] ) ); ?>
                                                    </div>
                                                    <div class="quantityInPage col-md-2 col-md-offset-1">
                                                        <?php woocommerce_quantity_input(); ?>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                </div>
            </div>
            <div id="plats" class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row titleCategoryCarte">
                            <h4>Les plats</h4>
                        </div>
                    </div>
                    <div class="row productRow">
                        <?php
                        $args = array( 'post_type' => 'product', 'posts_per_page' => 120, 'product_cat' => 'plats', 'order' => 'ASC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                            <div class="col-md-4 product">
                                <?php echo get_the_post_thumbnail($loop->post->ID); ?>
                                <div class="productDescription">
                                    <h5><?php the_title(); ?></h5>

                                    <?php the_content(); ?>
                                    <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>

                                    <div class="addToCartContainer">
                                        <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                            <div class="row">

                                                <div class="col-md-9">
                                                    <?php echo sprintf( '<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'] ) ); ?>
                                                </div>
                                                <div class="quantityInPage col-md-2 col-md-offset-1">
                                                    <?php woocommerce_quantity_input(); ?>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
            <div id="desserts" class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row titleCategoryCarte">
                            <h4>Les desserts</h4>
                        </div>
                    </div>
                    <div class="row productRow">
                        <?php
                        $args = array( 'post_type' => 'product', 'posts_per_page' => 120, 'product_cat' => 'desserts', 'order' => 'ASC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                            <div class="col-md-4 product">
                                <?php echo get_the_post_thumbnail($loop->post->ID); ?>
                                <div class="productDescription">
                                    <h5><?php the_title(); ?></h5>

                                    <?php the_content(); ?>
                                    <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>

                                    <div class="addToCartContainer">
                                        <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                            <div class="row">

                                                <div class="col-md-9">
                                                    <?php echo sprintf( '<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'] ) ); ?>
                                                </div>
                                                <div class="quantityInPage col-md-2 col-md-offset-1">
                                                    <?php woocommerce_quantity_input(); ?>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
            <div id="vins" class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row titleCategoryCarte">
                            <h4>Les vins</h4>
                        </div>
                    </div>
                    <div class="row productRow">
                        <?php
                        $args = array( 'post_type' => 'product', 'posts_per_page' => 120, 'product_cat' => 'vins', 'order' => 'ASC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                            <div class="col-md-4 product">
                                <?php echo get_the_post_thumbnail($loop->post->ID); ?>
                                <div class="productDescription">
                                    <h5><?php the_title(); ?></h5>

                                    <?php the_content(); ?>
                                    <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>

                                    <div class="addToCartContainer">
                                        <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                            <div class="row">

                                                <div class="col-md-9">
                                                    <?php echo sprintf( '<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'] ) ); ?>
                                                </div>
                                                <div class="quantityInPage col-md-2 col-md-offset-1">
                                                    <?php woocommerce_quantity_input(); ?>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
            <div id="moreContact">
                <i class="fa fa-question-circle-o fa-3x" aria-hidden="true"></i>
                <p><?php the_field('cartes_bas'); ?></p>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>