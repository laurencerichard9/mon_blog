<?php
if(
    !isset($_SESSION['utilisateur'])
    || $_SESSION['utilisateur']['role'] !== 'admin'
){
    header('Location: ../index.php');
    exit();
}
