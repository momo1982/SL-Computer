<?php
// on récupère l'article en question
$sql_article = "SELECT * FROM comment WHERE id=$article_id";
$req_article = mysqli_query($db, $sql_article);
// si l'article n'existe pas (0)
if(!mysqli_num_rows($req_article)){
    $erreur = "Ce commentaire n'existe pas!";
}else{
    $ligne = mysqli_fetch_assoc($req_article);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier un commentaire</title>
    </head>
    <body>
        <h1>Modifier un commentaire</h1>
        <?php
        include 'menu.php';
        // si pas d'article
        if(isset($erreur)){
            echo "<h2>$erreur</h2>";
        }else{
        ?>
        <form action="?admin=update&id=<?=$ligne['id']?>" method="POST" name="Modifier">
            <input type="text" name="name" placeholder="Nom" value="<?=$ligne['name']?>"  required /><br/>
            <textarea name="content" placeholder="Texte" required ><?=$ligne['content']?></textarea><br/>
            <input type="hidden" name="id" value="<?=$ligne['id']?>" />
            <input type="submit" value='Modifier' />
        </form> 
        <?php
        }
        ?>
    </body>
</html>
