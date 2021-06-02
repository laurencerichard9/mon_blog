# My Blog
Blog PHP professionnel, sans CMS ni framework PHP.
Travail réalisé dans le cadre de la formation "Développeur d'Applications - PHP" sur OpenClassrooms.

Pré-requis et technologies :
Serveur : Vous avez besoin d'un serveur web avec PHP7 et le SGBD MySQL.
Versions utilisées dans ce projet : Apache 2.2.34 - PHP 7.2.10 - MySQL 5.7.23

Langages et bibliothèques : Ce projet est codé en PHP7, HTML5, CSS3 et JS.
Bibliothèques CSS/JS, incluses via des liens CDN :
- Bootstrap 4.4.1
- Font-awesome 5.6.3

Installation
Télécharger les fichiers zip ou cloner le dépôt du projet avec GitHub (voir la documentation GitHub).
Créer la base de données :
1) Créer une nouvelle base de données MySQL dans votre SGBD.
2) Importez le fichier myblog.sql
Notez que les tables rôles et statuts contiennent des étiquettes françaises par défaut. Vous pouvez les mettre à jour pour les traduire dans n'importe quelle langue.

- table status :
ID  -   Libellé français   Constante correspondante dans le code
0   -   brouillon   -   STATUS_DRAFT
1   -   soumis      -   STATUS_SUBMITTED
2   -   approuvé    -   STATUS_APPROVED
3   -   rejeté      -   STATUS_REJECTED

- table des rôles :
ID  -   Label français  -   Constante correspondante dans le code
0   -   défaut          -   ROLE_DEFAULT
1   -   admin           -   ROLE_ADMIN
2   -   visiteur        -   ROLE_VISITOR

DB Schema
Importer le PDF ou JPG du MPD créé dans Workbench
Diagramme des tables

USAGE
Visitez votre nouveau site
Ouvrez le fichier index.php dans votre navigateur préféré. C'est votre page d'accueil !
Liste des URLs publiques que vous pouvez ouvrir dans votre navigateur :
Les visiteurs doivent être connectés et approuvés pour accéder à leurs pages de back-office.

Contexte - Page - URL de 'index.php' - Utilisateurs autorisés
Front - Accueil - Tous
Front - News - 'article_all.php' - Tous
Front - Post #ID - ?IDdePost - Tous
Front - Contactez-moi - 'contact.php' - Tous
Front - Inscription -'user_register.php' - Tous
Front - Connection - 'user_login.php' - Tous
Front - 404 error - ?page='404-error.php' - Tous
Admin - Tableau de bord - ?admin - Admin, Visitor
Admin - Gérer les posts - ?admin='article_all.php' - Admin, Visitor
Admin - Ajouter un post - ?admin='article_create.php' - Admin, Visitor
Admin - Modifier un post - ?IDdePost='article_edit.php' - Admin, Visitor
Admin - Supprimer un post - ?IDdePost='article_delete.php' - Admin, Visitor
Admin - Gérer les commentaires - ?admin'comment_admin.php' - Admin, Visitor (authentifié et qui a posté)
Admin - Gérer les commentaires du post #ID - ?admin='article.single.php' - Admin, Visitor (authentifié et qui a posté)
Admin - Modifier le commentaire #ID - ?'article_single.php' - Admin
Admin - Gérer les utilisateurs - ?admin'admin_check.php' - Admin
Admin - Modifier l'utilisateur #ID Gérer mon profil - ?admin'admin_user.php' - Admin

Créez votre profil d'administrateur
1) Vous vous enregistrez comme nouvel utilisateur via le formulaire d'enregistrement (index.php?page=user_register.php)
2) Mettez à jour votre profil utilisateur dans la base de données pour définir le statut à 2 (= approuvé) et le rôle à 1 (= admin) :(si votre ID utilisateur n'est pas 1, remplacez-le par le bon ID utilisateur).
UPDATE 'user' SET 'status' = '2', 'role' = '1' WHERE 'user' . 'id' = 1
3) Connectez-vous à l'administration (index.php?page=user_login.php) pour vérifier que vous êtes administrateur.
4) Commencez à gérer votre site !

