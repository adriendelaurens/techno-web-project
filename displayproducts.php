<!DOCTYPE html>

<html>
	
<?php
include('header.php');
include('databaseconnection.php');
?>



<body>
<var> compteur
<?php 

$query = "SELECT id,name,description,unit_price from products WHERE name LIKE '%".$_POST['produit']."%'";

echo $query;

$response = $bdd->query($query);
$compteur = 0;
while ($results = $response->fetch() ){
	var_dump($results);
?>

 	<form method="post" action="cartpage.php">
	<input type="submit" value="ajouter l'article au panier" name="article"<?php.($compteur+1)?> 


<?php
	$compteur ++;
}

$response->closeCursor() ;

?>
		

<?php
	    include('footer.php');
?>
