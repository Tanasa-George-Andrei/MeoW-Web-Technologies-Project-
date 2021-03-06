<?php
session_start();
if($_SESSION['username'] == 'admin'){}
?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&amp;display=swap" rel="stylesheet">
    <title>About us</title>
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
        <strong><li><a href="Welcome.php">Home</a></li></strong>
        <strong><li><a href="Review.php">Review</a></li></strong>
        <strong><li><a href="/PHP/search.php">Search</a></li></strong>
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


    <div class="gradina">
        <h1>About</h1>
        <p>
            The Zoo Garden is located in the northern part of the city,
            not far from the Botanical Garden, covering an area of ??????25,000 hectares.
            The construction has begun up on 10 July 1986 and is open since 1985. 
            At first it did not benefit from many animal species, which is why 
            especially because the precarious economic situation of the country, 
            but after 1990 it benefited from numerous funds, received mainly 
            from Germany and France. Currently, you can find in our portfolio 
            over 4000 species, many of them being in danger of extinction. 
            The garden is also part of the World Zoo Association (WAZA)
            and of the International Animal Records System. 
            A visit to the zoo offers you relaxation in an incomparable
            ambience and a overview of our work, commited for nature 
            and species protection.
        </p>
        
        <h1>Our team</h1>            
        <p>
            C??t??lin Manole - Executive Manager <br>
            Alfred Ifrim - Economic Manager <br>
            George Mocanu - Marketing Manager<br>
            Sergiu Tabacu - Secretary<br>
            Vicen??iu Ioni???? - Endangered animals department Manager<br>
            Igor Ifrim - Cleaning Manager<br>
            Vicen??iu Dima - Electrician <br>
        </p>
        <a href="contact.php">
            <button class="button">Contact</button>
        </a>
    </div>


        <!-- <div class="gradina">
            <h1>About</h1>
            <p>
                The Zoo Garden is located in the northern part of the city,
                not far from the Botanical Garden, covering an area of ??????25,000 hectares.
                The construction has begun up on 10 July 1986 and is open since 1985. 
                At first it did not benefit from many animal species, which is why 
                especially because the precarious economic situation of the country, 
                but after 1990 it benefited from numerous funds, received mainly 
                from Germany and France. Currently, you can find in our portfolio 
                over 4000 species, many of them being in danger of extinction. 
                The garden is also part of the World Zoo Association (WAZA)
                and of the International Animal Records System. 
                A visit to the zoo offers you relaxation in an incomparable
                ambience and a overview of our work, commited for nature 
                and species protection.
            </p>
            <h1>Our team</h1>            <p>
                C??t??lin Manole - Executive Manager <br>
                Alfred Ifrim - Economic Manager <br>
                George Mocanu - Marketing Manager<br>
                Sergiu Tabacu - Secretary <br>
                Vicen??iu Ioni???? - Endangered animals department Manager<br>
                Igor Ifrim - Cleaning Manager<br>
                Vicen??iu Dima - Electrician <br>
         <a href="contact.html">
            <button class="button">Contact</button>
        </a>
        </div> -->


</body>
</html>