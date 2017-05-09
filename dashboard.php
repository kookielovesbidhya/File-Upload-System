<?php session_start();?>
<?php
  if (!isset($_SESSION['login'])) {
    $_SESSION['message'] = "Please login to access this area";
    header("Location: /login.php");
  }
?>

<?php $title="Dashboard"; ?>
<?php
  $body = '
		 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				 <div class="navbar-header">
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								 <span class="sr-only">Toggle navigation</span>
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>
						 </button>
						 <a class="navbar-brand" href="#">Old Is Gold</a>
				 </div>
				 <ul class="nav navbar-right top-nav">
					 		<li><a href="#register">Add User</a></li>
				 			<li><a href="#addnotes">Add Notes</a></li>
							<li><a href="#list">View Notes</a></li>
							<li><a href="/logout.php">LogOut</a></li>
				</ul>
		 </nav>
<div ng-view>
</div>
';
require 'model/template.php';
?>
