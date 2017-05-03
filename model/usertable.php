<?php
include_once 'database.php';

class user  {
  private $name;
  private $email;
  private $password;
  private $conn;
  private $table_name;

  public function __construct ($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->conn = new DBase();
    $this->conn = $this->conn->getMyDb();

  }

  public function save() {
    $sql = "INSERT INTO ". $this->table_name." (name, email, password) VALUES ('$this->name', '$this->email', '$this->password')";
    try{
      $this->conn->query($sql);
    }
    catch(PDOException $e){
      echo "Error: $->getMessage()";
      die();
    }
  }

  public function create($table_name) {
    $this->table_name = $table_name;
    $sql = 'CREATE TABLE '.$table_name.' (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP )';
    try{
      $this->conn->query($sql);
    }
    catch(PDOException $e){
      echo "Error: $->getMessage()";
      die();
    }
  }
}
?>
