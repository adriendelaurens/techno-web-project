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
<?php 
if (isset($_SESSION['success'])){?>
	<td>
	<form method="post" action ="index.php" name="Deconnection">
	<input type="hidden" name="Deconnection" value="Deconnection" >
	<input type="submit" value="Déconnexion" >
	</form>
	</td>
<?php }else{?>
<form method="post" action ="index.php" name="login">
<input type ="hidden" name="page" value="loginsuccessful">
<input type = "text" name = "username" size ="none" value = "username"> 
<input type = "password" name = "password" size ="none" value = "password">
<input type="submit" value="Connection" >
</form>
<?php }
?>
</td>

</tr>
</table>

</header>

	
</html>
