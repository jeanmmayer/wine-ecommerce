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
	$scope.selecting = {
		"product": '',
		"quantity": 0
	};
	$scope.showAddProductModal = false;
	$scope.showResumeModal = false;

	$scope.listProducts = function() {
		var prod = products.list();
		prod.then(function(result) {
			$scope.products = result;
		});
	};

	$scope.cancelAddProduct = function() {
		$scope.showAddProductModal = false;
		$scope.selecting = {
			"product": '',
			"quantity": 0
		};
	};

	$scope.addProduct = function() {
		// Parse string to json
		$scope.selecting.product = JSON.parse($scope.selecting.product);
		$scope.productsAdded.push($scope.selecting);
		$scope.cancelAddProduct();
	};

	$scope.generateResume = function() {
		$scope.showResumeModal = true;
	};

	$scope.save = function() {

	};

	$scope.calculateIndividualPrice = function(price, quantity) {
		return parseFloat(price * quantity).toFixed(2);;
	};

	$scope.listProducts();

}]);