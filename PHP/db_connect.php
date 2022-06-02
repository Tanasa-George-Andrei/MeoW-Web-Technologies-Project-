<?php
    // connect to database

    $sname= "localhost";
    $uname= "root";
    $password= "";
    $db_name="atlaszoologic";

    $conn=mysqli_connect($sname, $uname, $password, $db_name);

    if($conn){
        echo "Connection failed!";
    }else{
        try{
            $conn=new PDO("mysql:host=localhost;dbname=atlaszoologic;charset-utf8","root","");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        echo "Connection successful";
    }
?>