<?php
	$unControleur->setTable ("tgv");

	$unTgv = null;

	if(isset($_GET['idtgv']) && isset($_GET['action']))
            {
                if ($_GET['action'] == "s")
                	// si clic sur icône de suppression
                {
                    $unControleur->deleteTgv($_GET['idtgv']);
                    // suppression
                }
                else if ($_GET['action'] == "u")
                {
                	// si clic sur icône de modification
                    $unTgv = $unControleur->selectWhereTgv($_GET['idtgv']);
                    // modification
                }
            }
    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateTgv($_POST);
                echo "<br> <p>Modification réussie du TGV</p>";
                $unTgv = null; //on nettoie le formulaire
            }
            $lesTgv = $unControleur->selectAllTgv();


	//appel de la méthode selectAllTgv
	$lesTgv = $unControleur->selectAllTgv();

	//appel de la vue
	require_once("vue/vue_les_tgv.php"); 
?>