<?php
session_start();
$usersessionemail = $_SESSION['email'];
?>
<?php
if (isset($usersessionemail)){
	include "resultadd.html";
}
else{
	header("Location:connections/login.php");
}
?>