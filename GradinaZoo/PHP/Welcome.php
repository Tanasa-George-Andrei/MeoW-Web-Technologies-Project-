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
    ?>
    
        <div class="banner">
            <div class="navbar">
                <ul>
                    <strong><li><a href="welcome.html">Home</a></li></strong>
                    <strong><li><a href="login.html">LogIn</a></li></strong>
                    <strong><li><a href="register.html">Register</a></li></strong>
                    <strong><li><a href="register.html">Logout</a></li></strong>
                </ul>
            </div>
        </div>

        <div class="gradina">
            <h1>Bun venit la Gradina Zoologica!</h1>

            <a href="bunvenit.html">
                <button class="button">Bun venit</button>
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