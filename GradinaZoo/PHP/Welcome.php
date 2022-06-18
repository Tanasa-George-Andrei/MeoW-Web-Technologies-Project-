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
    
        <div class="banner">
            <div class="navbar">
                <ul>
                    <?php
                        session_start();
                        if(isset($_SESSION['id']) && isset($_SESSION['username'])){
                    ?>
                    <li> <img src="../Img/profile.jpg" alt=""> </li>
                    <li> <h1>Hello, <?php echo $_SESSION['username']; ?></h1> </li>
                    <li><a href="logout.php" target="_top">Logout</a></li>
                    <?php
                        }else{
                    ?>
                    <li><a href="Login.php" target="_top">Log In</a></li>
                    <?php
                        }
                    ?>
                    <?php if($_SESSION['username'] == 'admin'){?>
                        <li><a href="adminPage.php" target="_top">AdminSection</a></li>
                    <?php
                        }
                    ?>
                </ul>
                <ul>
                    <div class="topnav" id="myTopnav">
                    <strong><li><a href="../PHP/Welcome.php">Home</a></li></strong>
                    <strong><li><a href="../PHP/Review.html">Review</a></li></strong>
                    <strong><li><a href="search.html">Search</a></li></strong>
                    <strong><li><a href="../PHP/about.php">About</a></li></strong>
                    <strong><li><a href="../PHP/animals.php">Animals</a></li></strong>
                    <strong><li><a href="../PHP/contact.php">Contact Us</a></li></strong>
                    <strong><li><a href="../PHP/login.php">LogIn</a></li></strong>
                    <strong><li><a href="../PHP/logout.php">Logout</a></li></strong>
                    <strong><li><a href="raport.html">Raport</a></li></strong>
                    </div>
                </ul>
            </div>
        </div>

        <div class="gradina">
            <h1>Welcome to Zoo Garden</h1>

            <form action="../HTML/bunvenit.html">
                <input type="submit" value="Let's begin" />
            </form>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if(x.className === "topnav") {
                    x.className += "responsive";
                }else{
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>