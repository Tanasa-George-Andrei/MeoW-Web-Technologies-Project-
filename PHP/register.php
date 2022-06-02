<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>
<body>

    <div class="registration-form">

        <form action="register-check.php" method="POST">
            <h1>Create a new account</h1>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>


            <p>Full name</p>
            <!-- <input type="text" name="fullname" placeholder="Full name"> -->
            <?php if (isset($_GET['fullname'])) { ?>
                <input type="text" name="fullname" placeholder="Full name" value="<?php echo $_GET['fullname']; ?>"><br>
            <?php }else{ ?>
                    <input type="text" name="fullname" placeholder="Full name"><br>
            <?php }?>


            <p>Username</p>
            <!-- <input type="text" name="username" placeholder="Username"> -->
            <?php if (isset($_GET['username'])) { ?>
                <input type="text" name="username" placeholder="Username" value="<?php echo $_GET['username']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="username" placeholder="Username"><br>
            <?php }?>


            <p>Email</p>
            <!-- <input type="email" name="email" placeholder="Email"> -->
            <?php if (isset($_GET['email'])) { ?>
                <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
            <?php }else{ ?>
                <input type="text" name="email" placeholder="Email"><br>
            <?php }?>


            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            
            <button type="sub">Sign Up</button>
        </form>

    </div>
    <footer></footer>
</body>
</html>