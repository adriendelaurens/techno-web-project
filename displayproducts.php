<!DOCTYPE html>

<html>



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
<br/>
<form method="get" action ="index.php" name="cartpage">
<input type="hidden" name="page" value="cartpage">
<input type="hidden" name="product" value="<?php echo $results['id']; ?>">
Ajouter <input type="number" name="quantity"> produit de <?php echo $results['name']; ?>
<input type="submit" value="ajouter"> 
</form>
</br>	
<?php
/*
	$compteur ++;
	for($i = 0; $i<count($results);$i++)
	{echo ($results[$i]);
	}
	*/
}

$response->closeCursor() ;

?>
		

</html>
