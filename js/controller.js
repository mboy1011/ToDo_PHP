angular.module('apptodo',[])
.controller('apptodo', ['$scope', '$http', '$log', function($scope, $http, $log){
	$http.get('./js/popData.php')
		.success(function(data) {
			$scope.todos = data;
		})
		.error(function(err) {
			$log.error(err);
		})

	$scope.pushData = function($params) {
		$http.post('./js/insert.php',{'title':$params.todo})
			.success(function(data) {
				$scope.todos = data;
			})
			.error(function(err) {
				$log.error(err);
			})
	}

	$scope.removeData = function($params) {
		var cnfrm = confirm("Are you sure to delete?");
		if(cnfrm) {
			$http.post('./js/delete.php', {'id':$params})
			.success(function(data) {
				$scope.todos = data;
			})
			.error(function(err) {
				$log.error(err);
			})
		} else {
			// 
		}
		
	}
}])
