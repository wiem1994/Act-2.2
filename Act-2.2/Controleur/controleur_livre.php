<?php

require('Model/model_livre.php');

function getLivres()

{
    $livre = new Livre();
    $livres = $livre->getMessages();
    require('View/livre.php');
}



function addLivre()

{
    $livre = new Livre();
    $livres = $livre->postMessage();
    return $livres;
}
