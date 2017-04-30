<?php
include 'database.php';

class user {
  private $name;
  private $email;
  private $password;
  private $conn;

  public function __construct ($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->conn = new DB;
    $this->conn = $this->conn->getMyDb();
  }

  public function save() {
    $sql = "INSERT INTO notes (name, email, password)
    VALUES ('.$this->name.', '.$this->email.', '.$this->password.');";
    $conn = $conn->prepare($sql);
    $conn->execute();
  }

  public function create($table_name) {
    $sql = "CREATE TABLE ".$table_name." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255), NOT NULL,
    reg_date TIMESTAMP );";
    $conn = $conn->prepare($sql);
    $conn->execute();
  }
}
?>
