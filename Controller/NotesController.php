<?php
  session_start();
  include '../model/notestable.php';
  include 'validator.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate(basename($_FILES["file"]["name"]));
    $school = validate($_POST["school"]);
    $department = validate($_POST["dept"]);
    $semester = validate ($_POST["sem"]);
  }


  $location = $_SERVER["DOCUMENT_ROOT"]."/uploads/".$school;

  if (!file_exists($location)) {
    mkdir($location);
  }
  $location .= "/$department";
  if (!file_exists($location)) {
    mkdir($location);
  }

  $location .= "/$semester";

  if (!file_exists($location)) {
    mkdir($location);
  }

  $location .= "/";
  $table_name = "old_notes_table";
  $note = new notes();
  $location .= $name;
  $note->newNote($name, $location, $school, $department, $semester, $table_name);
  $note->save();
  if(move_uploaded_file($_FILES["file"]["tmp_name"],$location)) {
    $_SESSION['message'] = "Successfully added New Note";
    header("Location: http://localhost:8000/dashboard.php#/addnotes");
  }
 ?>
