<?php
/**
 *
 * Template Name: Menus
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
                    <div class="col-md-4 col-md-offset-4">
                        <h1>Les Menus<br />
                        <i>Se pliant à vos exigences</i></h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid presMenu">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php bloginfo('template_directory'); ?>/img/plateau_main.png" alt="photo plateau et main">
                    </div>
                    <div class="col-md-6">
                        <p><?php the_field('menus_haut'); ?></p>
                    </div>
                </div>
            </div>
            <div class="container listMenus">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => 120, 'product_cat' => 'menus', 'order' => 'ASC' );
                $loop = new WP_Query( $args );
                $i = 1;
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <?php if($i % 2 ==  0) { ?>
                        <div class="row">
                            <div class="col-md-6 photoMenu" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID)) ?>');">
                                <div id="menuDiscovered-<?php echo $loop->post->ID ?>" class="menuDiscovered">
                                    <div class="textMenuDiscovered">
                                        <div id="close-<?php echo $loop->post->ID ?>" class="close"><i class="fa fa-close fa-2x"></i></div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 descriptionMenu">
                                <h3 class="titleMenu"><?php the_title(); ?></h3>
                                <h3>-</h3>
                                <?php the_excerpt(); ?>
                                <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>
                                <div class="buttonContainer row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <button id="discoverMenu-<?php echo $loop->post->ID ?>" class="discoverMenu">Découvrir</button>
                                    </div>
                                    <div class="col-md-7 col-md-offset-1">
                                        <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <?php echo sprintf('<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'])); ?>
                                                </div>
                                                <div class="quantityInPageMenu col-md-2 col-md-offset-1">
                                                    <?php woocommerce_quantity_input(); ?>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="row">
                            <div class="col-md-6 descriptionMenu">
                                <h3 class="titleMenu"><?php the_title(); ?></h3>
                                <h3>-</h3>
                                <?php the_excerpt(); ?>
                                <span class="priceAnnouncer">Prix : </span><?php wc_get_template( 'loop/price.php' ); ?>
                                <div class="buttonContainer row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <button id="discoverMenu-<?php echo $loop->post->ID ?>" class="discoverMenu">Découvrir</button>
                                    </div>
                                    <div class="col-md-7 col-md-offset-1">
                                        <form action="<?php bloginfo('url'); ?>/panier/?add-to-cart=<?php echo $loop->post->ID ?>" class="cart" method="post" enctype='multipart/form-data'>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <?php echo sprintf( '<button type="submit" data-product_id="<?php echo $loop->post->ID ?>" data-quantity="1" class="button product_type_simple discoverCarte">Ajouter à ma sélection</button>', esc_attr( $loop->post->ID ), esc_attr( $link['class'] ), esc_html( $link['label'] ) ); ?>
                                                </div>
                                                <div class="quantityInPageMenu col-md-2 col-md-offset-1">
                                                    <?php woocommerce_quantity_input(); ?>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 photoMenu" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID)) ?>');">
                                <div id="menuDiscovered-<?php echo $loop->post->ID ?>" class="menuDiscovered">
                                    <div class="textMenuDiscovered">
                                        <div id="close-<?php echo $loop->post->ID ?>" class="close"><i class="fa fa-close fa-2x"></i></div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } $i++; ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div id="moreContact">
                <i class="fa fa-question-circle-o fa-3x" aria-hidden="true"></i>
                <p><?php the_field('menus_bas'); ?></p>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>