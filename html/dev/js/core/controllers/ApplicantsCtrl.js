Core.controller('ApplicantsCtrl', function ($scope, MyHTTP, $routeParams, $location) {
	var path = "application/applicants";
	var sendPath = "project/accept";
	$scope.data = [];


	
	MyHTTP.get(path).
		then(function(result) {
			console.log(result);
			var data = getNumberReferences(result.data[0]);
		
			$scope.data = data;
			console.log($scope.data);
		});
	

	var getNumberReferences = function(data) {
		var ref = {};
		var wb = {};

		for(var n = 0; n < data.length; n ++) {
			if(data[n].public_info.length == 0 ) continue;
			
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

	$scope.send = function(el) {
		var param = {
			'workerId' : el.worker_id,
			'clientId' : el.client_id,
			'briefingId' : el.briefing_id,
			'applicationId' : el.application_id		
		}

		MyHTTP.post(sendPath, param).
			then(function(result) {
				console.log(result);
			});
		console.log(el);
	}
});
