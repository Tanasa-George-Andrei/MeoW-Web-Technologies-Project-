<?php 
	session_start(); 
	$_SESSION['username']="";
	$_SESSION['name'] ="";
    $_SESSION['id'] ="";
	include "db_connect.php";

	if (isset($_POST['username']) && isset($_POST['password'])) {

		function validate($data){
       		$data = trim($data);
	   		$data = stripslashes($data);
	   		$data = htmlspecialchars($data);
	   		return $data;
		}

		$uname = validate($_POST['username']);
		$pass = validate($_POST['password']);

		if (empty($uname)) {
			header("Location: login.php?error=User Name is required");
	    	exit();
		}else if(empty($pass)){
        	header("Location: login.php?error=Password is required");
	    	exit();
		}else{
			$sql = "SELECT * FROM persoane WHERE username='$uname' AND password='$pass' ";
			$result = mysqli_query($conn, $sql); //select information from database

			if (mysqli_num_rows($result) === 1) { //verify if we have the results on database
				$row = mysqli_fetch_assoc($result); //fetches a result row as an associative array
            	if ($row['username'] === $uname && $row['password'] === $pass) {
            		$_SESSION['username'] = $row['username'];
            		$_SESSION['name'] = $row['name'];
            		$_SESSION['id'] = $row['id'];
            		header("Location: Welcome.php");
		        	exit();
            	}else{
					header("Location: login.php?error=Incorect User name or password 1" .  mysqli_connect_error());
		        	exit();
				}
			}else{
				header("Location: login.php?error=Incorect User name or password 2" . mysqli_connect_error());
	        	exit();
			}
		}
	
	}else{
		header("Location: login.php");
		exit();
	}

?>