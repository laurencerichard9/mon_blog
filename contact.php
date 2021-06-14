<?php require_once("header.php"); ?>
<?php
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
            echo 'L\'email a bien été envoyé. <a href="index.php" class="retour-accueil">Retour en page d\'accueil</a>';
        }else{
            echo '<h2>L\'email n\'a pas été envoyer pour des raison inconnu.</h2><br>Merci de recommancez votre commande.';
        }
    }
}
?>


<div class="text-center formulaire-min-height connection-padding">
    <div class="col-sm-6 mx-auto">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <img class="rounded-circle" src="images/robot&me.jpg" alt="image de moi" width="70" height="70">
        <hr>
        <h1 class="h3 mb-3 py-4 font-weight-normal">Contactez-moi</h1>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" class="form-control" required autofocus>
        </div>
        <br>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" class="form-control" required autofocus>
        </div>
        <br>
        <div class="form-group">
            <label for="sujet">sujet :</label>
            <input type="text" id="sujet" name="sujet" placeholder="Entrez votre sujet" class="form-control" required autofocus>
        </div>
        <br>
        <div class="form-group">
            <label for="message">message :</label>
            <textarea name="message" id="message" placeholder="Entrez votre message" class="form-control" required autofocus></textarea>
        </div>
        <br><br>
        <button class="btn btn-secondary text-white" type="submit" name="valider" id="valider" value="valider">Valider</button>
        </form>
        <br>
    </div>
</div>



<?php require_once("footer.php"); ?>

























<?php require_once("footer.php"); ?>