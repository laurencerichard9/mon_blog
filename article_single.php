<?php
include('header.php');
require_once('database.php'); 

// requête de récupération de la news
$maRequete = $db->prepare(
    'SELECT id, title, headline, content, DATE_FORMAT(last_update_date, \'%d/%m/%Y à %Hh%i\') AS last_update_date_fr
    FROM post
    WHERE id = :boiteId
    ');
$maRequete->execute([
    "boiteId" => $_GET["idDePost"]
]);
$rendu = $maRequete->fetch();

?>




<div class="container-fluid  py-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h3 class="post"><?php echo $rendu['title']; ?></h3>
            <h4 class="post"><?php echo $rendu['headline']; ?></h4>
            <h5 class="post"><?php echo $rendu['content']; ?></h5>
            <p class="post">Dernière mise à jour le : <?php echo $rendu['last_update_date_fr']; ?></p>
            <p><a href="article_all.php" class="retour-page-toutes-news btn btn-secondary stretched-link mt-4">revenir sur la page des dernières news</a></p>
        </div>
    </div>
</div>
<br>
<hr>

<div class="container-fluid">
    <h4 class="post">Déposez un commentaire</h4>
        <br>
            <div class="card col-md-12 col-lg-12 mx-auto py-4">
            <form action="comment_create_handling.php?idDePost=<?php echo $rendu['id']; ?>" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nick_name">Pseudo :</label>
                        <input type="text" name="nick_name" id="nick_name" class="form-control">
                    </div>
                    <div class="col">
                        <label for="email_address">Email :</label>
                        <input type="text" name="email_address" id="email_address" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="message">Commentaire :</label>
                    <textarea name="message" id="message" class="form-control" required></textarea>
                </div>
                <br><br>
                <div class="col-12">
                    <button class="btn btn-secondary text-white" type="submit" name="soumettre" id="soumettre" value="soumettre">Soumettre</button>
                </div>  
            </form>
            </div>
</div>


<?php
// requête de récupération des commentaires de la news
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
?>


<br>
<hr>
<div class="container-fluid">
    <h4 class="post">Commentaires</h4>
<!--// Afficher les commentaires avec un foreach-->
<?php foreach($comments as $comment): ?>
    <div class="offre">
        L'utilisateur ayant le pseudo <?php echo $comment['nick_name']; ?> a dit :
    <?php echo htmlspecialchars($comment['content']); ?>
<!-- on écrit htmlspecialchars lorsque l'on ne veut pas que l'utilisateur écrive n'importe quoi de sensible dans les commentaires par exemple...
A chaque endroit où l'utilisateur (internaute) devra écrire quelque chose (commentaire, avis...)-->
    </div>
<?php endforeach; ?>

</div>




<?php include('footer.php'); ?>
