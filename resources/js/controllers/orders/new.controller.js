app.controller('newOrderController', [
	"products",
	"mathCalcs",
	"$scope",
	"$location",
	function(
		products,
		mathCalcs,
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

		mathCalcs.setProducts($scope.productsAdded);
		mathCalcs.setDistance($scope.distance);

		$scope.resume = {
			"products": $scope.productsAdded,
			"customer": $scope.customer,
			"distance": $scope.distance,
			"total_value": mathCalcs.resumeTotal($scope.distance, $scope.productsAdded),
			"total_weight": mathCalcs.weightTotal($scope.productsAdded),
			"only_freight": mathCalcs.freightTotal($scope.distante, $scope.productsAdded)
		};
	};

	$scope.cancelResume = function() {
		$scope.showResumeModal = false
	};

	$scope.save = function() {

	};

	$scope.calculateIndividualPrice = function(price, quantity) {
		return parseFloat(price * quantity).toFixed(2);
	};

	$scope.listProducts();

}]);