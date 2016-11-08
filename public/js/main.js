(function () {

	'use strict';

	require('angular');
	require('angular-route');
	require('angular-animate');
	var ModalDialog = require('./directives/ModalDialogDir');
	var homepageCtrl = require('./controllers/HomepageCtrl');
	var GetCardsSvc = require('./services/GetCardsSvc');
	var CardFcty = require('./factories/CardFcty');
	var imgSrc = {
		imgSrc: '/images/'
	};
	var BackImage = require('./directives/BackImageDir');

	angular.module('SampleApp', ['ngRoute', 'ngAnimate'])
	// configs
	.config([
		'$locationProvider',
		'$routeProvider',
		function($locationProvider, $routeProvider) {
			$locationProvider.hashPrefix('!');
			// routes
			$routeProvider
				.when("/", {
					templateUrl: "./partials/homepage.html",
					controller: "HomepageController"
				})
				.otherwise({
					 redirectTo: '/'
				});
		}
	])
	.constant('IMGSRC', imgSrc)
	// services
	.factory('CardFcty', ['IMGSRC', CardFcty])
	.service('GetCardsSvc', ['$http', 'CardFcty', GetCardsSvc])
	//controllers
	.controller('HomepageController', ['$scope', '$http', 'GetCardsSvc', homepageCtrl])
	// directives
	.directive('modalDialog', ModalDialog)
	.directive('stopEvent', function () {
        return {
            restrict: 'A',
            link: function (scope, element, attr) {
                if(attr && attr.stopEvent)
                    element.bind(attr.stopEvent, function (e) {
                        e.stopPropagation();
                    });
            }
        };
     });
}());