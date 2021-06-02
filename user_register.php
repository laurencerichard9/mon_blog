<?php require_once('header.php'); 
/**formulaire-min-height  role="form"*/
?>
<div class="text-center formulaire-min-height connection-padding">   
    <form action="user_register_handling.php" method="POST" enctype="multipart/form-data" class="" >
        <img class="rounded-circle" src="images/robot&me.jpg" alt="image de moi" width="70" height="70">
        <hr>
        <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>        

        <div class="form-group">
            <label for="first_name" class="col-sm-3 control-label">Prénom*</label>
            <div class="col-sm-6 mx-auto">
                <input type="text" id="first_name" name="first_name" placeholder="Saisir votre prénom" class="form-control " maxlength="255" required autofocus >
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-sm-3 control-label">Nom*</label>
            <div class="col-sm-6 mx-auto">
                <input type="text" id="last_name" name="last_name" placeholder="Saisir votre nom" class="form-control " maxlength="255" required autofocus >
            </div>
        </div>
        <div class="form-group">
            <label for="nick_name" class="col-sm-3 control-label">Pseudo*</label>
            <div class="col-sm-6 mx-auto">
                <input type="text" id="nick_name" name="nick_name" placeholder="Saisir votre pseudo" class="form-control " maxlength="255" required autofocus >
            </div>
        </div>
        <div class="form-group">
            <label for="email_address" class="col-sm-3 control-label">Email*</label>
            <div class="col-sm-6 mx-auto">
                <input type="email" id="email_address" name="email_address" placeholder="Saisir votre adresse mail" class="form-control" maxlength="255" required autofocus >
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Mot de passe*</label>
            <div class="col-sm-6 mx-auto">
                <input type="password" id="password" name="password" placeholder="saisir votre mot de passe"  class="form-control" maxlength="255" required autofocus >
            </div>
        </div>
        <div class="form-group">
            <label for="password_verify" class="col-sm-6 control-label">Mot de passe (confirmation)*</label>
            <div class="col-sm-6 mx-auto">
                <input type="password" id="password_verify" name="password_verify"  placeholder="ressaisir votre mot de passe" class="form-control" maxlength="255" required autofocus >
            </div>
        </div>
        <button type="submit" class="btn btn-secondary btn-block col-sm-3 mt-2 mb-4 mx-auto">S'inscrire</button>
    </form>
</div>

<?php require_once('footer.php'); ?>


