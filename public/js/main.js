(function () {

	'use strict';

	// requires
	require('angular');
	require('angular-route');
	require('angular-animate');
	require('angular-sanitize');
	require('angular-youtube-embed');
	require('angular-aria');
	require('angular-ui-bootstrap');

	var ModalDialogDir = require('./directives/ModalDialogDir');
	var TagPenDir = require('./directives/TagPenDir');
	var homepageCtrl = require('./controllers/HomepageCtrl');
	var politiciansCtrl = require('./controllers/PoliticiansCtrl');
	var submitCtrl = require('./controllers/SubmitCtrl');
	var GetCardsSvc = require('./services/GetCardsSvc');
	var GetTagsSvc = require('./services/GetTagsSvc');
	var GetPoliticiansSvc = require('./services/GetPoliticiansSvc');
	var FlipFlopsApiSvc = require('./services/FlipFlopsApiSvc');
	var CardFcty = require('./factories/CardFcty');
	var imgSrc = {
		imgSrc: '/images/',
		defaultFlip: 'default_red.png',
		defaultFlop: 'default_blue.png'
	};
	var BackImage = require('./directives/BackImageDir');
	var ReadMore = require('./directives/ReadMoreDir');


	// angular begins
	angular.module('FlipFlopApp', ['ngRoute', 'ngAnimate', 'ngSanitize', 'youtube-embed', 'ui.bootstrap'])

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
				.when('/politicians', {
					templateUrl: "./partials/politicians.html",
					controller: "PoliticiansController"
				})				
				.otherwise({
					 redirectTo: '/'
				});
		}
	])

	// services
	.constant('IMGSRC', imgSrc)
	.factory('CardFcty', ['$http', 'IMGSRC', CardFcty])
	.factory('FlipFlopsApiSvc', ['$http', '$location', FlipFlopsApiSvc])
	.service('GetCardsSvc', ['$http', 'CardFcty', GetCardsSvc])
	.service('GetTagsSvc', ['$http', GetTagsSvc])
	.factory('GetPoliticiansSvc', ['$http', GetPoliticiansSvc])
	
	//controllers
	.controller('HomepageController', ['$scope', 'GetCardsSvc', homepageCtrl])
	.controller('PoliticiansController', ['$scope', 'GetPoliticiansSvc', politiciansCtrl])
	.controller('SubmitController', ['$scope', '$http', 'FlipFlopsApiSvc', 'GetPoliticiansSvc', '$location', submitCtrl])
	
	// directives
	.directive('modalDialogDir', ModalDialogDir)
	.directive('tagPenDir', ['GetTagsSvc', TagPenDir])
	.directive('readMore', ReadMore)
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