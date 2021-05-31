<?php require_once("header.php");
// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post ORDER BY publication_date DESC LIMIT 0,3');
$maRequete->execute();
$post = $maRequete->fetch();
?>


<?php if(isset($_SESSION['user'])): ?>
<p>Connecté en tant que : <?php echo $_SESSION['user']['nick_name']; ?></p>
<?php endif; ?>

       <h1>Affichage du dernier article sur la page d'accueil</h1>
    <article class="post">
<h2><?php echo $post['title']; ?></h2>
<p><?php echo $post['headline']; ?></p>
<p><?php echo $post['content']; ?></p>
<p><?php echo $post['last_update_date']; ?></p>

    </article>
<?php require_once("footer.php"); ?>

