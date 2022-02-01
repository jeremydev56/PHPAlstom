<?php
	$unControleur->setTable ("employe");

	$unEmploye = null;

    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateEmploye($_POST);
                echo "<br> <p>Modification réussie de l'employé</p>";
                $unEmploye = null; //on nettoie le formulaire
            }
            $lesEmployes= $unControleur->selectAllEmployes();


	//appel de la méthode selectAllEmployes
	$lesEmployes = $unControleur->selectAllEmployes();

	//appel de la vue
	require_once("vue/vue_les_employes.php"); 
?>