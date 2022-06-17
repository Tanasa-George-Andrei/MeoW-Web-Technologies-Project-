<?php
$conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
header("Location:adminPage.php");
    if(isset($_GET['search'])) {
        $search = $_POST['search'];
        $search_query = "SELECT * FROM persoane WHERE CONCAT(fullname, username) LIKE '%$search%' ";
        $res = $conn->query($search_query);
        
        if($res) {
            if($res->num_rows > 0) {
    ?>
                <div class="table">
                    <table>
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
                                while($row = $res->fetch_assoc()) {
                                    $id = $row['id'];
                                    $fullname = $row['fullname'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                            ?>
                        <tr>
                            <td> <?php echo $id; ?> </td>
                            <td><img src="../Img/profile.jpg" alt=""></td>
                            <td> <?php echo $fullname; ?> </td>
                            <td> <?php echo $username; ?> </td>
                            <td> <?php echo $email; ?> </td>
                            <td> <?php echo $password; ?> </td>
                            <td>
                                <div class="delete" name="delete" id="delete-
                                <?php echo $row["id"];?>"
                                onclick="deleteComment(<?php echo $row['id'];?>)"> 
                                <button><i class="fa fa-trash-o"></i></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <?php
                }
            }else{
                echo 'The user not found.';
            }
        }

    }

mysqli_close($conn);

?>