<?php
    //require('db_connect.php');
    header('Content-Type: application/json');
    $json = [];
    $username = $_POST['username'];
    $message = $_POST['message'];
    $post = $_POST['post'];

    $conn=mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
    try {
        if(isset($_POST['username']) && (!empty($_POST['message']))) {
            $query = "INSERT INTO review (username, comment) VALUES ('".$_POST['username']."', '".$_POST['message']."')";
            mysqli_query($conn, $query);
            //header("location:Review.php");
            $json = ['success' => TRUE, 'message' => 'Insert data successfully'];
        }else{
            //header("location:Review.php");
            $json = ['error' => TRUE, 'message' => 'Not insert data'];
        }

    }catch(Exception $e){
        $json = ['error' => TRUE, 'message' => $e->getMessage()];
    }
    echo json_encode($json);


    // if($conn){
    //     // mysqli_select_db($conn, "atlaszoologic");
    //     $query = "INSERT INTO review (username, comment) VALUES ('$username', '$message')";
    //     if(mysqli_query($conn, $query)){
    //         $smsg  = "Your comment submitted successfully";
    //         header("location: Review.php?Your comment submitted successfully");
    //     }else{
    //         $fmsg = "Failed to submit your comment" ;
    //         header("location: Review.php?Failed to submit your comment");
    //         die(mysqli_error($conn) );
    //     }
    // }else{
    //     die("Failed to connect to mysql: " . mysqli_connect_error() );
    // }

    // mysqli_close($conn);
?>

