<?php 
	session_start();

	$id = $_POST['id'];
	$password = $_POST['password'];
    $given_password= $_POST['given_password'];
    $name=$_POST['name'];
    $userType=$_POST['userType'];
    
	if($id == null || $password == null ||  $given_password == null||  $name == null||  $type== null){
		echo "null username/password/email";
	}
    else{
		$user = $id."|".$password."|". $given_password."|". $name."|".$userType."\r\n";
        if($user[1]==$user[2]){
            $file = fopen('user.txt', 'a');
		    fwrite($file, $user);
		    header('location: signup.html');

        }
        else{

            echo "Passwords does not match";

        }	
	}
?>