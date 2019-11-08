<!DOCTYPE html>

<html>

<?php include ("databaseconnection.php");?>

<body>
<var> compteur
<?php
if (isset($_GET['produit'])) { $produit = $_GET['produit']; }
else {$produit = '';} 
$query = "SELECT id,name,description,unit_price from products WHERE name LIKE '%".$produit."%'";
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
		

</html>
