<?php
$sql="SELECT * FROM comment;";
$recup = mysqli_query($db, $sql)or die("Erreur :". mysqli_error($db));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SL-COMPUTER</title>
        <script>
            function sup(id){
                var a = confirm("Voulez-vous supprimer l'article ID "+id+" ?");
                if(a){
                    document.location.href = "?admin=delete&id="+id;
                }
            }
        </script>
    </head>
    <body>
        <?php
        include 'menu.php';
        
        // tant qu'on a des articles on les listes
        while($ligne = mysqli_fetch_assoc($recup)){
            echo "<h2>{$ligne['name']} | <a href='?admin=update&id={$ligne['id']}'><img src='img/icon_edit.png' alt='Modifier' /></a> | <img src='img/delete_doc.jpg' alt='Supprimer' onclick='sup({$ligne['id']});' /></h2>";
            echo "<p>{$ligne['content']}</p>";

            echo  "<h3>Le {$ligne['created_at']}</h3><hr/>";
        }
        ?>
    </body>
</html>
