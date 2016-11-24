module.exports = function($http) {
	var get = function() {
		return $http.get('/api/politician');
	};

	return {
		// returns a promise
		get: get
	};
};