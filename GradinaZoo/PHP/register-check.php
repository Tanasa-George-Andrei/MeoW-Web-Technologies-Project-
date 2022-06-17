<?php 
	session_start(); 
	$conn=mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");

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


		if (empty($name)) {
			header("Location: register.php?error=Full name is required");
	    	exit();
		}else if(empty($uname)){
        	header("Location: register.php?error=Username is required");
	    	exit();
		}else if(empty($email)){
        	header("Location: register.php?error=Email is required");
	    	exit();
		}else if(empty($pass)){
        	header("Location: register.php?error=Password is required");
	    	exit();
		}else{
			// hashing the password
        	//$pass = md5($pass);

			//if the username has existed
	    	$sql = "SELECT * FROM persoane WHERE username='$uname' ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) { //we check if we have results in the database
				header("Location: register.php?error=The username is taken try another");
	        	exit();
			}else {
				//insert the new user in database with the other information				
           		$sql2 = "INSERT INTO persoane (fullname, username, email, password) 
				   VALUES ('$name','$uname', '$email', '$pass')";
           		if (mysqli_query($conn, $sql2)) {
           	 		header("Location: register.php?success=Your account has been created successfully");
	         		exit();
           		}else {
	           		//header("Location: register.php?error=Faild to register" );
					echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
					exit();
        	   	}	
			}
		}
	
	}else{
		header("Location: register.php");
		exit();
	}

?>