Core.controller('ApplicantsCtrl', function ($scope, MyHTTP, $routeParams, $location) {
	var path = "application/applicants";
	$scope.data = [];
	
	MyHTTP.get(path).
		then(function(result) {
			var data = getNumberReferences(result.data[0]);
		
			$scope.data = data;
			console.log($scope.data);
		});
	

	var getNumberReferences = function(data) {
		var ref = {};
		var wb = {};
		for(var n = 0; n < data.length; n ++) {
			ref = JSON.parse(data[n].public_info);
			if(ref.hasOwnProperty("references") && ref.references.length > 0) {
				data[n].numberReferences = ref.references.length;
			}
			
			if(ref.general.hasOwnProperty("website")) {
				data[n].website = ref.general.website;
			}
			
		}

		return data;
		
		
	}
});
