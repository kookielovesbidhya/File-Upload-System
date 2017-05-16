<?php
  $location = "/uploads/semester/old";
  if(!file_exists($location));
  {
    mkdir($location);
    echo "Success";
  }
?>
