<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/home.css">
        <title>Home</title>
    </head>

    <body>
        
    <?php
        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['username'])){
        //echo "am ajuns";
    ?>

    <h1><?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php"> Logout</a>

    <?php
        }else{
            header("Location:Login2.php");
            exit();
        }
    ?>

    </body>
</html>