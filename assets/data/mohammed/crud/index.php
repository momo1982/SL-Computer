<?php
$db = @mysqli_connect("localhost", "root", "", "slcomputer");


if(isset($_POST['content'])){
   
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])),ENT_QUOTES);

 
    $sql_insert = "INSERT INTO comment (content) VALUES ('$content');";
    $recup_utils = mysqli_query($db,$sql_insert)or die("Pas d'insertion: ". mysqli_error($db));

}  
else{
   	$erreur1 = "Article non insérié!";
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert </title>
</head>
<body>

<img src="img/1.png"/>

<form action="" name="onsenfout" method="POST">        
         <textarea name="content" placeholder="Votre texte" required></textarea><br/>           
          <?php
        if(isset($erreur1)){
            echo "<h3>$erreur1</h3>";
           }
          ?> 
         <input type="submit" value="Envoyer" />           
</form>

</body>
</html>