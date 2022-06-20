<?php
include_once 'wikiDBConnection.php';

$target_dir = "../";
$target_name = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $target_name;
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($fileType != "xml" && $fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
&& $fileType != "gif") {
  echo "Sorry, only XML files or are allowed.";
  $uploadOk = 0;
} else if ($fileType == "xml")
{
$target_dir = "../XML/";
$target_file = $target_dir . $target_name;
}
else{
$target_dir = "../Img/";
$target_file = $target_dir . $target_name;
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
}

if (file_exists($target_file)) {
    echo "Sorry, please rename file.";
    $uploadOk = 0;
  }
  
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else if ($fileType == "xml") {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $xml=simplexml_load_file($target_file) or die("Error: Cannot create object");
      rename($target_file, $target_dir.strtolower($xml->entry->name).".xml");
      $target_file = $target_dir.strtolower($xml->entry->name);
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      $sql="INSERT INTO animals(name, sci_name, xml_file, main_image_file) VALUES ('" . strtolower($xml->entry->name) . "', '" . strtolower($xml->entry->scientific_name) . "', '" . strtolower($xml->entry->name) . ".xml', '"  . strtolower($xml->entry->main_image) . "')";
      if ($conn->query($sql) === TRUE) {
        $last_animal_id = $conn->insert_id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      foreach($xml->entry->attributes->attribute as $attribute)
      {
        $sql="INSERT INTO attributes(type, value, animal_id) VALUES ('" . strtolower($attribute->type) . "', '" . strtolower($attribute->value) . "', " . $last_animal_id . ")";
        if ($conn->query($sql) === FALSE) 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  } else if ($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg"
  || $fileType == "gif")
  {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }