<?php
	$unControleur->setTable ("bus");

	$unBus = null;

	if(isset($_GET['idbus']) && isset($_GET['action']))
            {
                if ($_GET['action'] == "s")
                	// si clic sur icône de suppression
                {
                    $unControleur->deleteBus($_GET['idbus']);
                    // suppression
                }
                else if ($_GET['action'] == "u")
                {
                	// si clic sur icône de modification
                    $unBus = $unControleur->selectWhereBus($_GET['idbus']);
                    // modification
                }
            }
    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateBus($_POST);
                echo "<br> <p>Modification réussie du bus</p>";
                $unBus = null; //on nettoie le formulaire
            }
            $lesBus = $unControleur->selectAllBus();


	//appel de la méthode selectAllVehicules
	$lesBus = $unControleur->selectAllBus();

	//appel de la vue
	require_once("vue/vue_les_bus.php"); 
?>