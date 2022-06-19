<?php
    if (isset($_GET['id'])) {
        $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
    
        $id = $_GET['id'];
    
        $sql = "SELECT * FROM animals WHERE id=$id";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }else {
            header("Location: animalUpdateForm.php");
        }
    
    
    }else if(isset($_POST['update'])){
        $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
    
        $name = $_POST['name'];
        $class = $_POST['class'];
        $description = $_POST['description'];
        $id = $_POST['id'];
    
        if (empty($name)) {
            header("Location: ../PHP/animalUpdateForm.php?id=$id&error=Name is required");
        }else if (empty($class)) {
            header("Location: ../PHP/animalUpdateForm.php?id=$id&error=Class is required");
        }else if (empty($description)) {
            header("Location: ../PHP/animalUpdateForm.php?id=$id&error=Description is required");
        }else {
           $sql = "UPDATE `animals` SET `name`='$name',`class`='$class',`description`='$description' WHERE id=$id";
           $result = mysqli_query($conn, $sql);
           if ($result) {
                 header("Location: ../PHP/animalUpdateForm.php?success=successfully updated");
           }else {
            //   header("Location: ../PHP/animalUpdateForm.php?id=$id&error=failed to update");
                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
           }
        }
    }else {
        header("Location: animalUpdateForm.php");
    }
?>