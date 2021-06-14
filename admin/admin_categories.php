<?php
include("header_admin.php");
require_once("admin-check.php");
/*créer un check pour verifier si la personne est connectée en tant qu'admin
require_once("admin-check.php"); ou mettre ça dans le header_admin*/
require_once("../database.php");

$maRequete = $db->prepare('SELECT * FROM post');
$maRequete->execute();
$news = $maRequete->fetchAll();

?>
<div class="container">
    <h1 class="text-center">Liste des news</h1>
    <a href="admin_category_create.php" class="m-auto">Créer une nouvelle news</a>
    <div class="div-form-center">
        <table class="table table-bordered m-auto ">
            <thead >
                <th scope="col" style="background: #f5f5dc" class="text-center">NOM NEWS</th>
                <th colspan="2" style="background: #f5f5dc" class="text-center">ACTIONS</th>
            </thead>
            <tbody>
            <?php foreach($news as $post): ?>
                <tr>
                    <td class="text-center"><?php echo $post['nick_name']; ?></td>
                    <td class="text-center">
                        <a href="admin_category_edit.php?idPost=<?php echo $post["id"];?>" class="btn btn-warning ">modifier</a>
                        <a href="admin_category_delete.php?idPost=<?php echo $post["id"];?>" class="btn btn-danger ">supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer_admin.php');?>