<?php require_once('header.php'); 

require_once('admin_check.php');
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post');
$maRequete->execute();
$post = $maRequete->fetchAll();


?>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<form action="article_create_handling.php" method="POST" enctype="multipart/form-data">
    <div class="formulaire">
        <label for="name">Titre</label>
        <input class="text-formulaire" type="text" name="titre" maxlength="255" required>
        <label for="contenu">Contenu</label>
        <textarea class="text-formulaire" id="contenu" name="contenu"></textarea>

    <div><button class="valider" type="submit">Valider</button>
    </div>
</form>

<?php require_once('footer.php'); ?>
