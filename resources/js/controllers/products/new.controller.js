app.controller('newProductController', [
	"products",
	"$scope",
	"$location",
	function(
		products,
		$scope,
		$location
	) {

	$scope.productTypes = {};

	$scope.loadProductType = function() {
		var request = products.listProductType();
		request.then(function(response) {
			$scope.productTypes = response;
		});
	};

	$scope.save = function() {
		var params = "name=" + $scope.name;
		params += "&id_type=" + $scope.id_type;
		params += "&description=" + $scope.description;
		params += "&weight=" + $scope.weight;
		params += "&price=" + $scope.price;
		params += "&image=";

		var request = products.register(params);
		request.then(function(response) {
			$scope.redirect('#!/products');
		});
	};

	$scope.loadProductType();

}]);