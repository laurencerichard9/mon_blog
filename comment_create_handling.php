<?php
session_start();
// $_POST : contient les valeurs de tous les champs du formulaire
// $_POST['content'] : contient la valeur du champ qui a pour name "contenu"


// on vérifie si l'utilisateur est connecté
if(!isset($_SESSION['user'])){
    header('Location:user_login.php');
    exit();
}

// Se connecter à la base de données avec les bons identifiant
require_once('database.php');

// $_POST['content'] : le commentaire écrit par l'utilisateur
// $_SESSION['user']['id'] : l'id de l'utilisateur connecté
// $_GET['idDePost'] : l'id de l'article pour lequel le commentaire est posté


if(
    isset($_POST['content'])// et si le champ contenu n'est pas vide
    && $_POST['content'] !== ''
    && strlen($_POST['content']) < 10000 /*on vérifie si la chaine de caractère est inférieure à 10000*/
    
){
    echo "les données sont valides";
    /**
     * STOCKAGE DES DONNEES EN BASE
     */

    $maRequete = $db->prepare('INSERT INTO comment (content, post_id, user_id, publication_date) VALUES(:boiteContenu, :boitePostId, :boiteUserId, NOW())');
    $maRequete->execute([
        'boiteContenu' => $_POST['content'],
        'boitePostId' => $_GET['idDePost'],
        'boiteUserId' => $_SESSION['user']['id']
    ]);


} else {
    echo "les données sont invalides";
}
die();
// Rediriger l'utilisateur vers la page article_single.php
header('Location:article_single.php?idDePost=' . $_GET['idDePost']);
exit(); //pour que la redirection se fasse immédiatement
