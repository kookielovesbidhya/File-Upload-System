<?php session_start();?>
<?php
  if (isset($_session['login'])) {
    header("Location: dashboard.php");
  }
?>

<?php $title="Login"; ?>

<?php
$body =
      '<div class="container">
      <div class = "login-container">
      <form class="form-signin" id = "login-form" action="Controller/LoginController.php" method="post">
        <h2 class="form-signin-heading">Admin Sign In</h2> ';
        if(isset($_SESSION['message']) or $_GET['e'] == 1) {
          $body .=
                  '<div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <h4>Unauthorized access!! ';
          $body .= $_SESSION['message'].'</h4></div>';
          $_SESSION['message'] = null;
        }
  $body .= '
          <input type="email" name="username" placeholder="Email" required autofocus>
          <input type="password" name="userpass" placeholder="Password">
          <input type="submit" name="login" class="login login-submit" value="Signin">
          </form>
        </div>
        </div>
    ';
    require 'model/template.php';

?>
