<?php $title="Configuration"; ?>
<?php
    $body = '
      <div class="login-container">
            <h1>Add New User</h1><br>
            <form action="Controller/" method="post">
                <input type="text" name="username" placeholder="Username" required autofocus>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
      </div>
    ';
    require 'model/template.php';
?>
