app.controller('listProductsController', [
	"products",
	"orders",
	"$scope",
	"$location",
	function(
		products,
		orders,
		$scope,
		$location
	) {

	$scope.products = {};
	$scope.cart = {};

	$scope.page = 0;

	$scope.listProducts = function(page) {
		var prod = products.list(page);
		prod.then(function(result) {
			$scope.products = result;
		}, function(error) {
			// erro ao listar
		});
	};

	$scope.removeProduct = function(id) {
		var prod = products.remove(id);
		prod.then(function() {
			$scope.listProducts($scope.page);
		}, function(error) {
			// não foi possível remover
		});
	};

	$scope.editProduct = function(id) {
		products.setIdEdit(id);
		$location.url("/products/edit");
	};

	$scope.listProducts($scope.page);
}]);