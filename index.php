<?php
session_start();
?>
<?php
//TODO assign database connexion into $database variable
include ('databaseconnection.php');
include('Header.php');
$username = "";
$email    = "";
$errors = array();
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
if (isset($_POST['inscription'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password'];
	$password_2 = $_POST['confirm_password'];
	if (empty($username)) { 
		array_push($errors, "Le nom d'utilisateur est requis"); }
	if (empty($email)) { 
		array_push($errors, "L'email est requis"); }
	if (empty($password_1)) { 
		array_push($errors, "Le mot de passe est requis"); }
	if ($password_1 != $password_2) {
		array_push($errors, "Les mots de passes ne sont pas identiques");
	}
	$userUsername=$bdd -> query("SELECT username FROM users WHERE username='$username' LIMIT 1");
	$userEmail=$bdd -> query("SELECT email FROM users WHERE email='$email' LIMIT 1");
		if ($userUsername === $username) {
			array_push($errors, "Nom d'utilisateur déjà utilisé");
		}

		if ($userEmail === $email) {
			array_push($errors, "Email déjà utilisé");
		}
	
	if (count($errors) == 0) {
		$password = md5($password_1);
		$bdd ->query("INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')");
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Vous êtes connecté";
	}
}
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
