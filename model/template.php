<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Oldizgold | <?php echo $title ?></title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/signin.css">
    <link rel="stylesheet" type="text/css" href="/public/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <script type="text/javascript" src="/public/js/upload.js"></script>
  </head>
  <body ng-app="myApp">
    <?php
      if(isset($_SESSION['message']) or $_GET['e'] == 1) {
        echo '<div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h4>';
        echo $_SESSION['message'].'</h4></div>';
        $_SESSION['message'] = null;
      }
    ?>
      <?php
        echo $body;
        if(!(basename($_SERVER['PHP_SELF']) === 'dashboard.php'))
        {
          include_once 'footer.php';
        }
      ?>
  <script type="text/javascript" src = "/public/js/jquery.min.js"></script>
  <script type="text/javascript" src = "/public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/public/js/dashboard.js"></script>
  </body>
</html>
