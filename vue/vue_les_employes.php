<h3> Liste des Employés de notre entreprise </h3>

<table class="tableau" border= 1>
	<tr> 
			<td> ID Employé </td>
			<td> Nom </td>
			<td> Prénom </td>
			<td> Qualification </td> 
			<td> Téléphone </td>
			<td> Ancienneté </td>
	</tr>

	<?php 
	foreach ($lesEmployes as $unEmploye) {
		echo "<tr> 
				<td>".$unEmploye['idemploye']." </td>
				<td>".$unEmploye['nom']." </td>
				<td>".$unEmploye['prenom']." </td>
				<td>".$unEmploye['qualification']." </td>
				<td>".$unEmploye['tel']." </td>
				<td>".$unEmploye['anciennete']." </td>
			  </tr>";
	}
	?>

</table>
<?php
$_SESSION['search'] = "employe";
require_once("vue/vue_form_search.php");
?>
