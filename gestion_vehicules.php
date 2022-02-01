<?php
	$unControleur->setTable ("vehicule");

	$unVehicule = null;

	if(isset($_GET['idvehicule']) && isset($_GET['action']))
            {
                if ($_GET['action'] == "s")
                	// si clic sur icône de suppression
                {
                    $unControleur->deleteVehicule($_GET['idvehicule']);
                    // suppression
                }
                else if ($_GET['action'] == "u")
                {
                	// si clic sur icône de modification
                    $unVehicule = $unControleur->selectWhereVehicule($_GET['idvehicule']);
                    // modification
                }
            }
    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateVehicule($_POST);
                echo "<br> <p>Modification réussie du véhicule</p>";
                $unVehicule = null; //on nettoie le formulaire
            }
            $lesVehicules = $unControleur->selectAllVehicules();


	//appel de la méthode selectAllVehicules
	$lesVehicules = $unControleur->selectAllVehicules();

	//appel de la vue
	require_once("vue/vue_les_vehicules.php"); 
?>