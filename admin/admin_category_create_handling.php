<?php session_start(); ?>
<?php
//check 
require_once("admin-check.php");
require_once('../database.php');
if(
    isset($_POST['nickname'])
    && $_POST['nickname'] !== ''
    && strlen ($_POST['nickname']) <= 50
){
	$maRequete = $db->prepare('INSERT INTO post (nickname)
	VALUE(:lePseudo)' );

	$maRequete->execute([
	    "lePseudo" =>$_POST['nickname']
	]);
}



header('Location: admin_categories.php');
exit();