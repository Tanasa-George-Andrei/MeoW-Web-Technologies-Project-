<!DOCTYPE hmtl>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/review.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Home</title>
    </head>

    <body>
      <div class="banner">
         <div class="navbar" id="myNavbar">
            <ul>
                <li><a href="../PHP/login.php" target="_top">LogIn</a></li>
                <li><a href="" target="_top">Logout</a></li>
            </ul>
            <ul>
                <li><a href="../PHP/welcome.php" target="_top">Home</a></li>
                <li><a href="../PHP/Review.php" target="_top">Review</a></li>
                <li><a href="../HTML/animals.html" target="_top">Animals</a></li>
                <li><a href="../HTML/search.html" target="_top">Search</a></li>
                <li><a href="../HTML/about.html" target="_top">About</a></li>
                <li><a href="../HTML/wiki.html" target="_top">Wiki</a></li>
                <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </ul>
         </div>
      

         <div class="testimonial-heading">
               <span>Coments</span>
         </div>

         <section id="comments">
      
            <div class="comments-info">

               <div class="comments-box">
                  <img src="../Img/profile.jpg" alt="">
                  <div class="name"><h3>Username1</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptate nostrum maiores!</p>
                  </div> 
               </div>
               
               <div class="comments-box">
                  <img src="../Img/profile.jpg" alt="">
                  <div class="name"><h3>Username2</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptate nostrum maiores!</p>
                  </div> 
               </div>

               <div class="comments-box">
                  <img src="../Img/profile.jpg" alt="">
                  <div class="name"><h3>Username3</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptate nostrum maiores!</p>
                  </div> 
               </div>
               
            </div>

            <div class="commets-container">
               <div class="package1">
                  <img src="../Img/profile.jpg" alt="">
                  <h2> Tell us your opinion!</h2>
               </div>
               <div class="package2"></div>
               <textarea name="message" rows="5" placeholder="Do you want to say something?"></textarea>
               <div class="package3">
                  <input type="submit" value="submit" class="send-btn" value="Send">
               </div>
            </div>

         </section>
      </div>
    </body>
</html>