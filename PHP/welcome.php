<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/home.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <title>Home</title>
    </head>

    <body>

    <?php
        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>
    
        <div class="banner">
            <div class="navbar">
                <ul>
                    <strong><li><a href="../PHP/login.php" target="_top">LogIn</a></li></strong>
                    <strong><li><a href="" target="_top">Logout</a></li></strong>
                </ul>
                <ul>
                    <strong><li><a href="../PHP/Welcome.php">Home</a></li></strong>
                    <strong><li><a href="../HTML/review.html" target="_top">Review</a></li></strong>
                    <strong><li><a href="../HTML/search.html" target="_top">Search</a></li></strong>
                    <strong><li><a href="../HTML/about.html" target="_top">About</a></li></strong>
                    <strong><li><a href="../HTML/contact.html" target="_top">Contact Us</a></li></strong>
                    <strong><li><a href="../HTML/raport.html" target="_top">Raport</a></li></strong>
                </ul>
            </div>
        </div>

        <div class="gradina">
            <h1>Welcome to Zoo Garden</h1>

            <a href="bunvenit.html">
                <button class="button">Introduction</button>
            </a>
        </div>

    <?php
        }else{
            header("Location:login.php");
            exit();
        }
    ?>

    </body>
</html>