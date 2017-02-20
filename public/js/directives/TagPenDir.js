module.exports = function(GetTagsSvc) {
	return {
		restrict: 'E',
		replace: true, // Replace with the template below
		scope: {
			filters:"="
		},
		link: function(scope, element, attrs) {
			scope.buttons = GetTagsSvc.getTags();

			// [
			// 	{
			// 		value: 'all',
			// 		on: false,
			// 		id: 1
			// 	},
			// 	{
			// 		value: 'buidings',
			// 		on: false,
			// 		id: 2
			// 	},
			// 	{
			// 		value: 'design',
			// 		on: false,
			// 		id: 3
			// 	},
			// 	{
			// 		value: 'architecture',
			// 		on: false,
			// 		id: 4
			// 	}
			// ]

			scope.toggleButton = function(button) {
				button.on = !button.on;
				
				// console.log('TagPenDir.js: Line 41');
				// console.dir(
				// 	scope.buttons.filter(function(obj){
				// 		return obj.on === true;
				// 	})
				// );
				
				scope.filters = [];

				angular.forEach(
					scope.buttons.filter(function(obj){
						return obj.on === true;
					}),
					function(value, key) {
						this.push(value.value);
					},
					scope.filters
				);
			};			
		},
		templateUrl: '/js/directives/tagPen.html' // See below
	};
};