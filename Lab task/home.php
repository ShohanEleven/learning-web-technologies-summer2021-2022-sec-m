<?php 
	session_start();

  
	$username = $_POST['username'];

	

	if($username == null ){
		echo "null username";
	}else{
		if($username == "admin" ){
			$_SESSION['status'] = true;
			header('location: home.php');
		}else{
			echo "invalid user";
		}
	}