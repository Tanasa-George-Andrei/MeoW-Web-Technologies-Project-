<?php include 'send.php'; ?>

<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&amp;display=swap" rel="stylesheet">
  <title>Contact Us</title>
</head>
<body>
  <div class="banner">
    <div class="navbar">
        <ul>
          <strong><li><a href="../PHP/Welcome.php">Home</a></li></strong>
          <strong><li><a href="../PHP/Review.html">Review</a></li></strong>
          <strong><li><a href="search.html">Search</a></li></strong>
          <strong><li><a href="../PHP/about.php">About</a></li></strong>
          <strong><li><a href="../PHP/animals.php">Animals</a></li></strong>
          <strong><li><a href="../PHP/contact.php">Contact Us</a></li></strong>
          <strong><li><a href="../PHP/login.php">LogIn</a></li></strong>
          <strong><li><a href="../PHP/logout.php">Logout</a></li></strong>
          <strong><li><a href="raport.html">Raport</a></li></strong>
        </ul>
    </div>
    <br>
    <br>
    <br>
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Adress: Carol I Boulevard, no.48, Iași, Romania</div>
        <div><i class="fas fa-envelope"></i>Email: zoo_iasi@yahoo.com</div>
        <div><i class="fas fa-phone"></i>Phone: 0760 132 546</div>
        <div><i class="fas fa-clock"></i>Schedule: Mon - Sun 8:00 AM to 10:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Name" required>
          <input type="email" name="email" class="text-box" placeholder="Email" required>
          <textarea name="message" rows="5" placeholder="Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>

    </div>
  </div>
  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body></html>