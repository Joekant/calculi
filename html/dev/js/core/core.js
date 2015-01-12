"use strict";

var Core = angular.module('Core', ['ngRoute']);

//Defining Constants
Core.constant('INIT', {
   	'CTRL_URL' : '/js/controllers/',
   	'VIEW_URL' : '../_worker/views/',
	'ASSETS_URL' : 'img/assets/',
	'HOME' : '/',
	'APP_PATH' : '/calculi/rest/'
});

Core.run(function ($rootScope) {
    $rootScope.$on('$routeChangeSuccess', function () {
        setTimeout(function() {
        	$(document).foundation();	
        },200);
        
    });
});

/*Routing */
Core.config(function( $routeProvider, INIT ){

	$routeProvider.when( '/profile', { "templateUrl" : INIT.VIEW_URL + "profileView.html", "controller" : "ProfileCtrl" } );
	$routeProvider.when( '/briefings', { "templateUrl" : INIT.VIEW_URL + "briefingsView.html", "controller" : "BriefingsCtrl" } );
	$routeProvider.when( '/applications', { "templateUrl" : INIT.VIEW_URL + "applicationsView.html", "controller" : "ApplicationsCtrl" } );
	$routeProvider.when( '/calculator/:id', { "templateUrl" : INIT.VIEW_URL + "briefingsdetailView.html", "controller" : "CalculatorCtrl" } );

	$routeProvider.when( '/applicants', { "templateUrl" : INIT.VIEW_URL + "applicantsView.html", "controller" : "ApplicantsCtrl" } );

	/*$routeProvider.when( '/browse', { "templateUrl" : INIT.VIEW_URL + "browseView.html", "controller" : "browseCtrl" } );
	$routeProvider.when( '/browse/:id', { "templateUrl" : INIT.VIEW_URL + "browseView.html", "controller" : "browseCtrl" } );*/

});
