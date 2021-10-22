<?php

require('Controleur/controleur_livre.php');

try {
    getLivres();
    addLivre();
} catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
