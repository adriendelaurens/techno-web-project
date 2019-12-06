<!DOCTYPE html>
<html>

<?php

if ($_SESSION['username'] != NULL){
	echo($_SESSION['username']);
	
	$username=$_SESSION['username'];	
	$a=$bdd -> query("SELECT id FROM users WHERE username='$username'"); // on récupère l'id user de l'utilisateur connecté
	$results = $a->fetch();
	var_dump($results);
	$user_id = $results['id'];
	$a->closeCursor() ;

	echo($user_id);
	echo('bonjour');
	
	$response_orders=$bdd->query("SELECT id FROM orders WHERE type='CART' AND status='CART' AND user_id='$user_id'");
	// on récupère ici l'id de sa commande en cours
	$results = $response_orders->fetch();
	var_dump($results);
	echo($results['id']);
	$orderid2=$results['id'];
	$response_orders->closeCursor() ;

	echo("rebonjour");
	echo($orderid2);
	
	$response_order_products=$bdd->query("SELECT name,quantity,unit_price FROM order_products JOIN products ON order_products.product_id = products.id WHERE order_products.id='$orderid2'");
	// on récupère ici le contenu de sa commande en cours, afin de l'afficher.
	while ($response_order_products->fetch()!=False)
	{$results = $response_order_products->fetch();
	var_dump($results);
	$response_order_products->closeCursor();
	}


	if(isset($_GET['product'])){
		$linetoadd = $bdd->query("SELECT * FROM 'products' WHERE id ==".$_GET['product']);

		$idcommande = ($bdd -> query("SELECT MAX(id) FROM 'orders'")) + 1;
		$billingadressid = $bdd -> query("SELECT billing_adress_id FROM 'users' WHERE id ==".$_SESSION['user_id']);
		$deliveryadressid = $bdd -> query("SELECT delivery_adress_id FROM 'users' WHERE id ==".$_SESSION['user_id']);
		$orderproductsid = ($bdd -> query("SELECT MAX(id) FROM 'order_products'")) + 1;
		$unitprice = $bdd -> query("SELECT unit_price FROM 'products' WHERE id ==".$_GET['product']);
		
		$bdd -> query("INSERT INTO orders (id, user_id, type, status, amount, billing_adress_id, delivery_adress_id) VALUES ($idcommande,$_SESSION[user_id],'CART','CART',$_GET[quantity],$billingadressid,$deliveryadressid)");

		$bdd -> query("INSERT INTO order_products (id, order_id, productd_id, quantity, unit_price) VALUES ($orderproductsid,$idcommande,$_GET[product],$_GET[quantity],$unitprice)");
		}
			

	else{
		echo("veuillez vous connecter pour ajouter au panier");	
		}

}	
?>
</html>