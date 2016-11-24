module.exports = function($scope, $http, FlipFlopsApiSvc, GetPoliticiansSvc, $location) {
	
	var politiciansPromise = GetPoliticiansSvc.get();
	
	politiciansPromise.then(function(data) {
		$scope.politicians = data.data;
	});

	$scope.flipflopCreate = function() {
		// get data
		var data = {
			title: $('#submit__title').val(),
			summary: $('#submit__summary').val(),
			flip: $('#submit__flip').val(),
			flip_source: $('#submit__flip-source').val(),
			flop: $('#submit__flop').val(),
			flop_source: $('#submit__flop-source').val(),
			politician: $('#submit__politician-select').val()
		};

		FlipFlopsApiSvc.post(data).then(function(data){
			if (data) {
				$location.path('/');
				$scope.$apply();
			}
		});
	};

	$scope.getFullName = function(politician) {
		return politician.first_name + ' ' + politician.last_name;
	};
	
	// $scope.flipflopDestroy = function(id) {
		
	// };
};