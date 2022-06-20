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
                <li><a href="/PHP/Welcome.php">Home</a></li>
                <li><a href="/PHP/Review.html">Review</a></li>
                <li><a href="/PHP/search.php">Search</a></li>
                <li><a href="/PHP/about.php">About</a></li>
                <li><a href="/PHP/animals.php">Animals</a></li>
                <li><a href="/PHP/contact.php">Contact Us</a></li>
                <li><a href="/PHP/login.php">LogIn</a></li>
                <li><a href="/PHP/logout.php">Logout</a></li>
                <li><a href="raport.html">Raport</a></li>
            </ul>
        </div>
    </div>
    <div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select XML to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload XML OR IMAGE" name="submit">
    </form>
    <?php
    $message=$_GET["message"];
    echo $message;
    ?>
    </div>

</body>
