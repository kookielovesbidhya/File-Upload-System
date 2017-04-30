<?php
  $db = 'localhost';
  $dbuser = 'root';
  $dbpass = 'root';
  $settings = 'define(\'dbhost\','."'$db')".";\n".'define(\'dbuser\','."'$dbuser')".";\n".'define(\'dbpass\','."'$dbpass')".";\n";
  $configfile = fopen("../testsetting.php", "w") or die("Unable to open file!");
  fwrite($configfile, $settings);
  fclose($configfile);
  unlink('../testsetting.php');
?>
