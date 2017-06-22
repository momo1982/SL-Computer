<?php

//var_dump($_POST);

// on vérifie les champs obligatoires pour article 'existants et non vides)

if(isset($_POST['name'])&&isset($_POST['content'])&&!empty($_POST['name'])&&!empty($_POST['content'])){
    // protection de la chaîne 'titre'
    $titre = htmlspecialchars(strip_tags(trim($_POST['name'])),ENT_QUOTES);
    $texte = htmlspecialchars(strip_tags(trim($_POST['content'])),ENT_QUOTES);
    $sql_auteur ="INSERT INTO comment (name,content) VALUES ('$titre','$texte');";
    // on insert l'article
    $insertion = mysqli_query($db, $sql_auteur) or die("Erreur! ". mysqli_error($db)); 

}
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
        if($insertion){
        echo "Votre commentaire a été insérer avec succès";
    }
        ?>
    </body>
</html>
