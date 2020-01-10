<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulaire Entrees/Sorties</title>
	<!-- css -->
	<link rel="stylesheet" href="css/Style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/fpdf.css">
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
<?php 
	if (isset($_GET["page"]))
	{	
		$page = $_GET["page"]; 

		switch ($page) 
		{
		case "accueil":
			include("accueil.inc.php");
			break;
		case "entree":
			include("entree.inc.php");
			break;
		case "sortie":
			include("sortie.inc.php");
            break;
        default:
            include("accueil.inc.php");
			break;
		}
	}
    else
    {
        include("accueil.inc.php");
    }
?>
<script>
    $("#recup-pc").change(function () {
        if ($(this).val() == "Oui")
        {
            $("#remove-recup").hide(1000);
        }
        else
        {
            $("#remove-recup").show(1000);
        }
    });

    $("#suppr-compte").change(function () {
        if ($(this).val() == "Oui")
        {
            $(".remove-compte").hide(1000);
        }
        else
        {
            $(".remove-compte").show(1000);
        }
    });

    $("#conserv-email").change(function () {
        if ($(this).val() == "Oui")
        {
            $("#remove-email").show(1000);
        }
        else
        {
            $("#remove-email").hide(1000);
        }
    });

    $("#redirect-email").change(function () {
        if ($(this).val() == "Oui")
        {
            $("#remove-redirect").show(1000);
        }
        else
        {
            $("#remove-redirect").hide(1000);
        }
    });

    $("#save-doc").change(function () {
        if ($(this).val() == "Oui")
        {
            $("#remove-doc").show(1000);
        }
        else
        {
            $("#remove-doc").hide(1000);
        }
    });
	$("#contrat").change(function () {
        if ($(this).val() != "CDI")
        {
            $("#date-block-out").show(1000);
        }
        else
        {
            $("#date-block-out").hide(1000);
        }
    });

</script>
</body>

<footer>
	<div class="container-footer">
		<button type="button" class="btn btn-lg btn-light" id="back-top" href="#top" onclick="backTop();">Retour en haut de la page</button>
		<div class="copyright">
            <hr class="small-line">
			<p>&copy; Stocko 2019</p>
		</div>
	</div> <!-- /container -->
</footer>
</html>