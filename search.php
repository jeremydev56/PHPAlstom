<?php
$nom_method = "searchInSite".$_SESSION['search'];
$resultats = $unControleur->{$nom_method}();
//appel de la vue
require_once("vue/vue_search{$_SESSION['search']}.php");
?>