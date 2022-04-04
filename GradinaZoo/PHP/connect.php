<?php
    // exception for new connection to database
    
    try{
        $db=new PDO("mysql:host=localhost;dbname=Users;charset-utf8","root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>