module.exports = function($scope, GetPoliticiansSvc) {
	var politiciansPromise = GetPoliticiansSvc.get();
	politiciansPromise.then(function(data) {
		$scope.politicians = data.data;
	});

	$scope.tagList = function(tags) {
		tagNames = tags.map(function(val) {return val.tag;});
		return tagNames.join(' - ');

	};
	
};