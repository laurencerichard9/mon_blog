<?php
include("header_admin.php");
require_once("admin-check.php");
/*créer un check pour vérifier si la personne est connectée en tant qu'admin
require_once("admin-check.php"); ou mettre ça dans le header_admin*/
require_once("../database.php");

$maRequete = $db->prepare('SELECT * FROM user');
$maRequete->execute();
$user = $maRequete->fetchAll();

?>
<div class="container">
    <h1 class="text-center">Liste des Utilisateurs</h1>
    <div class="div-form-center">
        <table class="table table-bordered m-auto ">
            <thead >
                <th scope="col" style="background: #f5f5dc" class="text-center">PSEUDO</th>
                <th scope="col" style="background: #f5f5dc" class="text-center">ROLE</th>
                <th colspan="2" style="background: #f5f5dc" class="text-center">ACTIONS</th>
            </thead>
            <tbody>
            <?php foreach($user as $author): ?>
                <tr>
                    <td class="text-center"><?php echo $author['name']; ?></td>
                    <td class="text-center"><?php echo $author['role']; ?></td>
                    <td class="text-center">
                        <a href="admin_users_edit.php?idPost=<?php echo $author["id"];?>" class="btn btn-warning ">modifier</a>
                        <a href="admin_users_delete.php?idPost=<?php echo $author["id"];?>" class="btn btn-danger ">supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer_admin.php');?>