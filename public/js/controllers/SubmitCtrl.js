module.exports = function($scope, $http, FlipFlopsApiSvc) {
	


	$scope.flipflopCreate = function() {
		// get data
		var data = {
			title: $('#submit__title').val(),
			content: $('#submit__content').val()
		};
		
		// pass data as a param to FlipFlopsApiSvc
		console.log('SubmitCtrl.js: Line 10 -- FlipFlopsApiSvc:');
		console.dir(FlipFlopsApiSvc);

		FlipFlopsApiSvc.post(data);
	};
	
	// $scope.flipflopDestroy = function(id) {
		
	// };
};