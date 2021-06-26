<?php session_start(); 
require_once('database.php');

if(
    isset($_POST['nickname'])
    && isset($_POST['password'])
    && $_POST['nickname'] !== ''
    && $_POST['password'] !== ''
){
    $maRequete = $db->prepare('SELECT * FROM user WHERE nickname= :boitePseudo');
    $maRequete->execute([
        "boitePseudo" => $_POST['nickname']
    ]);
    $user = $maRequete->fetch();
    
    if($user && password_verify($_POST['password'],$user['password'])){        
        $_SESSION['utilisateur'] = $user;
        header('Location: index.php');
        exit();
    }else{
        header('Location: user_login.php');
        exit();
    }
    /*
    if($user && $_POST['password'] == $user['mdp']){
        $_SESSION['utilisateur'] = $user;
        header('Location: index.php');
        exit();
    }*/

}

?>
