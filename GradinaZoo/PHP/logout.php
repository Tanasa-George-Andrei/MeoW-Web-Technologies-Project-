<?php 
    session_start();

    session_unset(); //clears out the session for usage
    session_destroy(); //destroys the whole session rather destroying the variables

    header("Location: login.php");
?>