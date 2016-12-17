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
			politician: $('#submit__politician-select').val()
		};

		// if type is text, also include flipText and flopText
		if(data.sourceType == 'text') {
			data.push({
				flip_source: $('#submit__flip-source').val(),
				flop_source: $('#submit__flop-source').val()
			});
		}

		console.dir(data);

		FlipFlopsApiSvc.post(data).then(function(data){
			if (data) {
				$location.path('/');
			}
		});
	};

	$scope.getFullName = function(politician) {
		return politician.first_name + ' ' + politician.last_name;
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
};