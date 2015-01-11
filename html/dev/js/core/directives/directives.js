Core.directive('navmenu', function() {
	return {
		
		link : function(scope, element, attr) {

			scope.items = [
				{'title' : 'Übersicht', 'class' : 'fa fa-dashboard fa-fw', 'url' : 'dashboard'},
				{'title' : 'Profil', 'class' : 'fa fa-user fa-fw', 'url' : 'profile'},
				{'title' : 'Ausschreibungen', 'class' : 'fa fa-pencil fa-fw', 'url' : 'briefings'},
				/*{'title' : 'Bewerbungen', 'class' : 'fa fa-heart fa-fw', 'url' : 'applications'},*/
				{'title' : 'Aufträge', 'class' : 'fa fa-wrench fa-fw', 'url' : 'projects'},
				{'title' : 'Einstellungen', 'class' : 'fa fa-cogs fa-fw', 'url' : 'settings'}
			];

		}
	};

});


