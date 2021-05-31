<?php
session_start();
// $_POST : contient les valeurs de tous les champs du formulaire
// $_POST['title'] : contient la valeur du champ qui a pour name "titre"
// $_POST['content'] : contient la valeur du champ qui a pour name "contenu"

// Se connecter à la base de données avec les bons identifiants


require_once("admin_check.php");


require_once('database.php');

var_dump($_POST);


if(
    isset($_POST['title'])// et si le champ titre n'est pas vide
    && isset($_POST['content'])// et si le champ contenu n'est pas vide
    && $_POST['title'] !== '' /* le titre ne doit pas être une chaine de caractère vide*/
    && $_POST['content'] !== ''
    && strlen($_POST['title']) < 255 /*on vérifie si la chaine de caractère est inférieure à 255*/
    /*&& strlen($_POST['titre']) > 3 on vérifie si la chaine de caractère est supérieure à 3*/
){
    echo "les données sont valides";
    /**
     * STOCKAGE DES DONNEES EN BASE
     */


} else {
    echo "les données sont invalides";
}
// Rediriger l'utilisateur vers la page article_admin.php
header("Location: article_admin.php");
exit(); //pour que la redirection se fasse immédiatement
