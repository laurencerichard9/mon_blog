<?php
session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']); // Supprime $_SESSION['utilisateur']
}

header('Location: index.php');
exit();
