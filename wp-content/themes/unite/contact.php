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
<?php

require_once('PHPMailer/class.phpmailer.php');

if (isset($_POST['last-name']) && !empty($_POST['last-name'])
    && isset($_POST['first-name']) && !empty($_POST['first-name'])
    && isset($_POST['subject']) && !empty($_POST['subject'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['message']) && !empty($_POST['message']) ) {

    try {
        $email = new PHPMailer();
        $email->From = 'leclosthibaudtraiteur.fr';
        $email->FromName = $_POST['fist-name'] . ' ' . $_POST['last-name'];
        $email->Subject = $_POST['subject'];
        $email->Body = $_POST['message'];
        $email->AddAddress('mehdi.gouyette@hotmail.com');

        $file_to_attach = $_POST['file'];
        $email->AddAttachment($file_to_attach, 'Fichier Lié par' . htmlspecialchars($_POST['fist-name']) . ' ' . htmlspecialchars($_POST['last-name']));

        $email->Send();

        echo ' <h5 style="color:green;">Votre email a bien été envoyé!</h5>';

    } catch (phpmailerException $e) {

        echo ' <h5 style="color:red;">Votre email n\'a pas pu être envoyé! Vérifiez que vous avez bien rempli tous les champs.</h5>';

    } catch (Exception $e){

        echo ' <h5 style="color:red;">Votre email n\'a pas pu être envoyé! Vérifiez que vous avez bien rempli tous les champs.</h5>';

    }
}
?>
                        <form action="<?php bloginfo('template_directory'); ?>/mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="last-name">Votre Nom</label>
                                    <br />
                                    <input type="text" name="last-name" placeholder="Votre Nom"/>
                                    <br /><br />
                                    <label for="first-name">Votre Prénom</label>
                                    <br />
                                    <input type="text" name="first-name" placeholder="Votre Prénom"/>
                                    <br /><br />
                                </div>
                                <div class="col-md-6">
                                    <label for="subject">Objet</label>
                                    <br />
                                    <input type="text" name="subject" placeholder="Objet"/>
                                    <br /><br />
                                    <label for="email">Votre E-mail</label>
                                    <br />
                                    <input type="text" name="email" placeholder="Votre E-mail"/>
                                    <br /><br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message">Votre Message</label>
                                    <textarea name="message" placeholder="Votre Message"></textarea>
                                    <br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <input id="inputFile" type="file" name="file"/>
                                    <div id="fileButton">
                                        <i class="fa fa-plus fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="labelFile">Ajouter une pièce jointe <label id="inputFileText">Aucun Fichier Sélectionné</label></label>
                                </div>
                                <div class="col-md-3 col-md-offset-2"><button type="submit" class="submitContact">ENVOYER</button></div>
                            </div>
                        </form>
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