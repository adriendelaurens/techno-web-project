<!DOCTYPE html>
<hmtl>
<head>
	<title> Recherche</title>
	<link rel="stylesheet" href="Recherche.css" />
</head>
<?php include ('header.php');
include ('databaseconnection.php');
?>
<body>
	<form method="get" action ="index.php" name="displayproducts">
	<input type="hidden" name="page" value="displayproducts">
	<input type ="text" placeholder="Rechercher un produit" name="produit"/>
	<button type="submit" ><img class="rechercher-logo" src="Rechercher.png"> </a>
	
</body>
<?php
include ('footer.php')
?>
</html>
