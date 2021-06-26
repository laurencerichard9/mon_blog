<?php
if(
    !isset($_SESSION['utilisateur'])
    || $_SESSION['utilisateur']['role'] !== 'visitor'
){
    header('Location: ../index.php');
    exit();
}
