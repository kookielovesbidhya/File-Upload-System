<?php
  session_start();
  include '../notestable.php';
  include '../validator.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate(basename($_FILES["file"]["name"]));
    $school = validate($_POST("school"));
    $department = validate($_POST("dept"));
    $semester = validate ($_POST("sem"));
  }

  $location = "..uploads/".$school."/".$department."/".$semester."/";

  if (!file_exists($location)) {
    mkdir($location);
  }
  $location = $location.$name;
  $note = new notes();
  $note->newNote($name, $location, $school, $department, $semester);
  if($note->save()) {
    $_SESSION('message') = "Successfully added new note";
  }
 ?>
