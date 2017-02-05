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
			sourceType: $('input[name="submit__source-type"]:checked').val(),
			flip: $('input[name="submit__flip"]').val(),
			flop: $('input[name="submit__flop"]').val(),
			politician: $scope.selectedPolitician.id
		};

		// if type is text, also include flipText and flopText
		if(data.sourceType == 'text') {
			data.flip_source = $('#submit__flip-source').val();
			data.flop_source = $('#submit__flop-source').val();
			data.flip = $('textarea[name="submit__flip"]').val();
			data.flop = $('textarea[name="submit__flop"]').val();
			data.flop_source = $('#submit__flop-source').val();
		}

		FlipFlopsApiSvc.post(data).then(function(data){
			if (data) {
				$location.path('/');
			}
		});
	};

	// handle sourceType radio buttons on change
	$scope.type = 'text';
	$scope.typeText = 'Text';
	
	$scope.changeForm = function(type) {
		switch (type) {
			case 'text':
				$scope.typeText = 'Text';
				break;
			case 'youtube':
				$scope.typeText = 'Youtube';
				break;
			case 'video_url':
				$scope.typeText = 'Video';
				break;
			default:
				// default code block
		}
		
	};

	// for ui-bootstrap typeahead, uib-typeahead checks if selected Politician is null (politicians aren't loaded yet), and gives an empty space if it is
	$scope.selectedPolitician = null;
};