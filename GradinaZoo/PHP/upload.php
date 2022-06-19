<?php
include_once 'wikiDBConnection.php';

$target_dir = "../XML/";
$target_name = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $target_name;
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  
  if($fileType != "xml" ) {
    echo "Sorry, only XML files are allowed.";
    $uploadOk = 0;
  }
  
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      $xml=simplexml_load_file($target_file) or die("Error: Cannot create object");
      $sql="INSERT INTO animals(name, sci_name, xml_file, main_image_file) VALUES ('" . $xml->entry->name . "', '" . $xml->entry->scientific_name . "', '" . $target_file . "', '"  . $xml->entry->main_image . "')";
      if ($conn->query($sql) === TRUE) {
        $last_animal_id = $conn->insert_id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $sql="";
      foreach($xml->entry->attributes->attribute as $attribute)
      {
        $sql.="INSERT INTO attributes(type, value, animal_id) VALUES ('" . $attribute->type . "', '" . $attribute->value . "', " . $last_animal_id . ")";
      }
      if ($conn->query($sql) !== TRUE) 
      {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }