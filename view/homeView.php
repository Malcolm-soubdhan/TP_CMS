
     <?php 
     while($data = $posts->fetch()) {
     ?>
    <h2>
    <a href="index.php?single_post&id=<?= $data['id']; ?>"><?= htmlspecialchars($data['title']); ?></a>
    </h2>
     <p class="post_content">
         <?= htmlspecialchars($data['content']); ?>
     </p>
     <p>
         <strong> écrit par: </strong> <?= htmlspecialchars($data['post_author']); ?>
     </p>
     <p>
     le <?= htmlspecialchars($data['date_creation']); ?>
     </p>
    <h3><a href="index.php?single_post&id=<?= $data['id']; ?>">Commentaires</a></h3>
    <?php
        }
        $posts->closeCursor();

     ?>
     
   