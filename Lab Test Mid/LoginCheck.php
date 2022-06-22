<?php 
	session_start();
  
	$UserId = $_POST['username'];
	$password = $_POST['password'];
	

	if($username == null || $password == null){
		echo "null username/password";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($username == trim($user[0]) && $password == trim($user[1])){
                if (user[4]=="user")
                {

                
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: user.html');
			}
            else if (user[4]=="Admin") {
                $_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: user.html');
			}
            echo "invalid user";

            }
        }
		}
		echo "invalid user";
	