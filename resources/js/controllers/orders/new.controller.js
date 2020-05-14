app.controller('newOrderController', [
	"products",
	"$scope",
	"$location",
	function(
		products,
		$scope,
		$location
	) {

	$scope.productsAdded = [];
	$scope.showModal = false;

	$scope.listProducts = function() {
		var prod = products.list();
		prod.then(function(result) {
			$scope.products = result;
		}, function(error) {
			// erro ao listar
		});
	};

	$scope.openAddProduct = function() {
		$scope.showModal = true;
	};

	$scope.listProducts();

}]);