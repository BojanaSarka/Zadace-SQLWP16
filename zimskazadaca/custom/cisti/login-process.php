<?php
	// this db
$db_username = "bee";
$db_password = "123123";

$username = $_POST['username'];
$password = $_POST['password'];

if($username == $db_username && $password == $db_password){
	header("Location: dashboard.php");
}
else {
	header("Location: login.php?login_error=1");
}

?>
