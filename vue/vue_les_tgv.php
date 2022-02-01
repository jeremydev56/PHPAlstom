<h3> Liste des TGV de notre entreprise </h3>

<table class="tableau" border= 1>
	<tr>
			<td> ID TGV </td>
			<td> Matricule </td>
			<td> Marque </td>
			<td> Nombre de kilomètres </td> 
			<td> Énergie </td>
			<td> Ancienneté </td>
	</tr>

	<?php 
	foreach ($lesTgv as $unTgv) {
		echo "<tr> 
				<td>".$unTgv['idtgv']." </td>
				<td>".$unTgv['matricule']." </td>
				<td>".$unTgv['marque']." </td>
				<td>".$unTgv['nbkm']." </td>
				<td>".$unTgv['energie']." </td>
				<td>".$unTgv['anciennete']." </td>
			  </tr>";
	}
	?>
</table>
<?php
$_SESSION['search'] = "tgv";
require_once("vue/vue_form_search.php");
?>