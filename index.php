<?php require_once("header.php");
// Se connecter à la base de données, avec les bons identifiants
require_once('database.php');

$maRequete = $db->prepare('SELECT * FROM post ORDER BY last_update_date DESC LIMIT 0,5');
$maRequete->execute();
$post = $maRequete->fetch();
?>

<div class="container-fluid pt-0 pb-2 bgcolor-carousel">
			<div class="row mb-0 py-0">
				<div class="col">
                <img class="rounded-circle" src="images/robot&me.jpg" alt="image de moi" width="100" height="100">
                <br>
                <h4 class="center">Laurence Richard - Développeur Intégrateur Web</h4>
					<div id="carouselControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/carousel/main_horizon.jpg" class="d-block w-100"
									alt="visuel main vers horizon">
							</div>
							<div class="carousel-caption">
								<p class="subtitle-carousel">
									<h3>Be afraid of the enormity of the possible</h3>
								</p>
							</div>
							<div class="carousel-item">
								<img src="images/carousel/girl_power.jpg" class="d-block w-100"
									alt="visuel femme levant le bras">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
</div>


<?php require_once("footer.php"); ?>

