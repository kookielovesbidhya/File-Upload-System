<?php
  if (!file_exists("setting.php")) {
    header("Location: http://localhost:8000/config.php");
  }
?>
<?php

	$title = "Old Is Gold";

?>

<?php
$body = '<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Old Is Gold</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li><a href="##">Link 1</a></li>
            <li><a href="##">Link 2</a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
            <!-- Sidebar Menu Items --->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#"> TU</a>
                    </li>
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo">PU <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                        <li>
                          <a href="#">bba</a>
                        </li>
                        <li><a href="#">CS</a></li>
                      </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo-1">KU <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo-1" class="collapse">
                          <li>
                            <a href="#">Com</a>
                          </li>
                          <li><a href="#">CS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 main">
                      <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
                    </p>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ';
    require 'model/template.php';

?>
