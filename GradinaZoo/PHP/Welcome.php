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
                        <li><a href="../PHP/Welcome.php">Home</a></li>
                        <li><a href="../PHP/Review.php" target="_top">Review</a></li>
                        <li><a href="/PHP/search.php" target="_top">Search</a></li>
                        <li><a href="../HTML/about.html" target="_top">About</a></li>
                        <li><a href="../HTML/contact.html" target="_top">Contact Us</a></li>
                        <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
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