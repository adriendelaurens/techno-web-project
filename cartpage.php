<!DOCTYPE html>
<html>

<?php
include ('header.php');
?>

<head>	
<title> Mon Panier</title>
<link rel="stylesheet" href="cartpage.css"/>
</head>

<body>
<h1> Mon panier 
<img src ="caddie.jpg" height="40" width = "40"/>
</h1>
<ol> liste
<br>
<li> article1 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
<br>
<li> article2 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
<br>
<li> article3 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
<br>
<li> article4 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
<br>
<li> article5 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
<br>
<li> article6 <form method="post" action = "cartpage.php">
<input type="submit" value="supprimer l'article" > </li>
</li>

</ol>
</body>
<?php
include ('footer.php')
?>
</html>
