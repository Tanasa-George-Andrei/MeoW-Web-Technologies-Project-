<!DOCTYPE html>
<html>

<head>

    <title lang="en">Search Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Import Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/search.css">
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select XML to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload XML" name="submit">
    </form>
</body>