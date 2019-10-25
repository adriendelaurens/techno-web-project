<!DOCTYPE html>
<html>
	
<?php include('header.php')?>
	
<head>
	<title> Creer votre compte</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<h1>S'inscrire</h1>
        <p>Remplissez ce formulaire pour vous inscrire</p>

<div class="container">
        <form action="" method="post" name= "Inscription" > 
           
           <div class="form-group">
                <label>Nom :<sup>*</sup></label>
                <input type="text" name="name" class="form-control">
            </div> 
		<div class="form-group">
                <label>Prenom :<sup>*</sup></label>
                <input type="text" name="firstName" class="form-control" >             
            </div> 
           
            <div class="form-group">
                <label>Date de naissance :<sup>*</sup></label>
                <input type="date" name="birthDate" class="form-control">
            </div> 
           
            <div class="form-group">
                <label>Email:<sup>*</sup></label>
                <input type="email" name="email" class="form-control" placeholder="Email@example.com">
            </div>    
           
            <div class="form-group">
                <label>Password:<sup>*</sup></label>
                <input type="password" id = "password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Confirm password:<sup>*</sup></label>
                <input type="password" id = "confirm_password" name="confirm_password" class="form-control">
            </div>
            <p>En creant votre compte vous acceptez nos <a style="color:teal">Termes de confidentialite</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Annuler</button>
      <button type="submit" class="signupbtn">S'inscrire</button>
    </div>

</body>
<?php include ('footer.php') ?>
</html>
