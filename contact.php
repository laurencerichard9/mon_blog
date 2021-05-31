<?php require_once("header.php"); ?>

if(!empty($_POST)){
    if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sujet']) && isset($_POST['message']) ){

        /************************************* A TRAITER ******************************** */
        $nom = htmlspecialchars($_POST['nom'],ENT_QUOTES);
        $prenom = htmlspecialchars($_POST['prenom'],ENT_QUOTES);
        $message = htmlspecialchars($_POST['message'],ENT_QUOTES);

        $destinataire = 'ls.richard@wanadoo.fr';
        $expediteur = $nom . '-' . $prenom;
        $sujet = $message;
        $message = $message;

        $entete = 'MINE-Version: 1.0' . "\r\n";
        $entete .= 'content-type: text/html; charset="utf-8"' . "\n";
        $entete .= 'From:contact-MyBlog.fr' . "\r\n";

        if(mail($destinataire, $sujet, $message, $entete)){
            echo 'L\'email a bien été envoyé.<a href="" class="">Retour en page d\'accueil</a>';
        }else{
            echo '<h2>L\'email n\'a pas été envoyer pour des raison inconnu.</h2><br>Merci de recommancez votre commande.';
        }
    }
}
?>

<div class="row">
    <div class="col-6 mx-auto">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="sujet">sujet :</label>
            <input type="text" class="form-control" id="sujet" name="sujet">
        </div>

        <div class="form-group">
            <label for="message">message :</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>

        <input type="submit" name="valider" id="valider" value="valider" class="form-control btn btn-primary text-white">
        </form>
    </div>
</div>


<?php require_once("footer.php"); ?>

























<?php require_once("footer.php"); ?>