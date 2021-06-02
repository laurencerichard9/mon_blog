<?php require_once("header.php");
// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post ORDER BY publication_date DESC');
$maRequete->execute();
$post = $maRequete->fetchAll();
?>

    
    <h1 class="center">Liste de tous les articles</h1>
    <div class="container-fluid">    
        <div class="row">
<?php foreach ($post as $rendu): ?>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="card-title">

            
                            <a href="article_single.php?idDePost=<?php echo $rendu['id']; ?>">
                                <?php echo $rendu['title']; ?>
                            </a>
                        </h3>
                        <h5><?php echo $rendu['headline']; ?></h5>
                        <p><?php echo $rendu['last_update_date']; ?></p>
                    </div>
                </div>
            </div>
<?php endforeach; ?>
        </div>
    </div>

<?php require_once("footer.php"); ?>

            