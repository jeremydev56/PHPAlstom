<?php
	require_once ("controleur/controleur.class.php");
	require_once ("conf/config.ini"); 
	//instacier la classe Controleur 
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Base de données | Alstom</title>
	<link href="IMAGE.ico" rel="shortcut icon" >
    <link rel="stylesheet" type="text/css" href="style.css">
   	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css">


<body>
	<video id="video" autoplay="true" loop muted playsinline >
        <source src="video.mp4" type="video/mp4"> 
    </video>

    <header>
			<nav>
				<ul class="menu-area">
					<li><a href="index.php?page=1"> Les Administrateurs </a></li>
					<li><a href="index.php?page=2"> Les Employés </a></li>
					<li><a href="index.php?page=3"> Les Bus </a></li>
					<li><a href="index.php?page=4"> Les Métros </a></li>
					<li><a href="index.php?page=5"> Les TGV </a></li>
					<li><a href="index.php?page=6"> Les Véhicules </a>
				</ul>
			</nav>
		</header>

		<center>
			<h1> Gestion et Stockage des biens de l'entreprise ALSTOM</h1>

		
			
		</br></br></br>

		<div class="corps">

		<?php

			$page = (isset($_GET['page'])) ? $_GET['page'] : 0 ; 
			// si demande de la page, renvoi de la page demandée
		
			switch ($page)
			{
				case 1 : 
				    require_once("gestion_admins.php");
				break; 
				case 2 :
					require_once("gestion_employes.php");
				break;
				case 3 : 
					require_once("gestion_bus.php");
				break;
				case 4 :
					require_once("gestion_metro.php");
				break;
				case 5 :
					require_once("gestion_tgv.php");
				break; 
				case 6 : 
					require_once("gestion_vehicules.php");
				break; 
			}

			$_SESSION['search'] = $search = $_GET['search'] ?? NULL;
			if ($search)
            {
                require_once("search.php");
            }

			$verification = $_GET['verification'] ?? NULL;
            if ($verification)
                require_once("verification.php");
		?>
		</div>

		<footer>
        	<div class="bas">
            
            	<a href="https://www.alstom.com/fr" target="blank"><img src="alstom.jpeg">

            	<a href="https://fr-fr.facebook.com/ALSTOM" target="blank"><img src="facebook.png"></a>
            	
            	<a href="https://www.instagram.com/accounts/login/?next=/alstom/" target="blank"><img src="instagram.jpg"></a>
            	
            	<a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFg7UPfIVSuHAAAAXhfjOrwBOXH5AvqFgrpZEE-Pk6VoO25GGi18Es1FK4bT6z6cGIyf4223fL4XUIjvVEC-zCi947P2JSFP2chwpwoN_dVdVHfZVhzd4nV8PEvQeLyyaPDH7c=&originalReferer=https://www.alstom.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Falstom" target="blank"><img src="linkedin.png"></a>

        		<p class="copyright">© Alstom FRANCE - 2021</p>

        		<p class="legal"><a href="mentions_legales.php" target="blank">Mentions légales</p></a>

        	</div>
    	</footer>

	</center>	

</body>
</html>

<!--
        			a = le lien
        			href = l'envoi vers le lien (EXTERNE OU INTERNE)
        			src = la source du document dans le projet
        			target = "blank" = lien cliquable vers un nouvel onglet
        		-->