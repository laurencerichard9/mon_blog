<?php
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
    $db = new PDO('mysql:dbname=myblog;host=localhost', 'root', 'root', $pdo_options);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $error) {
    echo "Une erreur est survenue. Veuillez réessayer plus tard.";
}
