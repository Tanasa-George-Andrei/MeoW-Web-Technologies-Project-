<?php
$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
$json = [];
if(isset($_GET['id']) & !empty($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM animals WHERE id = '$id' ";
    $result = mysqli_query($conn, $delete);

    if($result){
        $json = ['success' => TRUE, 'message' => 'The animal was deleted successfully'];
        header("Location:adminAnimalPage.php");
    }else{
        $json = ['error' => TRUE, ' message' => 'The animal could not be deleted'];
        header("Location:adminAnimalPage.php");
    }

    mysqli_close($conn);
    echo json_encode($json);
}
?>