<?php require_once("header.php");
/**
 * LISTER L'ENSEMBLE DES COMMENTAIRES DU SITE SOUS LA FORME D'UN TABLEAU HTML
 * (Contenu du commentaire, le nom de l'utilisateur, le titre de l'article associé au commentaire, Date de la publication du commentaire)
 * CETTE PAGE NE DOIT ETRE ACCESSIBLE QU'AUX ADMINS
 */
require_once("admin_check.php");	


// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');


// requête de récupération des commentaires de l'article
$requeteComments = $db->prepare(
    'SELECT comment.content, user.nickname, post.title, comment.publication_date  
    FROM comment
    JOIN user 
    ON comment.user_id = user.id
    JOIN post
    ON comment.post_id = post.id
    ');
    $requeteComments->execute();
$comments = $requeteComments->fetchAll();


?>

<h1>Liste de tous les commentaires</h1>

	<table>
		<tr>
            <th>content</th>
            <th>nickname</th>
            <th>title</th>
            <th>publication_date</th>
		</tr>
<?php
	// pour chaque ligne (chaque enregistrement)
	foreach ( $comments as $comment ) 
	{
		// DONNEES A AFFICHER dans chaque cellule de la ligne
?>
		<tr>
			<td><?php echo $comment['content']; ?></td>
            <td><?php echo $comment['nickname']; ?></td>
            <td><?php echo $comment['title']; ?></td>
            <td><?php echo $comment['publication_date']; ?></td>
        </tr>
    
<?php
	} // fin foreach
?>
	</table>

<?php require_once("footer.php"); ?>


