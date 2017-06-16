<?php
$db = @mysqli_connect("localhost", "root", "", "slcomputer");

if(isset($_POST['name'])&&isset($_POST['price'])){
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])),ENT_QUOTES);
    $price = htmlspecialchars(strip_tags(trim($_POST['price'])),ENT_QUOTES); 

    $sql_insert1 = "INSERT INTO product (name,price) VALUES ('$name','$price');";
    $recup_utils = mysqli_query($db,$sql_insert1)or die("Pas d'insertion: ". mysqli_error($db));
}  



?>

<!DOCTYPE html>
<html>
<head>
	<title>insert </title>
</head>
<body>

<form action="" name="onsenfout" method="POST"> 
NOM :<input type="texte" name="name"></br>
PRICE:<input type="texte" name="price"></br>          
 <input type="submit" value="Envoyer" />           
</form>
   
</body>
</html>