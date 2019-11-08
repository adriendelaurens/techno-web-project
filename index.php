<?php
session_start();
?>
<?php
//TODO assign database connexion into $database variable
include ('databaseconnection.php');
include('Header.php');


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
