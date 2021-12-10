<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        <title>TP CMS</title>
    </head>
    <body>
        <div class="content">
            <h1>Projet CMS </h1>
            <nav>
                <ul>
                    <li><a href="index.php?home">Tous les posts</a></li>
                    <li><a href="index.php?connect">Connexion</a></li>
                </ul>
            </nav>
            <?php 
                require_once('controller/controller.php'); 
            ?>
        </div>
    </body>
</html>
