<?php $title="Configuration"; ?>
<?php
    $body = '
    <div class="container">
      <div class="login-container">
            <h1>Set Up</h1><br>
            <form action="Controller/ConfigurationController.php" method="post">
                <input type="pass" name="title" placeholder="Title for website" required>
                <input type="text" name="db" placeholder="Database Host" required>
                <input type="text" name="dbname" placeholder="Database Name" required>
                <input type="text" name="dbuser" placeholder="Database Username" required>
                <input type="password" name="dbpass" placeholder="Database Password" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="username" placeholder="Username for login" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
      </div>
      </div>
    ';



    require 'model/template.php';

?>
