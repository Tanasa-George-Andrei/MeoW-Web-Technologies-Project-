<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/addAnimal.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <title>Home</title>
    </head>

    <body>
    
        <div class="banner">
            <div class="navbar">
                <ul>
                    <?php
                        session_start();
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
                    <div class="topnav" id="myTopnav">
                        <li><a href="../PHP/Welcome.php">Home</a></li>
                        <li><a href="../PHP/Review.php" target="_top">Review</a></li>
                        <li><a href="../HTML/search.html" target="_top">Search</a></li>
                        <li><a href="../HTML/about.html" target="_top">About</a></li>
                        <li><a href="../HTML/contact.html" target="_top">Contact Us</a></li>
                        <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
                    </div>
                </ul>
            </div>

            <?php
                // $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
                // $id = $_POST['id'];

                // $query = "SELECT * FROM animal WHERE id = '$id'";
                // $result = $conn->query($query);

                // if($result){
                //     $row = mysqli_fetch_assoc($result);
                //     //while($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="demo"></div>
                            <div class="add-form">
                                <h2>Update the detail about an animal!</h2>
                                <form class="contact" action="UpdateForm.php" method="post" id="form" name="form">
                                    <input type="text" name="id" class="text-box" placeholder="ID" value="<?=  $row['id'] ?>">
                                    <input type="text" name="name" class="text-box" placeholder="Name" value="<?= $row['name']?>">
                                    <input type="class" name="class" class="text-box" placeholder="Class" value="<?= $row['class']?>">
                                    <textarea name="description" rows="5" placeholder="Description" value="<?= $row['description']?>"></textarea>
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </form>

                                <?php
                                    // if(isset($_POST['update'])){
                                    //     $name = $_POST['name'];
                                    //     $class = $_POST['class'];
                                    //     $description = $_POST['description'];

                                    //     $query = "UPDATE animal SET name = '$name', class = '$class', description = '$description WHERE id = '$id'";
                                    //     $res = $conn->query($query);

                                    //     if($res){
                                    //         echo "The animal was updated successfully";
                                    //         header("Location:animalUpdateForm.php");
                                    //     }else{
                                    //         echo "The animal was not updated";
                                    //     }
                                    // }
                                ?>
                            </div>
                        <?php
                // }else{
                //     echo "ERROR: Could not find the animal in database";
                // }
            ?>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if(x.className === "topnav") {
                    x.className += "responsive";
                }else{
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>