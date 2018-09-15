<?php
	session_start();
	include("config.php");

	if (($_POST["username"] == $user) and ($_POST["password"] == $passw)){
		
		$_SESSION["login"] = "true";
		header("Location:admin.php");
		exit;
		
	} else {
		
		$_SESSION["error"] = "<p>Wrong username or password</p>";
		header("Location:adminlogin.php");
		
	}

?>