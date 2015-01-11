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

/*Routing */
Core.config(function( $routeProvider, INIT ){

	$routeProvider.when( '/profile', { "templateUrl" : INIT.VIEW_URL + "profileView.html", "controller" : "ProfileCtrl" } );
	$routeProvider.when( '/briefings', { "templateUrl" : INIT.VIEW_URL + "briefingsView.html", "controller" : "BriefingsCtrl" } );
	$routeProvider.when( '/applications', { "templateUrl" : INIT.VIEW_URL + "applicationsView.html", "controller" : "ApplicationsCtrl" } );
	/*$routeProvider.when( '/search', { "templateUrl" : INIT.VIEW_URL + "searchView.html", "controller" : "searchCtrl" } );

	$routeProvider.when( '/browse', { "templateUrl" : INIT.VIEW_URL + "browseView.html", "controller" : "browseCtrl" } );
	$routeProvider.when( '/browse/:id', { "templateUrl" : INIT.VIEW_URL + "browseView.html", "controller" : "browseCtrl" } );*/

});
