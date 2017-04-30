<?php $title="Configuration"; ?>
<?php
    $body = '
      <div class="container">
        <div class = "row">
          <div class = "col-md-8 col-md-offset-2">
            <form class="form-signin" method="post" action="controller/configuration.php">
            <h2 class="form-signin-heading">Set-Up</h2>
            <label class="sr-only">Title</label>
            <input type="pass" name="title" class="form-control" placeholder="Title for website" required>
            <label class="sr-only">DBHost</label>
            <input type="text" name="db" class="form-control" placeholder="Database Host" required>
            <label class="sr-only">DBUser</label>
            <input type="text" name="dbname" class="form-control" placeholder="Database Username" required>
            <label class="sr-only">DBPassword</label>
            <input type="password" name="dbpass" class="form-control" placeholder="Database Password" required>
            <label class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username for login" required>
            <label class="sr-only">Password</label>
            <input type="password" name="userpass" class="form-control" placeholder="Password for login" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    ';



    require 'model/template.php';

?>
