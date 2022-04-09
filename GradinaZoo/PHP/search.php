<!DOCTYPE html>
<html>

    <head> 
    
        <title>Search Page</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Search page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/search.css">

    </head>

    <body>
        <?php include "../HTML/navbar.html"?>
        <div id="super-container">
            <div id="container">
                <div id="searchcontainer">

                </div>
                <div id="slides">
                    <?php 
                        $slide_index = 0;
                        $max_slide_number = 3;
                        echo "<img class='back-slide' src='../Img/temp_slide" . ($max_slide_number + $slide_index - 1) % $max_slide_number . ".jpg' alt='Temporary slide'>";
                        echo "<img class='front-slide' src='../Img/temp_slide" . $slide_index . ".jpg' alt='Temporary slide'>";
                        echo "<img class='forward-slide src='../Img/temp_slide" . ($max_slide_number + $slide_index + 1) % $max_slide_number . ".jpg' alt='Temporary slide'>";
                    ?>
                </div>
                <div id="animalgrid">

                </div>
            </div>
        </div>
    </body>

</html>