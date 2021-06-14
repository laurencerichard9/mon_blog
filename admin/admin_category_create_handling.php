<?php session_start(); ?>
<?php
//check 
require_once("admin-check.php");
require_once('../database.php');
if(
    isset($_POST['nick_name'])
    && $_POST['nick_name'] !== ''
    && strlen ($_POST['nick_name']) <= 50
){
	$maRequete = $db->prepare('INSERT INTO post (nick_name)
	VALUE(:lePseudo)' );

	$maRequete->execute([
	    "lePseudo" =>$_POST['nick_name']
	]);
}



header('Location: admin_categories.php');
exit();