<?php
session_start();
?>
<?php
//TODO assign database connexion into $database variable
include ('databaseconnection.php');
if (isset($_POST['inscription'])) {
	$test = checkUser($bdd);
}
	function checkUser($bdd){
	$erreur = 0; // Changer l'initialisation  : Passer en Array pour imprimer les erreurs
	$username = "";
	$email    = "";
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mdp1 = $_POST['password'];
	$mdp2 = $_POST['confirm_password'];
	if (empty($username)) { 
		$erreur++; // Ajouter erreur : Champ utilisateur vide
		}
	if (empty($email)) { 
		$erreur++;  // Ajouter erreur : Champ Email vide
		}
	if (empty($mdp1)) { 
		$erreur++; // Ajouter erreur : Chat mot de passe vide
		} 
	if ($mdp1 != $mdp2) {
		$erreur++; // Ajouter erreur : Mots de passe différents
	}
	$stmt = $bdd->prepare("SELECT COUNT(*) FROM users WHERE username= '".$username."' OR email = '".$email."' LIMIT 1"); 
	$stmt->execute(); 
	$row = $stmt->fetchColumn();
	if ($erreur > 0){ // Changer la condition pour vérifier nombre de colonne
		return "Champ vide"; // return valeurs de erreur
	}
	
	if ($row ==0) {
		$password = md5($mdp1);
		$bdd ->query("INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')");
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Vous êtes connecté";
		return "Utilisateur créé";
	}
	return ("Utilisateur existant");
}
if (isset($_POST['connexion'])){
	$test = checkUserConnection($bdd);
	
}
function checkUserConnection($bdd){
	$erreur = 0; // Changer l'initialisation  : Passer en Array pour imprimer les erreurs
	$username = "";
	$username = $_POST['username'];
	$mdp = $_POST['password'];
	$password = md5($mdp);
	if (empty($username)) { 
		$erreur++; // Ajouter erreur : Champ utilisateur vide
		}
	if (empty($password)) { 
		$erreur++; // Ajouter erreur : Chat mot de passe vide
		} 
	$stmt = $bdd->prepare("SELECT COUNT(*) FROM users WHERE username= '".$username."' AND password = '".$password."' LIMIT 1"); 
	$stmt->execute(); 
	$row = $stmt->fetchColumn();
	if ($erreur > 0){ // Changer la condition pour vérifier nombre de colonne
		return "Champ vide"; // return valeurs de erreur
	}
	if ($erreur == 0) {
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Vous êtes connecté";
		return "Vous êtes connecté";
	}
	return ("Vous êtes connecté");
}
if (isset($_POST['deconnexion'])){
	session_destroy();
	
}
include('Header.php');
$username = "";
$email    = "";
//TODO include checkUser.php file
?>
<?php
//TODO (in the next step) control user access
if (isset($_GET['page'])){
	$page = $_GET['page'];	
} else {
	$page = 'homepage';
}

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
if(file_exists($page.'.php')) {
  include($page.'.php');
}
?>

<?php
//create one php file for each action to manage on the website

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to insert or update data into database

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php

?>


<?php

//TODO add header display

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)

?>
<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database

// TODO insert the end html envelope (</body></html>)

?>
