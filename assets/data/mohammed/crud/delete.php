<?php
$db = @mysqli_connect("localhost", "root", "", "slcomputer");


   $sup_art = mysqli_query($db,"DELETE FROM comment WHERE id=id;");

if(!mysqli_affected_rows($db)){
    $affiche ="Article introuvable, et donc non supprimé!";
}else{
    $affiche = "Votre article a bien été supprimé!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert </title>
</head>
<body>

<img src="img/1.png"/>

 <?php
   
       echo $affiche;
            
    ?>
</body>
</html>