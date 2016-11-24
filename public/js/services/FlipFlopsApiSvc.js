module.exports = function($http) {
	var FlipFlopsApiSvc = function() {
		var post = function(data) {
			// $.ajax to post data to api/store
			$.ajax('api/flipflop', {
				method: 'POST',
				data: data
			}).then(function(data) {
				console.log(data);
			});
		};

		var destroy = function() {
			//  $.ajax to DELETE data to api/destroy
			console.log('FlipFlopsApiSvc.js: Line 5 -- deleted flipflop data');
		};

		return {
			post: post,
			destroy: destroy
		};
		
	};

	return new FlipFlopsApiSvc();
};