<!DOCTYPE html>	<table class="table table-striped">
	 	<tr>
	 		<th>Title</th><th>Description</th><th>Added</th><th>Remove</th>
	 	</tr>
	 	<tr ng-repeat="blog in blogs | filter: query">
	 		<td>{{ blog.title }}</td><td>{{ blog.description }}</td><td>{{ blog.added_date }}</td><td><button class="btn btn-danger" ng-click="removeData(blog.id)">x</button></td>
	 	</tr>
	</table>
<html>
<head>
	<title>AngularJS - PHPMySql</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
	 <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">AngularJS & PHP & MySQL</a>
     </div>
	</div>
</nav>
	<table class="table table-striped">
	 	<tr>
	 		<th>Title</th><th>Description</th><th>Added</th><th>Remove</th>
	 	</tr>
	 	<tr ng-repeat="blog in blogs | filter: query">
	 		<td>{{ blog.title }}</td><td>{{ blog.description }}</td><td>{{ blog.added_date }}</td><td><button class="btn btn-danger" ng-click="removeData(blog.id)">x</button></td>
	 	</tr>
	</table>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
</body>
</html>