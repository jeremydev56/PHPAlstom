<?php
	$unControleur->setTable ("metro");

	$unMetro = null;

	if(isset($_GET['idmetro']) && isset($_GET['action']))
            {
                if ($_GET['action'] == "s")
                	// si clic sur icône de suppression
                {
                    $unControleur->deleteMetro($_GET['idmetro']);
                    // suppression
                    echo "<br> <p>Suppression réussie du métro</p>";
                }
                else if ($_GET['action'] == "u")
                {
                	// si clic sur icône de modification
                    $unMetro = $unControleur->selectWhereMetro($_GET['idmetro']);
                    // modification
                }
            }
    if (isset ($_POST['Modifier']))
    	// si clic sur modifier
            {
                $unControleur->updateMetro($_POST);
                echo "<br> <p>Modification réussie du métro</p>";
                $unMetro = null; //on nettoie le formulaire
            }
            $lesMetros = $unControleur->selectAllMetros();

	//appel de la méthode selectAllMetros
	$lesBus = $unControleur->selectAllMetros();

	//appel de la vue
	require_once("vue/vue_les_metros.php"); 
?>