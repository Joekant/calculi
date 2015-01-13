Core.directive('navmenu', function($location, $routeParams) {
	


	return {
		
		link : function(scope, element, attr) {
			
			if(attr.role == "true") {
				scope.items = [
					{'title' : 'Übersicht', 'class' : 'fa fa-dashboard fa-fw', 'url' : 'dashboard', 'active' : ''},
					{'title' : 'Profil', 'class' : 'fa fa-user fa-fw', 'url' : 'profile', 'active' : ''},
					{'title' : 'Ausschreibungen', 'class' : 'fa fa-pencil fa-fw', 'url' : 'briefings', 'active' : '' },
					{'title' : 'Aufträge', 'class' : 'fa fa-wrench fa-fw', 'url' : 'projects', 'active' : ''},
					{'title' : 'Einstellungen', 'class' : 'fa fa-cogs fa-fw', 'url' : 'settings', 'active' : ''}
				];
			} else {
				scope.items = [
					{'title' : 'Übersicht', 'class' : 'fa fa-dashboard fa-fw', 'url' : 'dashboard', 'active' : ''},
					/*{'title' : 'Briefings', 'class' : 'fa fa-pencil fa-fw', 'url' : 'briefings'},*/
					{'title' : 'Bewerber', 'class' : 'fa fa-pencil fa-fw', 'url' : 'applicants', 'active' : ''},
					{'title' : 'Projekte', 'class' : 'fa fa-wrench fa-fw', 'url' : 'projects', 'active' : ''},
					{'title' : 'Einstellungen', 'class' : 'fa fa-cogs fa-fw', 'url' : 'settings', 'active' : ''}
				];
			}


			scope.$on('$routeChangeStart', function(next, current) { 
				var tmp = $location.$$path;
				var route = tmp.substring(1);
				
				
				for(var n = 0; n < scope.items.length ; n ++) {
					//console.log(scope.items[n].url, route)
					if( scope.items[n].url == route ) {

						scope.items[n].active = "active";
					}else {
						scope.items[n].active = "";
					}						
				}
					console.log(scope.items);

			});


			

		}
	};

});


Core.directive('noclick', function() {
	'use strict'
	return {
		link : function(scope,element, attr) {
			element.bind("click", function(ev) {
				ev.preventDefault();
			})
		}
	}
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

