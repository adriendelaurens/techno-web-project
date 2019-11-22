<!DOCTYPE html>
<html>

<?php
if ($_SESSION['username'] != NULL){

	$_SESSION['user_id']=$bdd -> query("SELECT id FROM 'users' WHERE username==".$_SESSION['username']);

	if(isset($_GET['product'])){
		$linetoadd = $bdd->query("SELECT * FROM 'products' WHERE id ==".$_GET['product']);

		$idcommande = ($bdd -> query("SELECT MAX(id) FROM 'orders'")) + 1;
		$billingadressid = $bdd -> query("SELECT billing_adress_id FROM 'users' WHERE id ==".$_SESSION['user_id']);
		$deliveryadressid = $bdd -> query("SELECT delivery_adress_id FROM 'users' WHERE id ==".$_SESSION['user_id']);
		
		$bdd -> query("INSERT INTO orders (id, user_id, type, status, amount, billing_adress_id, delivery_adress_id) VALUES ($idcommande,$_SESSION[user_id],'CART','CART',$_GET[quantity],$billingadressid,$deliveryadressid)");
			

		$response_orders=$bdd->query("SELECT * FROM 'orders' WHERE type=='CART' AND status=='CART' AND user_id==".$_SESSION['user_id']);
		if ($results_order==$response_orders->fetch()){
			var_dump($results_order);
			$orderid2=$results_order['id'];
			}
		$response_orders->closeCursor();
		$response_order_product=$bdd->query("SELECT quantity,unit_price FROM `order_products` where order_id= ".$orderid2);
		if($results_order_products= $response_order_products->fetch()){
			var_dump($results_order_product);
			}
		$response_order_product->closeCursor();

		
		}

}
else{
	echo("veuillez vous connecter pour ajouter au panier");	
}
?>
</html>
