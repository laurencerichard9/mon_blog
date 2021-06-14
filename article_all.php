<?php require_once("header.php");
// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT id, title, headline, DATE_FORMAT(last_update_date, \'%d/%m/%Y à %Hh%i\') AS last_update_date_fr FROM post ORDER BY last_update_date DESC');
$maRequete->execute();
$post = $maRequete->fetchAll();
?>


    
    <h1 class="center">News</h1>
    <div class="container-fluid py-4">    
        <div class="row">
<?php foreach ($post as $rendu): ?>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="article_single.php?idDePost=<?php echo $rendu['id']; ?>">
                                <?php echo $rendu['title']; ?>
                            </a> 
                        </h3>
                        <h5><?php echo $rendu['headline']; ?></h5>
                        <br>
                        <p>Dernière mise à jour le :
                        <?php echo $rendu['last_update_date_fr']; ?></p>
                            <a href="article_single.php?idDePost=<?php echo $rendu['id']; ?>" class="btn btn-secondary stretched-link mt-2">Lire la suite...</a>
                    </div>
                </div>
            </div>
<?php endforeach; ?>
        </div>
    </div>
    
<?php require_once("footer.php"); ?>

            