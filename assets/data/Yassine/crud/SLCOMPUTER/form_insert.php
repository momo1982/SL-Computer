<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter un commentaire</title>
    </head>
    <body>
        <h1>Ajouter un commentaire</h1>
        <?php
        include 'menu.php';
        ?>
        <form action="?admin=insert" method="POST" name="ajouter">
            <input type="text" name="name" placeholder="Nom" required /><br/>
            <textarea name="content" placeholder="Texte" required ></textarea><br/>
            <input type="submit" value='envoyer' />
        </form> 
    </body>
</html>
