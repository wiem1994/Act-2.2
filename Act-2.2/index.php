<?php

require('Controleur/controleur.php');

try {
    getPosts();
    addPost();
} catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
