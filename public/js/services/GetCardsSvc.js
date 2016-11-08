// GetCardsSvc will create all the cards
module.exports = function($http, CardFcty) {
	var getCards = function() {
		var cards = [];
		
		// it needs to get the data
		$http.get('/api/index').success(function(data) {
			console.log('GetCardsSvc.js: Line 8 -- data:');
			console.dir(data);

			for(var i = 0; i < data.length; i++) {
				cards.push(CardFcty.create(data[i]));
			}
		});

		return cards;
	};

	return {
		getCards: getCards
	};
};