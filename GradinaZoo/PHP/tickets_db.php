<?php

$alert = '';

if (isset($_POST["date"])) {
  require "tickets_db_connection.php";
  if ($_RSV->save(
    $_POST["date"], $_POST["slot"], $_POST["name"],
    $_POST["email"], $_POST["phone"])) {
    //  echo "<div class='ok'>Reservation saved.</div>";
    $alert = '<div class="alert-success">
    <span>Ticket buyed! Thank you for your receipt!</span>
   </div>';
  } else { 
    $alert = '<div class="alert-error">
    <span>'.$_RSV->error.'</span>
    </div>';
  }
}

?>