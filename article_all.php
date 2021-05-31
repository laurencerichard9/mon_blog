<?php require_once("header.php");
// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post ORDER BY publication_date DESC');
$maRequete->execute();
$post = $maRequete->fetchAll();

?>
       
            <h1>Liste de tous les articles</h1>
<?php foreach ($post as $rendu): ?>
    <article class="post">
    <h2>
        <a href="article_single.php?idDePost=<?php echo $rendu['id']; ?>">
            <?php echo $rendu['title']; ?>
        </a>
    </h2>
    <p><?php echo $rendu['headline']; ?></p>
    <p><?php echo $rendu['content']; ?></p>
    <p><?php echo $rendu['creation_date']; ?></p>
    <p><?php echo $rendu['last_update_date']; ?></p>
    <p><?php echo $rendu['publication_date']; ?></p>
    </article>
<?php endforeach; ?>



<?php require_once("footer.php"); ?>
