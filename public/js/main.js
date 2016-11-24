(function () {

	'use strict';

	// requires
	require('angular');
	require('angular-route');
	require('angular-animate');
	require('angular-sanitize');
	var ModalDialog = require('./directives/ModalDialogDir');
	var homepageCtrl = require('./controllers/HomepageCtrl');
	var submitCtrl = require('./controllers/SubmitCtrl');
	var GetCardsSvc = require('./services/GetCardsSvc');


// NEEDS GetPoliticiansSvc for SubmitCtrl.js to get list of politicians to include in dropdown





	var FlipFlopsApiSvc = require('./services/FlipFlopsApiSvc');
	var CardFcty = require('./factories/CardFcty');
	var imgSrc = {
		imgSrc: '/images/'
	};
	var BackImage = require('./directives/BackImageDir');


	// angular begins
	angular.module('SampleApp', ['ngRoute', 'ngAnimate', 'ngSanitize'])
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
				.when('/submit', {
					templateUrl: "./partials/submit.html",
					controller: "SubmitController"
				})
				.otherwise({
					 redirectTo: '/'
				});
		}
	])




	// services
	.constant('IMGSRC', imgSrc)
	.factory('CardFcty', ['IMGSRC', CardFcty])
	.factory('FlipFlopsApiSvc', ['$http', FlipFlopsApiSvc])
	.service('GetCardsSvc', ['$http', 'CardFcty', GetCardsSvc])
	
	//controllers
	.controller('HomepageController', ['$scope', '$http', 'GetCardsSvc', homepageCtrl])
	.controller('SubmitController', ['$scope', '$http', 'FlipFlopsApiSvc', submitCtrl])
	
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