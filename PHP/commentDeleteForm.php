<?php
$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
$json = [];
if(isset($_GET['id']) & !empty($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM review WHERE id = '$id' ";
    $result = mysqli_query($conn, $delete);

    if($result){
        $json = ['success' => TRUE, 'message' => 'The comment was deleted successfully'];
        header("Location:Review.php");
    }else{
        $json = ['error' => TRUE, ' message' => 'The comment could not be deleted'];
        header("Location:Review.php");
    }

    mysqli_close($conn);
    echo json_encode($json);
}
?>