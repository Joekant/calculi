Core.controller('ApplicationsCtrl', function ($scope, MyHTTP) {

	var path = "applications/getapplications";
	$scope.data= [];

	MyHTTP.get(path).
		then(function(result) {
			$scope.data = result.data;
			console.log($scope.data);
		});

	
});
