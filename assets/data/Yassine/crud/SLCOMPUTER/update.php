<?php

//var_dump($_POST);

// on vérifie les champs obligatoires pour article 'existants et non vides' + une comparaison du POST['id'] et du get id ($article_id)

if(isset($_POST['name'])&&isset($_POST['content'])&&!empty($_POST['name'])&&!empty($_POST['content'])){
    // protection de la chaîne 'titre'
    $titre = htmlspecialchars(strip_tags(trim($_POST['name'])),ENT_QUOTES);
    $texte = htmlspecialchars(strip_tags(trim($_POST['content'])),ENT_QUOTES);
    $_POST['id']==$article_id; 
                
    
    $sql_auteur ="UPDATE comment SET name='$titre', content='$texte' WHERE id = $article_id;";
    // on modifie l'article
    $modif = mysqli_query($db, $sql_auteur) or die("Erreur! ". mysqli_error($db));
}
    
    //si l'article est bien modifié
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Article</title>

    </head>
    <body>
        <?php
        include 'menu.php';
        if($modif){
        echo " <h2>Le commentaire a été modifié !</h2>";
        }
        ?>
    </body>
</html>
