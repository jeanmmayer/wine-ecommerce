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
			$scope.product = response;
			if(!response.id) {
				$scope.redirect("#!/products")
			};
		});
	};

	$scope.loadProductType = function() {
		var request = products.listProductType();
		request.then(function(response) {
			$scope.productTypes = response;
		});
	};

	$scope.save = function() {
		var params = "id=" + $scope.product.id;
		params += "&name=" + $scope.product.name;
		params += "&id_type=" + $scope.product.id_type;
		params += "&description=" + $scope.product.description;
		params += "&weight=" + $scope.product.weight;
		params += "&price=" + $scope.product.price;
		params += "&image=";

		var request = products.register(params);
		request.then(function(response) {
			$scope.redirect('#!/products');
		});
	};

	$scope.load();
	$scope.loadProductType();

}]);