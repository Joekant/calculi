Core.controller('ProfileCtrl', function ($scope, MyHTTP, $http, INIT) {
	"use strict";

	var param = "user/getmeta";
	var updateParam = "user/updatepublicmeta";
	var fileParam = "file/savefile";

	$scope.picFolder = INIT.UPLOAD_DIR;

	$scope.pub = {
		'general' : {},
		'education' : [],
		'references' : []
	};



	$scope.edTemp = {};
	$scope.refTmp = {};

	MyHTTP.get(param).
		then(function(result) {
			console.log(result);
			if(result.data['public_info'] != null)  {
				//if(result.data["publicInfo"].)
				$scope.pub = result.data["public_info"];

			}
			

		});

	$scope.addEducation = function(button) {
		$scope.pub.education.push($scope.edTemp);
		$scope.edTemp = {};
		console.log(button);
		
		$(button.target).foundation('reveal', 'close');
	}

	$scope.addReference = function(button) {
		var formData = new FormData();
		formData.append("file", $scope.refTmp.img[0].files[0]);

		
		
		MyHTTP.postFile(fileParam, formData).success(function(data) {
			
			console.log(data);

			if(data.fileName) {
				$scope.refTmp.img = data.fileName,
				$scope.pub.references.push($scope.refTmp);	
				
				$scope.refTmp = {};	
			}

			console.log($scope.pub);
		
		});



		$(button.target).foundation('reveal', 'close');	
	}

	$scope.checkPic = function(pic) {
		if(pic != undefined) {
			return INIT.UPLOAD_DIR + $scope.pub.general.picture;
		}
	}

	$scope.addFile = function(pic) {
		var formData = new FormData();
		var newPic = $(pic);
		formData.append("file", newPic[0].files[0]);



		MyHTTP.postFile(fileParam, formData).success(function(data) {
			$scope.pub.general.picture =  data.fileName;
				
		});
		
		
	}

	$scope.addThumbnail = function(pic) {
		
		$scope.refTmp.img = pic;

		
		/*MyHTTP.postFile(fileParam, formData).success(function(data) {
			$scope.pub.reference.push({
				'picture' : data.fileName
			});
				
		});*/
	}


	$scope.save = function() {
		var wrapper = {
			'userInfo' : $scope.pub
		};

		MyHTTP.post(updateParam,wrapper).
			then(function(result) {
				console.log(result);
			});
		
	}

});