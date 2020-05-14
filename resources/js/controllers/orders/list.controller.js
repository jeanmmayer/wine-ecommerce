app.controller('listOrdersController', [
	"orders",
	"$scope",
	"$location",
	function(
		orders,
		$scope,
		$location
	) {

	$scope.orders = {};
	$scope.page = 0;

	$scope.listOrders = function(page) {
		var prod = orders.list(page);
		prod.then(function(result) {
			$scope.orders = result;
		}, function(error) {
			// erro ao listar
		});
	};

	$scope.listOrders($scope.page);

}]);