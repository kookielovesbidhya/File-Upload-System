<?php

class user {
  private $name;
  private $email;
  private $password;

  public function __construct ($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function save() {
    $conn = new DB;
    $sql = "INSERT INTO notes (name, email, password)
    VALUES ('.$this->name.', '.$this->email.', '.$this->password.');";
    $conn = $conn->prepare($sql);
    if ($conn->execute())
    {
      echo "Successful";
    }
    else {
      echo "Unsuccessful";
    }
  }

  public function create($table_name) {
    $conn = new DB;
    $sql = "CREATE TABLE ".$table_name." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255), NOT NULL,
    reg_date TIMESTAMP );";
    $conn = $conn->prepare($sql);
    if ($conn->execute())
    {
      echo "Successful";
    }
    else {
      echo "Unsuccessful";
    }
  }
}
?>
