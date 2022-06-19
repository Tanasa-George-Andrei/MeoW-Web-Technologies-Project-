<?php
class Connection {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo; // PDO object
  private $stmt; // SQL statement
  public $error; // Error message
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct() {
    $this->pdo = null;
    $this->stmt = null;
  }

  // (C) SAVE RESERVATION
  function save ($name, $email, $message) {
    try {
      $this->stmt = $this->pdo->prepare(
        "INSERT INTO `mails` (`res_name`, `res_email`, `res_message`) VALUES (?,?,?)"
      );
      $this->stmt->execute([$name, $email, $message]);
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
    
    // $to = "mihnea.radu@yahoo.com";
    // $subject = "Reservation Received";
    // $message = "Thank you, we have received your request and will process it shortly.";
    // $headers = "Content-type: text/html\r\n";
    // @mail($email, $subject, $message, $headers);
    return true;
  }
  
}

define("DB_HOST", "localhost");
define("DB_NAME", "zoo");
define("DB_CHARSET", "utf8");
define("DB_USER", "user");
define("DB_PASSWORD", "password");

$_RSV = new Reservation();