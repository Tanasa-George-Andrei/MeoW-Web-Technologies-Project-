<?php

$alert = '';

if (isset($_POST["name"])) {
  require "mail_db_connection.php";
  if ($_RSV->save(
    $_POST["name"], $_POST["email"], $_POST["message"])) {
    //  echo "<div class='ok'>Reservation saved.</div>";
    $alert = '<div class="alert-success">
    <span>Message Sent! Thank you for contacting us!</span>
   </div>';
  } else { 
    $alert = '<div class="alert-error">
    <span>'.$_RSV->error.'</span>
    </div>';
  }
}

?>