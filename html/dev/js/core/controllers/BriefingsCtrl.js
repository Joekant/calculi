Core.controller('BriefingsCtrl', function ($scope, MyHTTP) {

	var path = "application/getapplications&briefing";
	var data= [];


	var fetchInfo = function() {
		var applications = data.applications;
		var briefings = data.briefings;

		for(var n = 0; n < applications.length; n ++ ) {

			for(var i = 0; i < briefings.length; i ++ ) {
				if(applications[n].briefing_id == briefings[i].briefing_id) {
					briefings[i].status = applications[n].status;
					briefings[i].estimated_price = applications[n].estimated_price;
					continue;
				}
			}

		}
		$scope.briefings = briefings;
		console.log(briefings);
	}

	MyHTTP.get(path).
		then(function(result) {
			data = result.data;
			
			fetchInfo();
		});


});
