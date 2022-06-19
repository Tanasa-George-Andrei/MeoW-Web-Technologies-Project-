<?php
$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
$json = [];
if(isset($_GET['id']) & !empty($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM persoane WHERE id = '$id' ";
    $result = mysqli_query($conn, $delete);

    if($result){
        $json = ['success' => TRUE, 'message' => 'The user was deleted successfully'];
        header("Location:adminPage.php");
    }else{
        $json = ['error' => TRUE, ' message' => 'The user could not be deleted'];
        header("Location:adminPage.php");
    }
    echo $result;

    mysqli_close($conn);
    echo json_encode($json);
}
?>