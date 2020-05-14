app.controller('newProductController', [
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

	$scope.loadProductType = function() {
		var request = products.listProductType();
		request.then(function(response) {
			$scope.productTypes = response;
		});
	};

	$scope.loadProductType();

}]);