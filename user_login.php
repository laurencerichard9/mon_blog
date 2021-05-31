<?php include("header.php"); ?>
<div class="text-center formulaire-min-height connection-padding">
    <form action="user_login_handling.php" method="POST" class="form-signin">
        <img class="mb-4" src="logo/robot&me.png" alt="mon logo" width="72" height="72">
        <hr>
        <h1 class="h3 mb-3 py-4 font-weight-normal">Connection</h1>
        <div class="form-group">
            <label for="nick_name" class="col-sm-3 control-label">Pseudo</label>
            <div class="col-sm-4 mt-4 mx-auto">
                <input type="text" id="nick_name" name="nick_name" placeholder="Entrez votre pseudo" class="form-control" maxlength="50" required autofocus >
            </div>
        <br>
        <br>
        <div>
        <div class="form-group">
            <label for="password" class="col-sm-3 mt-4 control-label">Mot de Passe</label>
            <div class="col-sm-4 mx-auto">
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"  class="form-control" maxlength="50" required autofocus >
            </div>
        </div>
        <br>
        <br>
            <button type="submit" class="btn btn-secondary btn-block col-sm-2 mt-4 mx-auto">Connection</button>
        <br>
    </form>
</div>
<?php include("footer.php"); ?>


