module.exports = function($scope, GetCardsSvc) {
	$scope.flipToggle = false;

	///**            BEGIN FILTER CODE             **///
	
	$scope.filters = [];

	$scope.filteredCards = function () {
		if($scope.filters.length === 0) {
			return $scope.cards;
		} else {
			return $scope.cards.filter(function (val) {
				return val.tags.some(function(val){
					return $scope.filters.indexOf(val) !== -1;
				});
			});
		}

	};
	
	///**            END FILTER CODE             **///
	


	
	$scope.currentVideo = '';

	// use GetCardsSvc to get the cards
	$scope.cards = GetCardsSvc.getCards();

	$scope.sourceType = 'text';

	$scope.changeCard = function(direction) {
		
		var currIndex = $scope.cards.indexOf($scope.currCard);
		if(direction === 'prev') {
			$scope.currCard = $scope.cards[currIndex - 1];
		}
		if(direction === 'next') {
			$scope.currCard = $scope.cards[currIndex + 1];
		}
	};

	$scope.flipToggle = false;

	// modal directive code
	$scope.modalShown = false;
	$scope.toggleModal = function(cardIndex) {
		$scope.currCard = $scope.cards[cardIndex];
		$scope.modalShown = !$scope.modalShown;
		$scope.currentVideo = $scope.currCard.content;
	};

	$scope.hideModal = function() {
		$scope.modalShown = false;
	};

	$scope.flipCard = function() {
		$scope.flipToggle = !$scope.flipToggle;
		
		$scope.currCard.flipCard();	

		$scope.currentVideo = $scope.currCard.content;	
		// $scope.config.sources = [
		// 	{src: currentVideo}
		// ];
	};
};