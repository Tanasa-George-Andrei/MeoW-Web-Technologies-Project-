<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
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

            <form action="#" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <button type="sub">Log In</button>
                <div class="signup-link">Not a member?<a href="register.html">Register now</a></div>
            </form>
        </form>
    </div>
</body>
</html>