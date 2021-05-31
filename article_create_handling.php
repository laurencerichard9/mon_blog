<?php
session_start();
// Se connecter à la base de données, avec les bons identifiants

require_once("admin_check.php");

require_once('database.php');


var_dump($_POST);

if(
    isset($_POST['title'])
    && isset($_POST['headline'])
    && isset($_POST['content'])
    && $_POST['title'] !== '' /* le titre ne doit pas être une chaine de caractère vide*/
    && $_POST['headline'] !== ''
    && $_POST['content'] !== ''
    && strlen($_POST['title']) < 255 /*on vérifie si la chaine de caractère est inférieure à 255*/
    /*&& strlen($_POST['title']) > 3 on vérifie si la chaine de caractère est supérieure à 3*/
){
    echo "les données sont valides";
    /**
     * STOCKAGE DES DONNEES EN BASE
     */



    $maRequete = $db->prepare('INSERT INTO post (title, headline, content, publication_date) VALUES(:leTitre, :leChapo, :leContenu, NOW(),)');
    $maRequete->execute([
        "leTitre" => $_POST['title'],
        "leChapo" => $_POST['headline'],
        "leContenu" => $_POST['content'],  
    ]);

   

} else {
    echo "les données sont invalides";
}
// Rediriger l'utilisateur vers la page article_admin.php
header("Location: article_admin.php");
exit(); //pour que la redirection se fasse immédiatement
