Core.directive('navmenu', function() {
	return {
		
		link : function(scope, element, attr) {
			if(attr.role == "true") {
				scope.items = [
					{'title' : 'Übersicht', 'class' : 'fa fa-dashboard fa-fw', 'url' : 'dashboard'},
					{'title' : 'Profil', 'class' : 'fa fa-user fa-fw', 'url' : 'profile'},
					{'title' : 'Ausschreibungen', 'class' : 'fa fa-pencil fa-fw', 'url' : 'briefings'},
					{'title' : 'Aufträge', 'class' : 'fa fa-wrench fa-fw', 'url' : 'projects'},
					{'title' : 'Einstellungen', 'class' : 'fa fa-cogs fa-fw', 'url' : 'settings'}
				];
			} else {
				scope.items = [
					{'title' : 'Übersicht', 'class' : 'fa fa-dashboard fa-fw', 'url' : 'dashboard'},
					/*{'title' : 'Briefings', 'class' : 'fa fa-pencil fa-fw', 'url' : 'briefings'},*/
					{'title' : 'Bewerber', 'class' : 'fa fa-pencil fa-fw', 'url' : 'applicants'},
					{'title' : 'Projekte', 'class' : 'fa fa-wrench fa-fw', 'url' : 'projects'},
					{'title' : 'Einstellungen', 'class' : 'fa fa-cogs fa-fw', 'url' : 'settings'}
				];
			}

		}
	};

});

Core.directive('foundationTab', function($document) {
	'use strict';
	return {
		link : function(scope, element, attr) {
			//console.log("hi");
			
			var a = element.find("a");
			
			a.bind("click", function(event,element) {
				event.preventDefault();
			});
			
		}
	}
});

Core.directive('customOnChange', function() {
	'use strict';	
  	return {
    	restrict: "A",
    	link: function (scope, element, attrs) {
	      	var onChangeFunc = element.scope()[attrs.customOnChange];

	      	element.bind('change', onChangeFunc(element));
    	}
  	};
});


Core.directive('calculatorValue', function($timeout) {
	var defaultSubCost = 0;
	var defaultSubTime = 50
	return {
		
		link : function(scope, element, attr) {
			var time = [];
			var cost = [];
			scope.el.subTime = [];
			scope.el.subCost = [];
			

			//for(var n in scope.subTime)
			
			scope.process = function() {
				var subTime = 0;
				var subCost = 0;
				var result = 0;
				
				var nEl = element.find(".effort").length;
				
				for(var i = 0; i < nEl; i ++) {
					//console.log(scope.el.subTime, scope.el.subCost );
					if(scope.el.subTime[i] != undefined && scope.el.subCost[i] != undefined ) {
						result += scope.el.subTime[i] * scope.el.subCost[i];
						subTime = subTime + parseInt(scope.el.subTime[i],10);
						
					} 
				}
				//console.log(scope.el.subTime)
				scope.el.time = subTime;
				scope.el.cost = result;
				scope.changePrice();
			}
			/*$timeout(function() {
				time = element.find(".effort");
				cost = element.find(".rate");
				
				$("input").change(function() { process(); });
			
			}, 200);
			
			var process = function() {
				console.log(time);
				var result = 0;
				for(var i = 0; i < time.length; i ++) {
					result += time.eq(i).val() * cost.eq(i).val();
				}
				console.log(result);
			};*/

		}

	};

});

