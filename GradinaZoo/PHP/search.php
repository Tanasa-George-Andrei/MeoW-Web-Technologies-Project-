<!DOCTYPE html>
<html>

<head>

    <title lang="en">Search Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Search page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/search.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
            <strong><li><a href="Welcome.php">Home</a></li></strong>
            <strong><li><a href="Review.php">Review</a></li></strong>
            <strong><li><a href="search.php">Search</a></li></strong>
            <strong><li><a href="about.php">About</a></li></strong>
            <strong><li><a href="animals.php">Animals</a></li></strong>
            <strong><li><a href="tickets.php">Tickets</a></li></strong>
            <strong><li><a href="contact.php">Contact Us</a></li></strong>
            <strong><li><a href="Login.php">LogIn</a></li></strong>
            <strong><li><a href="logout.php">Logout</a></li></strong>
            <strong><li><a href="../HTML/raport.html">Raport</a></li></strong>
            </ul>
        </div>
    </div>
    </div>
    <div id="super-container">
        <div id="container">
            <div id="search">
                <input type="text" placeholder="Wolf, Lion, Eagle, Parrot,..." />
                <input type="button" value="Search" />
                <input type="button" value="Advanced" />
            </div>
            <div id="slide-show">
                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="../Img/temp_slide1.jpg" width="100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(1)"
                            alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(2)"
                            alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(3)"
                            alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(4)"
                            alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(5)"
                            alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="../Img/temp_slide1.jpg" width="100%" onclick="currentSlide(6)"
                            alt="Snowy Mountains">
                    </div>
                </div>
                <script src="../JavaScript/slideshow.js"></script>
            </div>
            <div id="animalgrid">
                <div class="griditem">
                    <figure>
                        <a href="wiki.html"><img src="../Img/temp_slide1.jpg" alt="Temporary Slide" /></a>
                        <figcaption>Temporary</figcaption>
                    </figure>
                </div>
                <div class="griditem">
                    <figure>
                        <a href="wiki.html"><img src="../Img/temp_slide2.jpg" alt="Temporary Grid" /></a>
                        <figcaption>Temporary</figcaption>
                    </figure>
                </div>
                <div class="griditem">
                    <figure>
                        <a href="wiki.html"><img src="../Img/temp_slide0.jpg" alt="Temporary Grid" /></a>
                        <figcaption>Temporary</figcaption>
                    </figure>
                </div>
                <div class="griditem">
                    <figure>
                        <a href="wiki.html"><img src="../Img/temp_slide2.jpg" alt="Temporary Grid" /></a>
                        <figcaption>Temporary</figcaption>
                    </figure>
                </div>
                <div class="griditem">
                    <figure>
                        <a href="wiki.html"><img src="../Img/temp_slide1.jpg" alt="Temporary Grid" /></a>
                        <figcaption>Temporary</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</body>

</html>