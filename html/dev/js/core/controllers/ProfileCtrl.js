"use strict";
Core.controller('ProfileCtrl', function ($scope, MyHTTP) {
	var param = "user/getmeta";
	
	$scope.pri = {};
	$scope.pub = {};

	var formatingData  = function() {
		
	}

	MyHTTP.get(param).
		then(function(result) {
			//$scope.data = result.data;
			$scope.pri = result.data["private_info"];
			$scope.pub = result.data["public_info"];

			formatingData();
			console.log($scope.pri, $scope.pub);

		});

});