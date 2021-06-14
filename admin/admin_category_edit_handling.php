<?php session_start(); ?>
<?php 
require_once("admin-check.php");
require_once('../database.php');
if(
    isset($_POST['nick_name'])
    && $_POST['nick_name'] !== ''
    && strlen ($_POST['nick_name']) <= 50
){
	
	$maRequete = $db->prepare('UPDATE post SET name = :boiteName WHERE id = :boiteId' );

	$maRequete->execute([
	    "boiteName" =>$_POST['nick_name'],
	    "boiteId" =>$_GET['id']
	]);
}

header('Location: admin_categories.php');
exit();