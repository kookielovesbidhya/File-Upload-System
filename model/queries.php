<?php

include 'database.php';

class query {
  private $conn;

  public function __construct() {
    $this->conn = new DBase();
    $this->conn = $this->conn->getMyDb();
  }

  public function getData($table,$id) {
    $sql = "SELECT * FROM $table WHERE email ='".$id."'";
    $result = $this->conn->query($sql);
    return $result;
  }

}

?>
