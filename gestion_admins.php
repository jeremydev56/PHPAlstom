<?php
	$unControleur->setTable ("admin");

	$unAdmin = null;

    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateAdmin($_POST);
                echo "<br> <p>Modification réussie de l'administrateur</p>";
                $unAdmin = null; //on nettoie le formulaire
            }
            $lesAdmins = $unControleur->selectAllAdmins();

	//appel de la méthode selectAllAdmins
	$lesAdmins = $unControleur->selectAllAdmins();

	//appel de la vue
	require_once("vue/vue_les_admins.php"); 
?>