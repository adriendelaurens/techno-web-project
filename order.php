<!DOCTYPE html>

<html>

<?php
$bdd=new PDO('mysql:host=localhost;dbname=project','root',''); // dans mon fichier reference www sur ordi
$userId=1; // a definir dans les autres pages 
// requete 1: afficher les commandes de l'utilisateur(ici 1)
$response_orders = $bdd->query("SELECT * FROM `orders` where user_id='$userId' ");
while ($results_orders = $response_orders->fetch() ){
	var_dump($results_orders["type"],["status"]);
}
$response_orders->closeCursor() ;
$productId=?   // a définir sur les autres pages
if ($results_orders["type"]='CART'){             //si l'utilisateur a deja fait son panier, on affiche les articles (prix, quantité,etc)
$response1_orders=$bdd->query("SELECT product_id='$productId',quantity,unit_price FROM order_products")
while ($results1_orders=$response1_orders->fetch() ){
	var_dump($results1_orders);
}
$response1_orders->closeCursor() ;
}
if ($results_orders["type"]='ORDER'){             //si l'utilisateur n'a pas deja fait son pannier, on lui ajoute des articles
$response2_orders=$bdd->query("SELECT product_id='$productId', quantity FROM `order_products`")
while ($results2_orders=$response2_orders->fetch() ){
	var_dump($results2_orders);
}
$response2_orders->closeCursor() ;
}
?>



</html>