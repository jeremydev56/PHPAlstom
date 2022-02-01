<?php //echo "vue_form_search l.1";var_dump($_SESSION);
$param = $_SESSION['search'] ?? NULL;
$action = ($param) ? "index.php?search=".$param : NULL;
//echo "vue_form_search l.4 action=".$action."<br/>";
if ($action){
?>
<form method="post" action="<?= $action ?>" >
     <h2>Rechercher un mot :<br></h2>
     	<input type="text" name="recherche">
     	<input type="submit" value="Search!" alt="Lancer la recherche">
    </form>
<?php
}
?>