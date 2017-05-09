var app = angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider){
  $routeProvider
  .when("/register", {
    templateUrl: "register.php"
  })
	.when("/list", {
		templateUrl: "notelist.php"
	})
  .when("/addnotes", {
    templateUrl: "upload.php"
  })
  .when("/logout", {
    templateUrl: "logout.php"
  })
  .when("/index", {
    templateUrl: "index.php"
  })
  .when("/login", {
    templateUrl: "login.php"
  })
});
