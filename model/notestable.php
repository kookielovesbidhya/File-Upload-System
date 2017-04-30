<?php

include 'database.php';

class notes {
  private $name;
  private $location;
  private $school;
  private $department;
  private $semester;
  private $conn;

  public function __construct($name, $location, $school, $department, $semester) {
    $this->name = $name;
    $this->location = $location;
    $this->school = $school;
    $this->department = $department;
    $this->semester = $semester;
    $this->conn = new DB;
    $this->conn = $this->conn->getMyDb();
  }

  public function create($table_name) {
    $sql = "CREATE TABLE ".$table_name." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    location VARCHAR(255) NOT NULL,
    school VARCHAR(50), NOT NULL,
    department VARCHAR(50), NOT NULL,
    semester VARCHAR(12), NOT NULL,
    reg_date TIMESTAMP );";
    $conn = $conn->prepare($sql);
    $conn->execute();
  }
  public function save() {
    $sql = "INSERT INTO notes (name, location, school, department, semester) VALUES ('.$name.', '.$location.', '.$school.', '.$department.', '.$semester.');";
    $conn = $conn->prepare($sql);
    $conn->execute();
  }
}

?>
