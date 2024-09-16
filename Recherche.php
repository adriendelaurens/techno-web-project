<!DOCTYPE html>
<hmtl>
<head>
	<title> Recherche</title>
	<link rel="stylesheet" href="Recherche.css" />
</head>
<?php include ('header.php');?>
<?php include ('databaseconnection.php');?>
<body>
	<div class = "search-bar">
		<form method="post" action="displayproducts.php">
		<input type ="text" placeholder="Rechercher un produit" name="produit"/>
		<button type="submit" ><img class="rechercher-logo" src="Rechercher.png"> </a>
		</form>	
	</div>
</body>
<?php
include ('footer.php')
?>
</html>
