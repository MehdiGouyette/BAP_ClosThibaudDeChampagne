<?php
/**
 *
 * Template Name: Contact
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
                        <h1>Contact<br />
                        <i>Envoyez-moi un message !</i></h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid presMenu">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/phone.png" alt="photo telephone tendu dans main">
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <p><?php the_field('contact_haut'); ?></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mailContainer">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="doubleBorder"></div>

                        <?php if ( have_posts() ) : ?>

                            <?php/*  Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                 the_content();
                                ?>

                            <?php endwhile; ?>

                        <?php else : ?>

                            <?php get_template_part( 'content', 'none' ); ?>

                        <?php endif; ?>
                        
                        <div class="doubleBorder"></div>
                    </div>
                </div>

            </div>
            <div id="map">
                <?php echo do_shortcode('[wpgmza id="1"]') ; ?>
            </div>
            <div id="moreContact">
                <i class="fa fa-question-circle-o fa-3x" aria-hidden="true"></i>
                <p><?php the_field('contact_bas'); ?></p>
            </div>



        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>