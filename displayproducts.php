<!DOCTYPE html>

<html>
	
<?php
include('header.php');
include('databaseconnection.php');
?>



<body>
<?php 

$query = "SELECT name from products WHERE name LIKE '%".$_POST['produit']."%'";

echo $query;

$response = $bdd->query($query);

while ($results = $response->fetch() ){
	var_dump($results);
}

$response->closeCursor() ;

?>

</body>

<?php
	    include('footer.php');
?>

