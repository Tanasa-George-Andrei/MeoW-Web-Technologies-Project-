<?php
function console_log( $data ) {
    $output  = "<script>console.log( 'PHP debugger: ";
    $output .= json_encode(print_r($data, true));
    $output .= "' );</script>";
    echo $output;
  }

$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
$json = [];

if(isset($_REQUEST['id']) & !empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

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
