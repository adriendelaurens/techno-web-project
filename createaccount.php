<!DOCTYPE html>
<html>
	
<head>
	<title> Créer votre compte</title>
	<link rel="stylesheet" href="CreateAccount.css">
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
				<label>Nom d'utilisateur</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
            <div class="form-group">
                <label>Date de naissance :<sup>*</sup></label>
                <input type="date" name="birthDate" class="form-control">
            </div> 
           
            <div class="form-group">
                <label>Email:<sup>*</sup></label>
                <input type="email" name="email" class="form-control" placeholder="Email@example.com" value="<?php echo $email; ?>">
            </div>    
           
            <div class="form-group">
                <label>Mot de passe:<sup>*</sup></label>
                <input type="password" id = "password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Confirmer mot de passe:<sup>*</sup></label>
                <input type="password" id = "confirm_password" name="confirm_password" class="form-control">
            </div> 	
			<p>En creant votre compte vous acceptez nos Termes de confidentialite.</p> 
		<div >
			<button type="button" class="cancelbtn">Annuler</button>
			<button type="submit" class="signupbtn" name="inscription">S'inscrire</button>
		</div>
	</div>
</body>

</html>