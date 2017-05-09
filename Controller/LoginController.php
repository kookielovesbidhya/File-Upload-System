<?php
  session_start();
  include 'validator.php';
  include_once '../model/queries.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validate($_POST['username']);
    $password = validate($_POST['userpass']);
  }

  $table = 'old_user_table';

  $userpass = new query ();
  $result = $userpass->getData($table,$username);
  $result = $result->fetch();
  if ($result["password"] === md5($password)){
    $login = $result["username"];
    $_SESSION['login'] = "$login";
    header("location: ../dashboard.php");
  }
  else{
    $_SESSION['message'] = "Wrong username or password";
    header("location: ../login.php");
  }
?>
