<?php
if(
	!isset($_SESSION['user']) // S'il n'est pas connecté
	|| $_SESSION['user']['role'] !== 'admin' // ou alors (il est connecté) mais son rôle n'est pas admin
){
	header('Location: index.php');
	exit();	
}
