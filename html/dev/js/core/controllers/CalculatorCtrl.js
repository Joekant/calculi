Core.controller('CalculatorCtrl', function ($scope, MyHTTP, $routeParams) {
	var id = $routeParams.id;
	var ex = {'briefingId' : id};
	var param = "briefing/getbriefingbyid?briefingId=" + id;

	$scope.rate = 50;
	$scope.discount = 0;
	$scope.tax = 20;
	$scope.price = 0;
	$scope.msw = 0;
	$scope.totalTime = 0;
	$scope.pricePerHour = 0;
	$scope.comment = "";

	$scope.data = {};

	MyHTTP.post(param,ex).
		then(function(result) {
			var data = result.data;
			
			dataFormat(data);

		});


	var dataFormat = function(data) {
		$scope.data = [
			{
				'name' : 'Inhalt',
				'data' : data.general_briefing.content,
				'time' : 0,
				'cost' : 0,
				'subCost' : [],
				'subTime' : []
			},{
				'name' : 'Funktionalität',
				'data' : data.general_briefing.functions,
				'time' : 0,
				'cost' : 0,
				'subCost' : [],
				'subTime' : []
			},{
				'name' : 'Design',
				'data' : data.general_briefing.design,
				'time' : 0,
				'cost' : 0,
				'subCost' : [],
				'subTime' : []
			},{
				'name' : 'Service',
				'data' : data.general_briefing.service,
				'time' : 0,
				'cost' : 0,
				'subCost' : [],
				'subTime' : []
			}
		];
			
	}
		

	$scope.changePrice = function() {
		var len = $scope.data.length;
		var result = 0;
		var time = 0;
		for(var i in $scope.data) {
			time += $scope.data[i].time;
			result += $scope.data[i].cost;
		}
		
		if($scope.tax > 0) {
			$scope.msw = (result * $scope.tax) / 100;
			$scope.price = result +  ((result * $scope.tax) / 100);	
		} else {
			$scope.price = result;
		}

		$scope.totalTime = time;
		$scope.pricePerHour = $scope.price / time;
 		
		//console.log(len);
	}

});
