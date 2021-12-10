<?php
require('model/model.php');

// on vérifie qu'on a bien reçu un ID ds l'url
if(isset($_GET['id']) && $_GET['id']> 0 ) {

    // on appelle 2 focntions qui nous seront utiles
    $post = getAPost($_GET['id']);
    
    $comments = getComments($_GET['id']);
    // dans la vue suivante: 
    require('view/postView.php');
}
else{
    echo "Erreur: aucun identifiant de post envoyé.";
}