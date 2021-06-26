<?php
if(
	!isset($_SESSION['utilisateur']) // S'il n'est pas connecté
	|| $_SESSION['utilisateur']['role'] !== 'visitor' // ou alors (il est connecté) mais son rôle n'est pas admin
){
	header('Location: index.php');
	exit();	
}
