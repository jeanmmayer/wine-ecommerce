app.controller('newOrderController', [
	"products",
	"orders",
	"mathCalcs",
	"$scope",
	"$location",
	function(
		products,
		orders,
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
			"calcs": mathCalcs.resumeCalcs()
		};
	};

	$scope.cancelResume = function() {
		$scope.showResumeModal = false
	};

	$scope.save = function() {
		var prod = orders.register(JSON.stringify($scope.resume));
		prod.then(function(result) {
			$scope.showResumeModal = false;
			$scope.redirect('orders');
		}, function() {
		});
	};

	$scope.calculateIndividualPrice = function(price, quantity) {
		return parseFloat(price * quantity).toFixed(2);
	};

	$scope.listProducts();

}]);