<?php

error_reporting( E_ALL );

require_once('model/model.php');     

if(isset($_GET['home'])) {
    $posts= getAllPosts(); 
    require('view/homeview.php');

}

elseif(isset($_GET['single_post'])){

        
            if(!empty($_GET['id'])) {

            $post = getAPost($_GET['id']);
            $comments = getComments($_GET['id']);
            require('view/postView.php');
        }

        else{
            echo "Erreur: aucun identifiant de post envoyé.";
        }
    $post= getAPost($_GET['id']);
    require('view/postView.php');
 
}

elseif(isset($_GET['connect'])){

    require('view/connectionView.php'); 
   
}

elseif(isset($_GET['add_comment'])){



    require('view/addCommentView.php');
    $com = postComment();

}





















require('model/model.php'); 

function listPosts(){
    $posts = getAllPosts();
    require('view/listPostView.php');
}

function post() {
    $post = getPosts($_GET['id']);
    require('view/postView.php');
}