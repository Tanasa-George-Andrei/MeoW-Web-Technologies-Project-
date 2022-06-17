<?php
    $conn=mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");

    $name = $_POST['name'];
    $class = $_POST['class'];
    $description = $_POST['description'];

    if (isset($_POST['name']) && isset($_POST['class']) && isset($_POST['description'])){
        if (empty($name)) {
			header("Location: register.php?error=Full name is required");
	    	exit();
		}else if(empty($class)){
        	header("Location: register.php?error=Username is required");
	    	exit();
		}else if(empty($description)){
        	header("Location: register.php?error=Email is required");
	    	exit();
		}else{
            $sql = "INSERT INTO animal (name, class, description) 
				        VALUES ('$name','$class', '$description')";
            if (mysqli_query($conn, $sql)) {
                header("Location: addNewAnimal.php?success=The new animal was added successfully");
                exit();
            }else {
                //header("Location: register.php?error=Faild to register" );
                echo "ERROR: Could not register the new animal$sql. " . mysqli_error($conn);
                exit();
            }
        }
    }
?>