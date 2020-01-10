<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_sortie = date("d-m-Y", strtotime($_POST["sortie-date-out"]));
$matricule = $_POST['matricule'];
$badge = $_POST['badge'];
$contrat = $_POST['contrat'];
$service = $_POST['service'];
$section_analytique = $_POST['section-analytique'];
$superieur = $_POST['superieur'];
$recup_pc = $_POST['recup-pc'];
$qui_reutil_pc = $_POST['qui-reutil-pc'];
$save_doc = $_POST['save-doc'];
$quel_doc = $_POST['quel-save-doc'];
$suppr_compte = $_POST['suppr-compte'];
$conserv_email = $_POST['conserv-email'];
$date_conserv_email = date("d-m-Y", strtotime($_POST['date-conserv-email']));
$redirect_email = $_POST['redirect-email'];
$qui_redirect_email = $_POST['qui-redirect-email'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulaire Sorties</title>
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
	<h1>FORMULAIRE DE SORTIE</h1>

	<hr class="small-line">

		<h3>INFOS SUR LA PERSONNE</h3>
		<div class="recap-infos">
			<div class="item3">
				<p>Nom: <?php echo $nom;?></p>
			</div>
			<div class="item3">
				<p>Matricule: <?php echo $matricule;?></p>
			</div>
			<div class="item3">
				<p>N° Badge: <?php echo $badge;?></p>
			</div>
			<div class="item3">
				<p>Prénom: <?php echo $prenom;?></p>
			</div>
			<div class="item3">
				<p>Type contrat: <?php echo $contrat;?></p>
			</div>
			<div class="item3">
				<p>Service: <?php echo $service;?></p>
			</div>
			<div class="item3">
				<p>Date sortie: <?php if($date_sortie != "01-01-1970") {echo $date_sortie;}else{echo "Non communiquée";}?></p>
			</div>
			<div class="item3">
				<p>Section analytique: <?php echo $section_analytique;?></p>
			</div>
			<div class="item3">
				<p>Suppérieur hiérarchique: <?php echo $superieur;?></p>
			</div>
		</div>

	<hr class="small-line">

		<h3>INFORMATIQUE</h3>
	<div class="recap-informatique">
			<div class="item2">
				<p>Ordinateur récupérable par le SI: <?php echo $recup_pc;?></p>
			</div>
		<div class="item2">
				<p>Si non, il sera réutilisé par: <?php if($qui_reutil_pc != "") {echo $qui_reutil_pc;} else {echo "N/C";}?></p>
			</div>
		</div>


		<div class="recap-informatique">
			<div class="item2">
				<p>Documents à sauvegarder: <?php echo $save_doc;?></p>
			</div>
			<div class="item2">
				<p>Lesquels: <?php if($quel_doc != "") {echo $quel_doc;} else {echo "N/C";}?></p>
			</div>
		</div>
	

		<div class="recap-informatique">
			<div class="item2">
				<p>Suppression du compte: <?php echo $suppr_compte;?></p>
			</div>
			<div class="item2">
				<!-- Empty because of odd number. Remove if even -->
			</div>
		</div>


		<div class="recap-informatique">
			<div class="item2">
				<p>Conservation de l'adresse mail: <?php echo $conserv_email;?></p>
			</div>
			<div class="item2">
				<p>Jusque au: <?php if($date_conserv_email != "") {echo $date_conserv_email;} else {echo "N/C";}?></p>
			</div>
		</div>


		<div class="recap-informatique">
			<div class="item2">
				<p>Redirection: <?php echo $redirect_email;?></p>
			</div>
			<div class="item2">
				<p>Si oui vers l'adresse: <?php if($qui_redirect_email != "") {echo $qui_redirect_email;} else {echo "N/C";}?></p>
			</div>	
		</div>
		<hr class="small-line">
	
	<div class="recap-btns">
		<a class="btn btn-lg btn-danger" href="javascript:history.go(-1)" id="btn-correct">Je souhaite me corriger</a>
	
		<!-- Hidden form to create pdf -->
		<form name="pdf-form-exit" id="pdf-form-exit" action="pdfsortie.php" method="POST">
			<input type="hidden" value="<?php echo $nom;?>" name="h_nom">
			<input type="hidden" value="<?php echo $prenom;?>" name="h_prenom">
			<input type="hidden" value="<?php echo $date_sortie;?>" name="h_date_sortie">
			<input type="hidden" value="<?php echo $matricule;?>" name="h_matricule">
			<input type="hidden" value="<?php echo $badge;?>" name="h_badge">
			<input type="hidden" value="<?php echo $contrat;?>" name="h_contrat">
			<input type="hidden" value="<?php echo $service;?>" name="h_service">
			<input type="hidden" value="<?php echo $section_analytique;?>" name="h_section_analytique">
			<input type="hidden" value="<?php echo $superieur;?>" name="h_superieur">
			<input type="hidden" value="<?php echo $recup_pc;?>" name="h_recup_pc">
			<input type="hidden" value="<?php echo $qui_reutil_pc;?>" name="h_qui_reutil_pc">
			<input type="hidden" value="<?php echo $save_doc;?>" name="h_save_doc">
			<input type="hidden" value="<?php echo $quel_doc;?>" name="h_quel_doc">
			<input type="hidden" value="<?php echo $suppr_compte;?>" name="h_suppr_compte">
			<input type="hidden" value="<?php echo $conserv_email;?>" name="h_conserv_email">
			<input type="hidden" value="<?php echo $date_conserv_email;?>" name="h_date_conserv_email">
			<input type="hidden" value="<?php echo $redirect_email;?>" name="h_redirect_email">
			<input type="hidden" value="<?php echo $qui_redirect_email;?>" name="h_qui_redirect_email">
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
		<div class="copyright" id="copyright">
		</div>
	</div>
</footer>
</html>

