<html>

<link rel="stylesheet" href="header.css"/>


<body>

<p><b>Naviguez sur notre site :</b></p>
<p style='text-align: center;'>
</p>

</body>


	
<header>
<?php //<a href="index.php?page=homepage">Page d'accueil</a>
?>

<form method="get" action ="index.php" name="homepage">
<input type="hidden" name="page" value="homepage">
<input type="submit" value="Page d'accueil" >
</form>


<form method="get" action ="index.php" name="Recherche">
<input type="hidden" name="page" value="Recherche">
<input type="submit" value="Recherche" >
</form>

<form method="get" action ="index.php" name="NosRacesdeChaton">
<input type="hidden" name="page" value="NosRacedeChaton">
<input type="submit" value="NosRacesdeChaton" >
</form>

<form method="post" action ="index.php" name="cartpage">
<input type="hidden" name="page" value="cartpage">
<input type="submit" value="Mon panier" >
</form>

<form method="post" action ="index.php" name="createaccount">
<input type ="hidden" name="page" value="createaccount">
<input type="submit" value="Créer mon compte" >
</form>

</header>

	
</html>
