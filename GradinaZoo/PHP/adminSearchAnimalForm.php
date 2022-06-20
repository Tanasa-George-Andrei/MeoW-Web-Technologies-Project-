<?php
    session_start();
    if($_SESSION['username'] == 'admin'){}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/adminPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Admin</title>
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
                <li><a href="../PHP/Welcome.php">Home</a></li>
                <li><a href="../PHP/Review.php" target="_top">Review</a></li>
                <li><a href="../HTML/search.php" target="_top">Search</a></li>
                <li><a href="../HTML/about.html" target="_top">About</a></li>
                <li><a href="../HTML/contact.html" target="_top">Contact Us</a></li>
                <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
            </ul>
        </div>
        
        <!-- Table of Animals -->
        <div class="table">
            <div class="table_header">
                <form action="../PHP/addNewAnimal.php">
                    <input type="submit" value="Add animal" />
                </form>
                <p>Animal details</p>
                <form action="../PHP/adminSearchAnimalForm.php" method="GET">
                    <input type="text" name="search" id="search" placeholder="Search for an animal">
                    <button class="search" type="submit"><i class="fa fa-search"></i></button>
                    <div id="output"></div>
                </form>
            </div>
        
        <div class="table_section">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
            if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $search_query = "SELECT * FROM animals WHERE CONCAT(name, class) LIKE '%$search%' ";
                $res = $conn->query($search_query);
                
                if($res) {
                    if($res->num_rows > 0) {
            ?>
            <table id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    while($row = $res->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $class = $row['class'];
                        $description = $row['description'];
                ?>
                    <tr>
                        <td> <?php echo $id; ?> </td>
                        <td> <?php echo $name; ?> </td>
                        <td> <?php echo $class; ?> </td>
                        <td> <?php echo $description; ?> </td>
                        <td>
                            <div class="delete" name="delete" id="delete-
                            <?php echo $row["id"];?>"
                            onclick="deleteAnimal(<?php echo $row['id'];?>)"> 
                            <button><i class="fa fa-trash-o"></i></button>
                            </div>
                            <form action="../PHP/animalUpdateForm.php?" metod="POST">
                                <input type="hidden" name="id" value="<?= $row["id"];?>"> 
                                <button><i class="fa fa-edit"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php          
                        }
                     }
                    }else{
                        echo 'The animal not found.';
                    }
                }
        
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
            function deleteAnimal(id){
            if(confirm('Are you sure you want to delete this user?')){
            //    $.ajax({
            //       url: "animalDeleteForm.php",
            //       type: "GET",
            //       data: 'id='+id,
            //       dataType: 'json',
            //       success: function(result) {
            //          if(result.success){
            //             $('#demo').html('<div style=color:green>'+result.message+'</div>');
            //             //window.location.href='';
            //             //load_comment();
            //          }else{
            //             $('#demo').html('<div style=color:red>**'+result.message+'</div>');
            //          }
            //       }
            //    });

               var xhr = new XMLHttpRequest();

                // Making our connection
                var url = "../PHP/animalDeleteForm.php?id="+id;
                xhr.open("POST", url, true);
                console.log("i'm here");
                // function execute after request is successful 
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                        console.log(this);
                    }
                }
                const ID = {id: id};
                console.log(ID);
                xhr.send();
                console.log("i'm here3");
                }
            }
        </script>

</body>
</html>