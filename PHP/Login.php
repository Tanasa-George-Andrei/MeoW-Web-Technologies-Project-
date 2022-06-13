<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    
    <div class="login-form">
        <h1>Log In</h1>

        <form action="Login.php" method="POST">
            <?php if(isset($_GET['error'])){ 
                echo "<p class='error'>". $_GET['error']." </p>";
                //else if(isset($_GET['success']))
                //echo '<script>window.location = "home.php" </script>';
            } 
                //foreach($_GET as $val){
                    //echo $_GET['error']==$val;
                //}
            ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <button value="sub">Log In</button>
            <div class="signup-link">Not a member?<a href="register.php">Register now</a></div>
        </form>
    </div>
    <footer></footer>
</body>
</html>