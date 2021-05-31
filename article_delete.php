<?php 
session_start();

require_once("admin_check.php");

/**
 * EFFECTUER LA SUPPRESSION DE L'ARTICLE DONT L'ID EST INDIQUE DANS L'URL
 */

require_once('database.php'); 


$maRequete = $db->prepare('DELETE FROM post WHERE id = :boiteId');
$maRequete->execute([
    "boiteId" => $_GET["idDePost"]
]);

 header('location: article_admin.php');
 exit();

