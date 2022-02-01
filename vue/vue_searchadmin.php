<?php
if (isset($resultats[0]))
    echo 'Résultat de la recherche :' .($resultats[0]['nom']."," ?? NULL). ($resultats[0]['prenom']."," ?? NULL).
        ($resultats[0]['qualification']."," ?? NULL). ($resultats[0]['tel']."," ?? NULL). ($resultats[0]['anciennete']
     ?? NULL);
else echo 'résultat non trouvé';

/*
'<span style="font-weight: bold; color: #FF4500; font-size: 20px">'
'</span>
*/