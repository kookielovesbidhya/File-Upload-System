<?php
  if (!file_exists("setting.php")) {
    header("Location: http://localhost:8000/config.php");
  }
  echo "Successful";
?>
