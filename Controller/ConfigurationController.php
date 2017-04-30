<?php
  include 'validator.php';
  include_once '../model/usertable.php';
  include_once('../model/notestable.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = validate($_POST['title']);
    $dbname = validate($_POST['dbname']);
    $dbuser = validate($_POST['dbuser']);
    $dbpass = validate($_POST['dbpass']);
    $dbhost = validate($_POST['db']);
    $configfile = fopen("../setting.php", "w") or die("Unable to open file!");
    $settings = 'define(\'dbhost\','."'$dbhost')".";\n".'define(\'dbuser\','."'$dbuser')".";\n".'define(\'dbpass\','."'$dbpass')".";\n".'define(\'dbname\','."'$dbname')".";\n".'define(\'title\','."'$title')"."\n";
    fwrite($configfile, $settings);
    fclose($configfile);
    //unlink('../config.php');
    $username = validate($_POST['username']);
    $password = validate($_POST['userpass']);
    $useremail = validate($_POST['email']);
    $userdata = array(
      "username" => $username,
      "password" => md5($password),
      "email" => $useremail,
    );
    $user = new user($username, $useremail, $password);
    $user->create('old_user_table');
    $user->save();

    $notes = new notes;
    $notes->create('old_notes_table');
    header("Location: http://localhost:8000/");
    exit();
  }
?>
