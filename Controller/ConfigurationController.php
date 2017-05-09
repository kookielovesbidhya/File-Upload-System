<?php
  session_start();
  include 'validator.php';
  include_once '../model/usertable.php';
  include_once('../model/notestable.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = validate($_POST['title']);
    $dbname = validate($_POST['dbname']);
    $dbuser = validate($_POST['dbuser']);
    $dbpass = validate($_POST['dbpass']);
    $dbhost = validate($_POST['db']);
    //$configfile = fopen("../setting.php", "w") or die("Unable to open file!");
    $configfile1 = fopen("../sql.ini", "w");
    $setting = "DB_USER = "."\"$dbuser\""."\nDB_PASS = "."\"$dbpass\""."\nDB_host = "."\"$dbhost\""."\nDB = "."\"$dbname\"";
    fwrite($configfile1, $setting);
    //fwrite($configfile, $settings);
    fclose($configfile1);
    //unlink('../config.php');
    $username = validate($_POST['username']);
    $password = validate($_POST['userpass']);
    $useremail = validate($_POST['email']);
    $user = new user($username, $useremail, md5($password));
    $user->create("old_user_table");
    $user->save();

    $notes = new notes();
    $notes->create("old_notes_table");
    header("Location: http://localhost:8000/");
    exit();
  }
?>
