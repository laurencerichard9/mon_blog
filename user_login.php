<?php include("header.php"); ?>
<div class="text-center formulaire-min-height connection-padding">
    <form action="user_login_handling.php" method="POST" class="form-signin">
        <img class="rounded-circle" src="images/robot&me.jpg" alt="image de moi" width="70" height="70">
        <br>
        <hr>
        <h1 class="h3 mb-4 py-4 font-weight-normal">Connection</h1>
        <div class="form-group">
            <label for="nickname" class="col-sm-3 mt-4 control-label">Pseudo</label>
            <div class="col-sm-4 mx-auto">
                <input type="text" id="nickname" name="name" placeholder="Entrez votre pseudo" class="form-control" maxlength="255" required autofocus >
            </div>
        <br>
        <br>
        <div>
        <div class="form-group">
            <label for="password" class="col-sm-3 mt-4 control-label">Mot de Passe</label>
            <div class="col-sm-4 mx-auto">
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"  class="form-control" maxlength="255" required autofocus >
            </div>
        </div>
        <br>
        <br>
        <div class="col-12">
            <button class="btn btn-secondary text-white" type="submit">Connection</button>
        </div>
        <br> 
        <br>
    </form>
</div>
<?php include("footer.php"); ?>


