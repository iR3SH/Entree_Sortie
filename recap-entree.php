<?php
$nom = $_POST['nom1'];
$prenom = $_POST['prenom'];
$date_entree = date("d-m-Y", strtotime($_POST["date-in"]));
$date_sortie = date("d-m-Y", strtotime($_POST["entree-date-out"]));
$matricule = $_POST['matricule'];
$badge = $_POST['badge'];
$contrat = $_POST['contrat'];
$service = $_POST['service'];
$section_analytique = $_POST['section-analytique'];
$superieur = $_POST['superieur'];
$fixe = $_POST['fixe'];
$dect = $_POST['dect'];
$apple = $_POST['dect'];
$android = $_POST['android'];
$pc = $_POST['pc'];
$laptop = $_POST['laptop'];
$surface = $_POST['surface'];
$reaffectation = $_POST['reaffectation'];
$brassage = $_POST['brassage'];
$email = $_POST['email'];
$internet = $_POST['internet'];
$sap = $_POST['sap'];
$licence_sap = $_POST['licence-sap'];
$articles_be = $_POST['articles-be'];
$groups = $_POST['groups'];
$impr = $_POST['impr'];
$softs = $_POST['softs'];
$droits = $_POST['droits'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulaire Entrees</title>
	<!-- css -->
	<link rel="stylesheet" href="css/Style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link href="font/fontawesome-free-5.3.1-web/css/all.css" rel="stylesheet">
		<!-- jQuery -->
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- <script>
	window.onload = function() {
		if (window.jQuery) {  
			// jQuery is loaded  
			alert("Yeah!");
		} else {
			// jQuery is not loaded
			alert("Doesn't Work");
		}
	}
	</script> Test if jQuery is loaded-->
	<!-- js -->
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- wow anims -->
	<script src="js/wow.min.js"></script>
	<script>
	    new WOW().init();
	</script>
</head>
<body>
    <a href="index.php?page=accueil">
    <img class="banner" id="top" src="images/banner.jpg" alt="stocko-banner">
    </a>
<div id="Page">
	<div class="container-recap">
		<h1>FORMULAIRE D'ENTRÉE</h1>

	<hr class="small-line">

		<h3>INFOS SUR LA PERSONNE</h3>
		<div class="recap-infos">
			<div class="item2">
				<p>Date entrée: <?php echo $date_entree;?></p>
			</div>
			<div class="item2">
				<p>Date sortie: <?php if($date_sortie != "") {echo $date_sortie;} else {echo "Non communiquée";}?></p>
			</div>
			<div class="item2">
				<p>Nom: <?php echo $nom;?></p>
			</div>
			<div class="item2">
				<p>Prénom: <?php echo $prenom;?></p>
			</div>
			<div class="item2">
				<p>Matricule: <?php echo $matricule;?></p>
			</div>
			<div class="item2">
				<p>N° Badge: <?php echo $badge;?></p>
			</div>
			<div class="item2">
				<p>Type contrat: <?php echo $contrat;?></p>
			</div>
			<div class="item2">
				<p>Service: <?php echo $service;?></p>
			</div>
			<div class="item2">
				<p>Section analytique: <?php echo $section_analytique;?></p>
			</div>
			<div class="item2">
				<p>Suppérieur hiérarchique: <?php echo $superieur;?></p>
			</div>
		</div>

	<hr class="small-line">

		<h3>ÉQUIPEMENTS</h3>
		<div class="recap-equip">
			<div class="item2">
				<p>Tel fixe: <?php echo $fixe;?></p>
			</div>
			<div class="item2">
				<p>DECT: <?php echo $dect;?></p>
			</div>
			<div class="item2">
				<p>Apple: <?php echo $apple;?></p>
			</div>
			<div class="item2">
				<p>Android: <?php echo $android;?></p>
			</div>
			<div class="item2">
				<p>PC fixe: <?php echo $pc;?></p>
			</div>
			<div class="item2">
				<p>Portable: <?php echo $laptop;?></p>
			</div>
			<div class="item2">
				<p>Surface: <?php echo $surface;?></p>
			</div>
			<div class="item2">
				<p>Réutilisation d'un matériel existant: <?php if($reaffectation != "") {echo $reaffectation;} else {echo "Non";}?></p>
			</div>
		</div>

	<hr class="small-line">
    
		<h3>CONFIG INFORMATIQUE</h3>
		<div class="recap-informatique">
			<div class="item2">
				<p>Prise murale: <?php if($brassage != "") {echo $brassage;} else {echo "Non communiquée";}?></p>
			</div>
			<div class="item2">
				<p>Création mail: <?php echo $email;?></p>
			</div>
			<div class="item2">
				<p>Accès internet: <?php echo $internet;?></p>
			</div>
			<div class="item2">
				<p>Install SAP: <?php echo $sap;?></p>
			</div>
			<div class="item2">
				<p>Licence SAP: <?php echo $licence_sap;?></p>
			</div>
			<div class="item2">
				<p>Accès plans BE: <?php echo $articles_be;?></p>
			</div>
		</div>

	<hr class="small-line">

		<h3>GROUPE(S)</h3>
		<div class="recap-informatique">
			<?php 
			if (!empty($_POST['groups']))
			{
				foreach($_POST['groups'] as $valeur)
				{
					echo "$valeur<br>";
				} 
			}
			else
			{
				echo "Non communiqué";
			}
			?>
		</div>

		<hr class="small-line">

		<h3>IMPRIMANTE(S)</h3>
		<div class="recap-informatique">
			<?php 
			if (!empty($_POST['impr']))
			{
				foreach($_POST['impr'] as $valeur)
				{
					echo "$valeur<br>";
				} 
			}
			else
			{
				echo "Non communiquée";
			}
			?>
		</div>

		<hr class="small-line">

		<h3>AUTRE(S) LOGICIEL(S)</h3>
		<div class="recap-informatique">
			<p><?php if($softs != "") {echo $softs;} else {echo "Non communiqué";}?></p>
		</div>

		<hr class="small-line">

		<h3>DROITS ACCÈS DOSSIER(S)</h3>
		<div class="recap-informatique">
			<p><?php if($droits != "") {echo $droits;} else {echo "Non communiqués";}?></p>
		</div>

		<hr class="small-line">

		<div class="recap-btns">
			<a class="btn btn-lg btn-danger" href="javascript:history.go(-1)" id="btn-correct">Je souhaite me corriger</a>
        
			<!-- Hidden form to create pdf -->
			<form name="pdf-form-entry" id="pdf-form-entry" action="pdfentree.php" method="POST">
				<input type="hidden" value="<?php echo $nom;?>" name="h_nom">
				<input type="hidden" value="<?php echo $prenom;?>" name="h_prenom">
				<input type="hidden" value="<?php echo $date_entree;?>" name="h_date_entree">
				<input type="hidden" value="<?php echo $date_sortie;?>" name="h_date_sortie">
				<input type="hidden" value="<?php echo $matricule;?>" name="h_matricule">
				<input type="hidden" value="<?php echo $badge;?>" name="h_badge">
				<input type="hidden" value="<?php echo $contrat;?>" name="h_contrat">
				<input type="hidden" value="<?php echo $service;?>" name="h_service">
				<input type="hidden" value="<?php echo $section_analytique;?>" name="h_section_analytique">
				<input type="hidden" value="<?php echo $superieur;?>" name="h_superieur">
				<input type="hidden" value="<?php echo $fixe;?>" name="h_fixe">
				<input type="hidden" value="<?php echo $dect;?>" name="h_dect">
				<input type="hidden" value="<?php echo $apple;?>" name="h_apple">
				<input type="hidden" value="<?php echo $android;?>" name="h_android">
				<input type="hidden" value="<?php echo $pc;?>" name="h_pc">
				<input type="hidden" value="<?php echo $laptop;?>" name="h_laptop">
				<input type="hidden" value="<?php echo $surface;?>" name="h_surface">
				<input type="hidden" value="<?php echo $reaffectation;?>" name="h_reaffectation">
				<input type="hidden" value="<?php echo $brassage;?>" name="h_brassage">
				<input type="hidden" value="<?php echo $email;?>" name="h_email">
				<input type="hidden" value="<?php echo $internet;?>" name="h_internet">
				<input type="hidden" value="<?php echo $sap;?>" name="h_sap">
				<input type="hidden" value="<?php echo $licence_sap;?>" name="h_licence_sap">
				<input type="hidden" value="<?php echo $articles_be;?>" name="h_articles_be">
				<input type="hidden" value="<?php echo implode("\n ",$groups);?>" name="h_groups">
				<input type="hidden" value="<?php echo implode("\n ",$impr);?>" name="h_impr">
				<input type="hidden" value="<?php echo $softs;?>" name="h_softs">
				<input type="hidden" value="<?php echo $droits;?>" name="h_droits">
				<input type="submit" value="Créer le PDF et l'enregistrer en local" name="btn-finish" id="btn-finish" class="btn btn-lg btn-success">
				<!--<input type="button" value="Imprimer le formulaire" name="btn-impression" id="btn-impression" class="btn btn-lg btn-default" onclick="imprimer_page()" href="javascript:window.print()">-->
			</form>
		</div> 
	</div>
</div>

</body>

<footer>
	<div class="container-footer">
		<button type="button" class="btn btn-lg btn-light" id="back-top" href="#top" onclick="backTop();">Retour en haut de la page</button>
	</div> <!-- /container -->
</footer>
</html>