<?php 
	session_start(); 
	include "db_connect.php";

	if (isset($_POST['fullname']) && isset($_POST['username']) 
			&& isset($_POST['email']) && isset($_POST['password'])){

		//Strip whitespace and special characters
		function validate($data){
       		$data = trim($data);
	   		$data = stripslashes($data);
	   		$data = htmlspecialchars($data);
	   		return $data;
		}

		//insert a new user in database
		$name = validate($_POST['fullname']);
		$uname = validate($_POST['username']);
		$email = validate($_POST['email']);
		$pass = validate($_POST['password']);

		$user_data = 'fullname='. $name. 'username='. $uname. 'email='. $email. 'password='. $pass;


		if (empty($name)) {
			header("Location: register.php?error=Full name is required&$user_data");
	    	exit();
		}else if(empty($uname)){
        	header("Location: register.php?error=Username is required&$user_data");
	    	exit();
		}else if(empty($email)){
        	header("Location: register.php?error=Email is required&$user_data");
	    	exit();
		}else if(empty($pass)){
        	header("Location: register.php?error=Password is required&$user_data");
	    	exit();
		
		}else{

			// hashing the password
        	$pass = md5($pass);

			//if the username has existed
	    	$sql = "SELECT * FROM users WHERE username='$uname' ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { //we check if we have results in the database
				header("Location: register.php?error=The username is taken try another&$user_data");
	        	exit();
			}else {
				//insert the new user in database with the other information
				
           		$sql2 = "INSERT INTO users (fullname,username,email,password) VALUES ('{$name} ', '{$uname}', '{$email}', '{$pass}')";

				$result2 = mysqli_query($conn, $sql2); 
           		if ($result2) {
           	 		header("Location: Welcome.php?success=Your account has been created successfully");
	         		exit();
           		}else {
	           		header("Location: register.php?error=unknown error occurred&$user_data");
		    	    exit();
        	   	}	
			}
		}
	
	}else{
		header("Location: register.php");
		exit();
	}

?>