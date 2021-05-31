<?php
require_once('database.php'); 

if(

    isset($_POST['first_name'])
    && isset($_POST['last_name'])
    && isset($_POST['nick_name'])
    && isset($_POST['email_address'])
    && isset($_POST['password'])
    && isset($_POST['password_verify'])
    && $_POST['first_name'] !== ''
    && $_POST['last_name'] !== ''
    && $_POST['nick_name'] !== ''
    && $_POST['email_address'] !== ''
    && $_POST['password'] !== ''
    && $_POST['password_verify'] !== ''
    && $_POST['password'] === $_POST['password_verify']
    && strlen($_POST['first_name']) <= 255
    && strlen($_POST['last_name']) <= 255
    && strlen($_POST['nick_name']) <= 255
    && strlen($_POST['email_address']) <= 255
    && strlen($_POST['password']) <= 255

){
    echo "Les données sont valides";

$maRequete = $db->prepare('INSERT INTO user (first_name, last_name, nick_name, email_address, password) VALUES(:lePrenom, :leNom, :lePseudo, :leEmail, :leMotdePasse)');
$maRequete->execute([
        "lePrenom" => $_POST['first_name'],
        "leNom" => $_POST['last_name'],
        "lePseudo" => $_POST['nick_name'],
        "leEmail" => $_POST['email_address'],
        "leMotdePasse" => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);

    if($insertion){
        header('Location: user_login.php');
        exit();
    }

} else {
    echo "Les données sont invalides";
}

    header('Location: user_register.php');
    exit();

?>