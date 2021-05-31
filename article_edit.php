<?php require_once('header.php'); 
require_once("admin_check.php");
require_once('database.php'); 

$maRequete = $db->prepare(
    'SELECT *
    FROM post
    WHERE id = :boiteId
    ');

$maRequete->execute([
    "boiteId" => $_GET["idDePost"]
]);

$rendu = $maRequete->fetch();


?>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<form action="article_edit_handling.php?idDePost=<?php echo $rendu['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="formulaire">
        <label for="name">Titre</label>
        <input class="text-formulaire" type="text" name="titre" maxlength="255"  value="<?php echo $rendu['title']; ?>" required>
        <label for="contenu">Contenu</label>
        <textarea class="text-formulaire" id="contenu" name="contenu"><?php echo $rendu['content']; ?></textarea>

    <p><button class="valider" type="submit">Valider</button></p>
    </div>
</form>
<?php require_once('footer.php'); ?>
