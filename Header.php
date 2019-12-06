<html>

<link rel="stylesheet" href="header.css"/>


<body>

<p><b>Naviguez sur notre site :</b></p>
<p style='text-align: center;'>
</p>

</body>


	
<header>
<table><tr><td>
<form method="get" action ="index.php" name="homepage">
<input type="hidden" name="page" value="homepage">
<input type="submit" value="Page d'accueil" >
</form></td>

<td>
<form method="get" action ="index.php" name="Recherche">
<input type="hidden" name="page" value="Recherche">
<input type="submit" value="Recherche" >
</form></td>
<td>
<form method="get" action ="index.php" name="NosRacesdeChaton">
<input type="hidden" name="page" value="NosRacesdeChaton">
<input type="submit" value="NosRacesdeChaton" >
</form></td>
<td>
<form method="get" action ="index.php" name="cartpage">
<input type="hidden" name="page" value="cartpage">
<input type="submit" value="Mon panier" >
</form></td>
<td>
<form method="get" action ="index.php" name="createaccount">
<input type ="hidden" name="page" value="createaccount">
<input type="submit" value="Créer mon compte" >
</form></td>

<td>
<form method="get" action ="index.php" name="displayproducts">
<input type ="hidden" name="page" value="displayproducts">
<input type ="text" placeholder="Rechercher un produit" name="produit">
<input type="submit" value="rechercher">
</form></td>
<?php 
if (!empty($_SESSION)){ 
?>
<td>
<form method="get" action ="index.php" name="deconnexion">
<input type ="hidden" name="deconnexion" value="deconnexion">
<input type="submit" value="Déconnexion" >
</form>
</td>
<?php } else { ?>

<td>
<form method="post" action ="index.php" name="connexion">
<input type ="hidden" name="connexion" value="connexion">
<input type = "text" name = "username" size ="none"> 
<input type = "password" name = "password" size ="none">
<input type="submit" value="se connecter" >
</form></td>
<?php } ?>
</tr>
</table>

</header>

	
</html>
