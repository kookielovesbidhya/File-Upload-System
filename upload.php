<?php $title = "New Upload"; ?>
<?php session_start();?>
<?php
  if (!isset($_SESSION['login'])) {
    $_SESSION['message'] = "Please login to access this area";
    header("Location: /login.php");
  }
?>
<?php $body =
  '
  <div class="login-container">
    <form id="uploader" method="post" enctype="multipart/form-data" action = "Controller/NotesController.php">
       <label for="university">University</label>
       <select class="form-control" id="univer" name="school" onchange="populate(this.id, \'depart\')">
          <option value="">-------</option>
          <option value="TU">TU</option>
          <option value="PU">PU</option>
          <option value="KU">KU</option>
        </select>
      <label for="depart">Department</label>
      <select class="form-control" id="depart" name="dept">
        <option value="">-------</option>
      </select>
      <label for="semester">Semester</label>
      <select class="form-control" id="semester" name="sem">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
      <input type="file" name="file" id="fileToUpload"><p/>
      <input type="submit" value="Upload Note" name="submit">
    </form>
</div>
  ';
  require 'model/template.php';
?>
