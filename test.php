<?php
  $location = $_SERVER["DOCUMENT_ROOT"]."/uploads/sem";
  if(!(file_exists($location)));
  {
    mkdir($location);
    echo $location;
    echo "Success";
  }
?>
