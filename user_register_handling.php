<?php
require_once('database.php'); 

if(
    isset($_POST['firstname'])
    && isset($_POST['lastname'])
    && isset($_POST['nickname'])
    && isset($_POST['email'])
    && isset($_POST['password'])
    && isset($_POST['password_verify'])
    && $_POST['firstname'] !== ''
    && $_POST['lastname'] !== ''
    && $_POST['nickname'] !== ''
    && $_POST['email'] !== ''
    && $_POST['password'] !== ''
    && $_POST['password_verify'] !== ''
    && $_POST['password'] === $_POST['password_verify']
    && strlen($_POST['firstname']) <= 255
    && strlen($_POST['lastname']) <= 255
    && strlen($_POST['nickname']) <= 255
    && strlen($_POST['email']) <= 255
    && strlen($_POST['password']) <= 255
){
    echo "Les données sont valides";

$maRequete = $db->prepare('INSERT INTO user (firstname, lastname, nickname, email, password)
VALUES(:lePrenom, :leNom, :lePseudo, :leEmail, :leMotdePasse)');
$insertion = $maRequete->execute([
        "lePrenom" => $_POST['firstname'],
        "leNom" => $_POST['lastname'],
        "lePseudo" => $_POST['nickname'],
        "leEmail" => $_POST['email'],
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