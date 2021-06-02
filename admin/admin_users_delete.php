<?php session_start(); ?>
<?php
require_once("admin-check.php");
require_once('../database.php');

$maRequete = $db->prepare("DELETE FROM user WHERE id = :boiteId ");
$maRequete->execute ([
    "boiteId" => $_GET["idPost"]
    

]);

header('Location: admin_users.php');
exit();