<?php
session_start();
if ($_SESSION['username'] == 'admin') {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <?php
                session_start();
                if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
                ?>
                    <li> <img src="../Img/profile.jpg" alt=""> </li>
                    <li>
                        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
                    </li>
                    <li><a href="logout.php" target="_top">Logout</a></li>
                <?php
                } else {
                ?>
                    <li><a href="Login.php" target="_top">Log In</a></li>
                <?php
                }
                ?>
                <?php if ($_SESSION['username'] == 'admin') { ?>
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
                        $conn = mysqli_connect("localhost", "root", "", "atlaszoologic") or die("Connection failed");
                        $query = "SELECT id, name, class, description FROM animals";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td> <?php echo $row["id"]; ?> </td>
                                    <td> <?php echo $row["name"]; ?> </td>
                                    <td> <?php echo $row["class"]; ?> </td>
                                    <td> <?php echo $row["description"]; ?> </td>
                                    <td>
                                        <div class="delete" name="delete" id="delete-<?php echo $row["id"]; ?>" onclick="deleteAnimal(<?php echo $row['id']; ?>)">
                                            <button><i class="fa fa-trash-o"></i></button>
                                            <!-- <button><i class="fa fa-edit"></i></button> -->
                                        </div>
                                        <form action="../PHP/animalUpdateForm.php?" metod="POST">
                                            <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                            <button><i class="fa fa-edit"></i></button>
                                        </form>
                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
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
                <input type="submit" value="User page" />
            </form>
            <form action="../PHP/adminAnimalPage.php">
                <input type="submit" value="Animal page" />
            </form>
        </div>
    </div>

    <script>
        // function del_Data() {
        //     var mesage = document.getElementById("msg"); // Get span to display operation information
        //     Message.InnerHTML = "deleting, please wait…";
        //     var table = document.getElementById('a'); // Gets the table to display data
        //     if (table.rows.length == 0) {
        //         Message.innerhtml = "there is no data in the table to delete!";
        //         return;
        //     }
        //     var id = document.getElementById("hid_id");
        //     if (id.value.length == 0) {
        //         Message.innerhtml = "you have not selected data yet!";
        //         return;
        //     }
        //     var ajax = new XMLHttpRequest(); // Define the XMLHttpRequest object
        //     ajax.open("post", "animalDeleteForm.php ? action = del", true); // Set request mode, request file, asynchronous request

        //     var param = "id = "+escape(id.value); // Gets the ID of the data to be deleted

        //     ajax.onreadystatechange = function() {
        //         if (ajax.readyState == 4) {
        //             if (ajax.status == 200) {
        //                 var xml = ajax.responseXML;
        //                 var msg = xml.getElementsByTagName("msg")[0].firstChild.nodeValue;
        //                 if (msg == 0) {
        //                     Message.innerhtml = "data deleted successfully!";
        //                     var tr = document.getElementById(id.value); // Gets the currently selected row
        //                     tr.parentNode.removeChild(tr); // Reference the parent element of the row. Then delete the row
        //                     id.value = ""; // After deletion, clear the value in the text box,
        //                 }
        //                 if (msg == 1) {
        //                     Message.innerhtml = "server error, deletion failed!";
        //                 }
        //             }
        //         }
        //     }
        //     ajax.setRequestHeader("content - type", "application / x - www - form - urlencoded");
        //     ajax.send(param);
        // }
        function deleteAnimal(id){
          if(confirm('Are you sure you want to delete this user?')){
        $.ajax({
            url: "animalDeleteForm.php",
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


</body>

</html>