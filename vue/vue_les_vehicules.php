<h3> Liste des Véhicules de notre entreprise </h3>

<table class="tableau" border= 1>
	<tr>
			<td> ID Véhicule </td>
			<td> Matricule </td>
			<td> Marque </td>
			<td> Nombre de kilomètres </td> 
			<td> Énergie </td>
			<td> Ancienneté </td>
	</tr>

	<?php 
	foreach ($lesVehicules as $unVehicule) {
		echo "<tr> 
				<td>".$unVehicule['idvehicule']." </td>
				<td>".$unVehicule['matricule']." </td>
				<td>".$unVehicule['marque']." </td>
				<td>".$unVehicule['nbkm']." </td>
				<td>".$unVehicule['energie']." </td>
				<td>".$unVehicule['anciennete']." </td>
			</tr>";
	}
	?>
</table>
<?php
$_SESSION['search'] = "vehicule";
require_once("vue/vue_form_search.php");
?>