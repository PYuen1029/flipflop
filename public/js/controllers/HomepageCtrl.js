module.exports = function($scope, $http, GetCardsSvc) {
	$scope.flipToggle = false;
	// use GetCardsSvc to get the cards
	$scope.cards = GetCardsSvc.getCards();

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
	};

	$scope.hideModal = function() {
		$scope.modalShown = false;
	};

	$scope.flipCard = function() {
		$scope.flipToggle = !$scope.flipToggle;
		
		$scope.currCard.flipCard();	
	};
};