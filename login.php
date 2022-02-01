<?php
require_once ("controleur/controleur.class.php");
require_once ("conf/config.ini");
//instacier la classe Controleur
$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>
<html>
	<head>
		<meta charset="utf-8">
		<!-- importer le fichier de style -->
		<link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
	</head>
	<body>
  
		<div id="container">
			<!--zone de connexion -->

			<form action="index.php?verification=1" method="POST">
				<h1>Connexion</h1>

				<label><b>Nom d'utilisateur</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="username">

				<label><b>Mot de passe </b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="password">

				<input type="submit" id='submit' value='LOGIN'>

				<?php
				if(isset($_GET['erreur']))
				{
					$err = $_GET['erreur'];
					if($err==1 || $err==2)
						echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
				}
				?>
			</form>
		</div>
	</body>
</html>					