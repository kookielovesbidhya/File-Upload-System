<?php
  session_start();
  if (!isset($_SESSION['login'])) {
    $_SESSION['message'] = "You need to login to access the area";
    header("Location: /login.php?e=1");
  }
  session_unset();
  session_destroy();
  header("location: /login.php");
 ?>
