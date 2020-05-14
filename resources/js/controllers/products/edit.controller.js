app.controller('editProductController', [
	"products",
	"$scope",
	"$location",
	function(
		products,
		$scope,
		$location
	) {

	$scope.product = {};
	$scope.productTypes = {};

	$scope.load = function() {
		var request = products.load();
		request.then(function(response) {
			if(!response.id) {
				$location.url("prospeccao-modelos-whats");
				return;
			};
		});
	};

	$scope.loadProductType = function() {
		var request = products.listProductType();
		request.then(function(response) {
			$scope.productTypes = response;
			console.log(response);
		});
	};

	$scope.load();
	$scope.loadProductType();

}]);