<?php require_once("header.php");
// Faire en sorte que si l'utilisateur n'est pas admin, il ne puisse pas accéder à cette page

require_once("admin_check.php");	


// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post ORDER BY publication_date DESC');
$maRequete->execute();
$post = $maRequete->fetchAll();

?>

<h1>Liste de toutes les news</h1>

<a href="article_create.php">Créer un nouveau post</a>

	<table>
		<tr>
			<th>id</th>
			<th>title</th>
            <th>publication_date</th>
			<th colspan="2">actions</th>
		</tr>
<?php
	// pour chaque ligne (chaque enregistrement)
	foreach ( $post as $row ) 
	{
		// DONNEES A AFFICHER dans chaque cellule de la ligne
?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['headline']; ?></td>
			<td><?php echo $row['content']; ?></td>
			<td><?php echo $row['creation_date']; ?></td>
			<td><?php echo $row['last_update_date']; ?></td>
            <td><?php echo $row['publication_date']; ?></td>
            <td><?php echo $row['enum_status_post']; ?></td>
			<td>
				<a href="article_edit.php?idDepost=<?php echo $row['id']; ?>">Modifier</a>
			</td>
			<td>
				<a href="article_delete.php?idDepost=<?php echo $row['id']; ?>">Supprimer</a>
			</td>
			
		</tr>
<?php
	} // fin foreach
?>
	</table>

<?php require_once("footer.php"); 

?>