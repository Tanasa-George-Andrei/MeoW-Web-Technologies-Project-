<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <title>Register</title>
</head>
<body>
    <div class="registration-form">

        <form action="register-check.php" method="POST">

            <h1>Registration</h1>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>


            <form action="#" method="post">
                <p>Full name</p>
                <input type="text" name="fullname" placeholder="Full name">

                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                <?php }else{ ?>
                        <input type="text" name="name" placeholder="Name"><br>
                <?php }?>


                <p>Username</p>
                <input type="text" name="username" placeholder="Username">

                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" name="uname" placeholder="User Name"><br>
                <?php }?>


                <p>Email</p>
                <input type="email" name="email" placeholder="Email">

                <?php if (isset($_GET['email'])) { ?>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" name="email" placeholder="Email"><br>
                <?php }?>


                <p>Password</p>
                <input type="password" name="password" placeholder="Password">
                <p>Confirm Password</p>
                <input type="password" name="confirmPassword" placeholder="ConfirmPassword">

                <button type="sub">Sign Up</button>
            </form>

        </form>
    </div>
</body>
</html>