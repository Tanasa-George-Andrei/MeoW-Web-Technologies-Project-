<?php 
	session_start(); 
	include "db_connect.php";

	if (isset($_POST['name']) && isset($_POST['password'])
			&& isset($_POST['uname']) && isset($_POST['re_password'])){

		//Strip whitespace and special characters
		function validate($data){
       		$data = trim($data);
	   		$data = stripslashes($data);
	   		$data = htmlspecialchars($data);
	   		return $data;
		}

		$uname = validate($_POST['uname']);//insert a new user in database
		$pass = validate($_POST['password']);
		$re_pass = validate($_POST['re_password']);
		$name = validate($_POST['name']);

		$user_data = 'uname='. $uname. '&name='. $name;


		if (empty($uname)) {
			header("Location: register.php?error=User Name is required&$user_data");
	    	exit();
		}else if(empty($pass)){
        	header("Location: register.php?error=Password is required&$user_data");
	    	exit();
		}else if(empty($re_pass)){
        	header("Location: register.php?error=Re Password is required&$user_data");
	    	exit();
		}else if(empty($name)){
        	header("Location: register.php?error=Name is required&$user_data");
	    	exit();
		}else if($pass !== $re_pass){
        	header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    	exit();
		
		}else{

			// hashing the password
        	$pass = md5($pass);

			//if the name has existed
	    	$sql = "SELECT * FROM Users WHERE username='$uname' ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { //we check if we have results in the database
				header("Location: register.php?error=The username is taken try another&$user_data");
	        	exit();
			}else {
				//insert the new user in database with the other information
           		$sql2 = "INSERT INTO Users(username, password, name) VALUES('$uname', '$pass', '$name')";
           		$result2 = mysqli_query($conn, $sql2); 
           		if ($result2) {
           	 		header("Location: register.php?success=Your account has been created successfully");
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