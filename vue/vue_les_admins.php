<h2> Liste des Administrateurs de notre entreprise </h2>

<table class="tableau" border= 1>
	<tr> 
			<td> ID Administrateur </td>
			<td> Nom </td>
			<td> Prénom </td>
			<td> Qualification </td> 
			<td> Téléphone </td>
			<td> Ancienneté </td>
	</tr>

	<?php 
	foreach ($lesAdmins as $unAdmin) {
		echo "<tr> 
				<td>".$unAdmin['idadmin']." </td>
				<td>".$unAdmin['nom']." </td>
				<td>".$unAdmin['prenom']." </td>
				<td>".$unAdmin['qualification']." </td>
				<td>".$unAdmin['tel']." </td>
				<td>".$unAdmin['anciennete']." </td>
			  </tr>";
			}
	?>

</table>
<?php
$_SESSION['search'] = "admin";
require_once("vue/vue_form_search.php");
?>

<!--	<form method="post" action="index.php?search=admin">-->
<!--     <h2>Rechercher un mot :<br></h2>-->
<!--     	<input type="text" name="recherche">-->
<!--     	<input type="submit" value="Search!" alt="Lancer la recherche"> -->
<!--    </form>-->

