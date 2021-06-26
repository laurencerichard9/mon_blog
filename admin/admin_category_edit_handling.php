<?php session_start(); ?>
<?php 
require_once("admin-check.php");
require_once('../database.php');
if(
    isset($_POST['nickname'])
    && $_POST['nickname'] !== ''
    && strlen ($_POST['nickname']) <= 50
){
	
	$maRequete = $db->prepare('UPDATE post SET name = :boiteName WHERE id = :boiteId' );

	$maRequete->execute([
	    "boiteName" =>$_POST['nickname'],
	    "boiteId" =>$_GET['id']
	]);
}

header('Location: admin_categories.php');
exit();