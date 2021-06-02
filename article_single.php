<?php
include('header.php');
require_once('database.php'); 

/* requête de récupération de l'article
$maRequete = $db->prepare(
    'SELECT *
    FROM post
    WHERE id = :boiteId
    ');
$maRequete->execute([
    "boiteId" => $_GET["id"]
]);
$post = $maRequete->fetch();





<?php 
$maRequete = $db->prepare('SELECT * FROM post  WHERE id = :boiteId'); 
$maRequete->execute([
"boiteId" => $rendu['id']
]);
$rendu = $maRequete->fetch();
?>

*/



// requête de récupération de l'article
$maRequete = $db->prepare(
    'SELECT *
    FROM post
    WHERE id = :boiteId
    ');
$maRequete->execute([
    "boiteId" => $_GET["idDePost"]
]);
$rendu = $maRequete->fetch();






// requête de récupération des commentaires de l'article
$requeteComments = $db->prepare(
    'SELECT comment.content, comment.publication_date, user.nick_name
    FROM comment JOIN user
    ON comment.user_id = user_id;
    WHERE post_id = :boitePostId
    ');
$requeteComments->execute([
    "boitePostId" => $_GET["idDePost"]
]);
$comments = $requeteComments->fetchAll();




// Afficher les commentaires avec un foreach

?>


<h1><?php echo $rendu['title']; ?></h1>
<?php echo $rendu['content']; ?>

<?php foreach($comments as $comment): ?>
<article class="offre">
L'utilisateur ayant le pseudo <?php echo $comment['nick_name']; ?> a dit :
<?php echo htmlspecialchars($comment['content']); ?>
<!-- on écrit htmlspecialchars lorsque l'on ne veut pas que l'utilisateur écrive n'importe quoi de sensible ex. <script>alert("hacké!");</script> dans les commentaires par exemple...
A chaque endroit où l'utilisateur (internaute) devra écrire quelque chose (commentaire, avis...)-->
</article>
<?php endforeach; ?>




<form action="comment_create_handling.php?idDePost=<?php echo $rendu['id']; ?>" method="POST">
    <div class="formulaire">
        <label for="contenu">Contenu de commentaire</label>
        <textarea class="text-formulaire" id="contenu" name="contenu" required></textarea>  
    <p><button class="envoyer" type="submit">Envoyer</button></p>
    </div>
</form>




<?php include('footer.php'); ?>
