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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a href="../HTML/search.html" target="_top">Search</a></li>
                    <li><a href="../HTML/about.html" target="_top">About</a></li>
                    <li><a href="../HTML/contact.html" target="_top">Contact Us</a></li>
                    <li><a href="../HTML/raport.html" target="_top">Raport</a></li>
                </ul>
            </div>
                
            <!-- Table of Users -->
            <div class="table">
                <div class="table_header">
                    <p>Users details</p>
                        <form action="" method="GET">
                            <input type="text" name="search" id="search" placeholder="Search for a user">
                            <button class="search" type="submit"><i class="fa fa-search"></i></button>
                            <div id="output"></div>
                        </form>
                </div>

                <div class="table_section">
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profile Photo</th>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
                        $query = "SELECT id, fullname, username, email, password FROM persoane";
                        $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    for($i = 0; $i < $result->num_rows/8; $i++) {
                        ?>
                            <tr>
                                <td> <?php echo $row["id"]; ?> </td>
                                <td><img src="../Img/profile.jpg" alt=""></td>
                                <td> <?php echo $row["fullname"]; ?> </td>
                                <td> <?php echo $row["username"]; ?> </td>
                                <td> <?php echo $row["email"]; ?> </td>
                                <td> <?php echo $row["password"]; ?> </td>
                                <td>
                                    <div class="delete" name="delete" id="delete-
                                    <?php echo $row["id"];?>"
                                    onclick="deleteUser(<?php echo $row['id'];?>)"> 
                                    <button><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </td>
                            </tr>

                        <?php          
                                    }
                                }
                                    
                            }else {
                                echo "0 results";
                            }
                            
                            $conn->close();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pagination">
                <form action="../PHP/adminPage.php">
                        <input type="submit" value="1" />
                </form>
                <form action="../PHP/adminAnimalPage.php">
                        <input type="submit" value="2" />
                </form>
            </div>
        </div>

        <script>
            function deleteUser(id){
            if(confirm('Are you sure you want to delete this user?')){
               $.ajax({
                  url: "userDeleteForm.php",
                  type: "GET",
                  data: 'id='+id,
                  dataType: 'json',
                  success: function(result) {
                     if(result.success){
                        $('#demo').html('<div style=color:green>'+result.message+'</div>');
                        //window.location.href='';
                        //load_comment();
                     }else{
                        $('#demo').html('<div style=color:red>**'+result.message+'</div>');
                     }
                  }
               });
            }
         }
        </script>

         <script type = "text/javascript">
            $(document).ready(function() {
                $("#search").keyup(function(){
                    search_table($(this).val());

                });

                function search_table(value) {
                    $('#myTable tr').each(function(){
                        var found = 'false';
                        $(this).each(function(){
                            if($(this).text().toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) >= 0)
                            {
                                found = 'true';
                            }
                        });
                        if($found == 'true'){
                            $(this).show();
                        }else{
                            $(this).hide();
                        }
                    })
                }
            });
        </script>
    </body>
</html>