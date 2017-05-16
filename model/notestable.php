<?php

include_once 'database.php';

class notes {
  private $name;
  private $location;
  private $school;
  private $department;
  private $semester;
  private $conn;
  private $table_name;

  public function __construct() {
    $this->conn = new DBase();
    $this->conn = $this->conn->getMyDb();
  }

  public function create($table_name) {
    $this->table_name = $table_name;
    $sql = 'CREATE TABLE '.$table_name.' (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    location VARCHAR(255) NOT NULL,
    school VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    semester VARCHAR(12) NOT NULL,
    reg_date TIMESTAMP )';
    try{
      $this->conn->query($sql);
    }
    catch(PDOException $e){
      echo "Error: $->getMessage()";
      die();
    }
  }

  public function newNote($name, $location, $school, $department, $semester, $table_name) {
    $this->table_name = $table_name;
    $this->name = $name;
    $this->location = $location;
    $this->school = $school;
    $this->department = $department;
    $this->semester = $semester;
  }
  public function save() {
    $sql = "INSERT INTO ".$this->table_name." (name, location, school, department, semester) VALUES ('$this->name', '$this->location', '$this->school', '$this->department', '$this->semester')";
    if(!($this->conn->query($sql))) {
      echo"Fatal error, Cant connect to database.";
      var_dump($sql);
      die();
    }
  }
}

?>
