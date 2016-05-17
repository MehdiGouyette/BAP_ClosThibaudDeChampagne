<?php


$error = "";

if (isset($_POST['last-name']) && !empty($_POST['last-name'])
    && isset($_POST['first-name']) && !empty($_POST['first-name'])
    && isset($_POST['subject']) && !empty($_POST['subject'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['message']) && !empty($_POST['message'])
    && isset($_POST['file']) ) {

    $recipient = "michelallouf.traiteur@gmail.com";
    $subject = mb_encode_mimeheader("Message envoyé par ").htmlspecialchars($_POST['fist-name']).mb_encode_mimeheader(" ").htmlspecialchars($_POST['last-name']);
    $content = htmlspecialchars($_POST['message']);

    mail($recipient, $subject, $content);



    header("refresh:5; index.php");
    echo "<a href='index.php'><button type='button' class='btn btn-info'><i class='fa fa-reply'></i> Retour vers le Site</button></a>
        <div class='alert alert-success' role='alert'>
            <strong>Votre email a bien été envoyé!</strong>
        </div> ";

}
else {
    header("refresh:5; index.php#contact");

    echo "<a href='index.php'><button type='button' class='btn btn-info'><i class='fa fa-reply'></i> Retour</button></a>
        <div class='alert alert-danger' role='alert'>
          <strong>Votre email n'a pas pu être envoyé!</strong> Vérifiez que vous avez bien rempli tous les champs!
        </div> ";


}
?>
