
<h2>Article: <?= htmlspecialchars($post['title']) ; ?> </h2>
    <p class="post_content">
        <?= htmlspecialchars($post['content']); ?>
    </p>
    <p>
       <strong> écrit par: </strong><?= htmlspecialchars($post['post_author']); ?>
    </p>
    <p>
        le <?= htmlspecialchars($post['date_creation']); ?>
    </p>
   
    <h3>Commentaires</h3>
    <?php

    while($comment = $comments->fetch()) {
        ?>
    <p class="comments">
        <?= htmlspecialchars($comment['comment']); ?>
    </p>
    <?php 
    }
  ?>
  <a href="index.php?add_comment"> Ajouter un commentaire</a>

   