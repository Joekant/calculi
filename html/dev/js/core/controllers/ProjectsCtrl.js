Core.controller('ProjectsCtrl', function ($scope, MyHTTP) {

	var path = "projects/getprojects";
	$scope.data= [];
	$scope.worker = WORKER;


	MyHTTP.get(path).
		then(function(result) {
			$scope.data = result.data;
			console.log($scope.data);
		});
	
});
