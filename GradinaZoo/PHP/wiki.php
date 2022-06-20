<!DOCTYPE html>
<html>

<head>
    <title lang="en">Wiki Entry</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wiki entry">
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
    <div id="info-block-container">
        <div id="info-block">
            <div id="animal-profile">
                <?php
                        $file=$_GET["file"];
                        $target_dir = "../XML/";
                        $target_file = $target_dir . $file;
                        $xml=simplexml_load_file($target_file) or die("Error: Cannot create object");

                        echo "<img src='/Img/".$xml->entry->main_image."' alt='".$xml->entry->name."' />";
                        echo "<p><b>".ucfirst($xml->entry->name)."</b></p>";
                        echo "<p><i>(".ucfirst($xml->entry->scientific_name).")</i></p>";
                        echo "<ul>";
                        foreach($xml->entry->attributes->attribute as $attribute)
                        {
                            echo "<li>".ucfirst($attribute->type)." : ".$attribute->value."</li>";
                        }
                        echo "</ul>";
                        echo "<a href='/XML/".$file."'>Download XML</a>"
                    ?>


            </div>
            <div id="animal-text">
                <?php
                        $file=$_GET["file"];
                        $target_dir = "../XML/";
                        $target_file = $target_dir . $file;
                        $xml=simplexml_load_file($target_file) or die("Error: Cannot create object");

                        echo "<h1>Short Description</h1>";
                        echo "<p>".$xml->short_description."</p>";
                        echo "<h1>Info</h1>";
                        echo "<p>".$xml->info."</p>";
                        echo "<h1>Gallery</h1>";
                        foreach($xml->gallery->image as $img)
                        {
                            echo "<img src='/Img/".$img->path."' alt='".$img->name."' />";
                        }
                    ?>
            </div>
        </div>
    </div>

</body>

</html>