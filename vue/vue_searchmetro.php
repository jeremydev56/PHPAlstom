<?php
if (isset($resultats[0]))
    echo 'Résultat de la recherche :' .($resultats[0]['matricule']."," ?? NULL) . ($resultats[0]['marque']."," ??
            NULL) . ($resultats[0]['nbkm']."," ?? NULL) . ($resultats[0]['energie']."," ?? NULL) . ($resultats[0]['anciennete'] ?? NULL);
else echo 'résultat non trouvé';