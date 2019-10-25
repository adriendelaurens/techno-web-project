
<!DOCTYPE html>
<html>

<?php
include ('databaseconnection.php');

$userId=

$response_orders=$bdd->query("SELECT * FROM `orders` where type='CART' and status='CART' and user_id= ".$userId);

if($results_order= $response_orders->fetch()){
	var_dump($results_order);

	$orderid2=$results['id'];
}
$response_orders->closeCursor();


$response_order_product=$bdd->query("SELECT quantity,unit_price FROM `order_products` where order_id= ".$orderid2);
if($results= $response->fetch()){
	var_dump($results_order_product);
}
$response_order_product->closeCursor();


?>
