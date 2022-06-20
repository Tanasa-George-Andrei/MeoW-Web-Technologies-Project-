<?php
session_start();
if($_SESSION['username'] == 'admin'){}
?>

<!DOCTYPE html>
<html>

<head>

    <title lang="en">Upload Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Import Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/wiki.css">
</head>

<body>
    <div class="banner">
    <div class="navbar">
        <ul>
                    <?php
                        // session_start();
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
        <strong><li><a href="/PHP/Welcome.php">Home</a></li></strong>
        <strong><li><a href="/PHP/Review.php">Review</a></li></strong>
        <strong><li><a href="/PHP/search.php">Search</a></li></strong>
        <strong><li><a href="/PHP/about.php">About</a></li></strong>
        <strong><li><a href="/PHP/animals.php">Animals</a></li></strong>
        <strong><li><a href="/PHP/tickets.php">Tickets</a></li></strong>
        <strong><li><a href="/PHP/contact.php">Contact Us</a></li></strong>
        <strong><li><a href="/PHP/Login.php">LogIn</a></li></strong>
        <strong><li><a href="/PHP/logout.php">Logout</a></li></strong>
        <strong><li><a href="../HTML/raport.html">Raport</a></li></strong>
        </ul>
    </div>
    </div>
    <div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select XML OR IMAGE to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload XML OR IMAGE" name="submit">
    </form>
    </div>

</body>
