<h3> Liste des Métros de notre entreprise </h3>

<table class="tableau" border= 1>
	<tr> 
			<td> ID Métro </td>
			<td> Matricule </td>
			<td> Marque </td>
			<td> Nombre de kilomètres </td> 
			<td> Énergie </td>
			<td> Ancienneté </td>
	</tr>

	<?php 
	foreach ($lesMetros as $unMetro) {
		echo "<tr> 
				<td>".$unMetro['idmetro']." </td>
				<td>".$unMetro['matricule']." </td>
				<td>".$unMetro['marque']." </td>
				<td>".$unMetro['nbkm']." </td>
				<td>".$unMetro['energie']." </td>
				<td>".$unMetro['anciennete']." </td>
			  </tr>";
		}
	?>

</table>
<?php
$_SESSION['search'] = "metro";
require_once("vue/vue_form_search.php");
?>