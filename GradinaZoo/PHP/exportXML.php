<?php
//This doesn't work
$target_dir = "../XML/";
if(isset($_GET["file"])){
$target_name = $_GET["file"];
}
else{
exit;
}
$target_file = $target_dir . $target_name;

if(file_exists($target_file)){
    readfile($target_file);
}