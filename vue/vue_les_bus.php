<h3> Liste des Bus de notre entreprise </h3>

<table class="tableau" border= 1>
	<tr> 
			<td> ID Bus </td>
			<td> Matricule </td>
			<td> Marque </td>
			<td> Nombre de kilomètres </td> 
			<td> Énergie </td>
			<td> Ancienneté </td>
			<td> Illustrations </td>

	</tr>

	<?php 
	foreach ($lesBus as $unBus) {
		echo "<tr> 
				<td>".$unBus['idbus']." </td>
				<td>".$unBus['matricule']." </td>
				<td>".$unBus['marque']." </td>
				<td>".$unBus['nbkm']." </td>
				<td>".$unBus['energie']." </td>
				<td>".$unBus['anciennete']." </td>
				<td>".$unBus['illustration']."</td>
			  </tr>";
		}


    ?>

</table>
<?php
$_SESSION['search'] = "bus";
require_once("vue/vue_form_search.php");
?>