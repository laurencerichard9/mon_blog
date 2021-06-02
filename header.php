<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>My Blog</title>
    <meta name="author" content="Laurence Richard">
    <meta name="description" content="Mon premier blog en PHP">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
        <!-- All Material Icons are listed here : https://material.io/resources/icons/ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="background-color: #2C3E50;">
    <a class="navbar-brand" href="index.php"></a>
    <h3><a href="index.php">My Blog</a></h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="article_all.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contactez-moi</a>
        </li>
        
        <?php if(isset($_SESSION['user'])): ?>
                <?php if($_SESSION['user']['role'] === 'admin'): ?>
                    <li  class="nav-item">
                        <a class="nav-link bouton-rosepoudre" href="admin/index.php">Administration</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['user']['role'] === 'visitor'): ?>
                    <li  class="nav-item">
                        <a class="nav-link bouton-rosepoudre" href="article_all.php" >Espace visitor</a>
                    </li>
                <?php endif; ?>
                    <li  class="nav-item">
                            <a class="nav-link bouton-rosepoudre" href="user_logout.php" class="site-menu-item">Déconnexion</a>
                    </li>
                <?php else: ?>
                    <li  class="nav-item">
                        <a class="nav-link bouton-rosepoudre" href="user_login.php">Connection</a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link bouton-rosepoudre" href="user_register.php">Inscription</a>
                    </li>
        <?php endif; ?>
        <?php if(isset($_SESSION['user'])): ?>
                    <li  class="nav-item">
                        <p class="nav-link"> <?php echo $_SESSION['user']['nick_name']; ?></p>
                    </li>
        <?php endif; ?>
        </ul>
    </div>
    </nav>
    <div class="header-padding">
