<?php include("header_admin.php");
require_once('../database.php');
require_once("admin-check.php");
$maRequete = $db->prepare('SELECT * FROM post');
$maRequete->execute();
$taches = $maRequete->fetchAll();

?>


<div class="container">
    <h1 class="text-center">Tableau de bord</h1>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rubrique News</h5>
                <p class="card-text">Partie necessaire pour gérer les news.</p>
                <a href="admin_categories.php" class="btn btn-primary">Gérer les news</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rubrique Users</h5>
                <p class="card-text">Partie necessaire pour gérer les utilisateurs.</p>
                <a href="admin_users.php" class="btn btn-primary">Gérer les utilisateurs</a>
            </div>
            </div>
        </div>
       
    </div>
</div>

<?php include("footer_admin.php"); ?>