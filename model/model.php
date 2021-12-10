<?php

if(!function_exists('dbConnect')) { 
    function dbConnect() {
        try{
        $db = new PDO('mysql:host=localhost;dbname=tp_cms_hetic;charset=utf8', 'root', 'root', 
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        
        return $db; 
        }
        
        catch(Exception $e){
            die('Erreur : '.$e->getMessage()); 
        }  
    }
}

if(!function_exists('getAllposts')) { 
    function getAllposts() {

    $db= dbConnect();
        $request = $db->query( 'SELECT * FROM posts  ');

        return $request; 
    }
}

if(!function_exists('getApost')) { 
        function getAPost($postId) {

        $db= dbConnect();
        $singlePost = $db->prepare('SELECT id, title, content, post_author, date_creation FROM posts WHERE id = ? ');
        $singlePost->execute(array($postId));
        $post = $singlePost->fetch();

        return $post; 
    }
}


if(!function_exists('getComments')) {
        function getComments($postId) {
        
    $db = dbConnect();
        $comments = $db->prepare('SELECT * FROM comments WHERE post_id =? ORDER BY comment_date');
        $comments->execute(array($postId));

        return $comments; 
    }
}

if(!function_exists('postComment')){
    function postComment($postId, $author, $comment) {
         $db = dbConnect();
         $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?,?,?, NOW())');
         $relativeLines = $comments->execute(array($postId, $author, $comment));

         return $relativeLines; 
    }

}

if(!function_exists('verifyLogin')){
    
    function verifyLogin () {
        if(isset($_POST['pseudo'])  &&  isset(( $_POST['password']))) {
            
        }
    }


}



