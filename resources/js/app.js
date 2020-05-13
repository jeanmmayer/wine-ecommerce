var app = angular.module(
	'baseApp', [
		'ngRoute'
	]
);

app.config(function($routeProvider) {
    $routeProvider
        .when('/products', {
            templateUrl: 'views/products/list.php',
            controller: 'listProductsController'
        }).when('/products/new', {
            templateUrl: 'views/products/new.php',
            controller: 'newProductController'
        }).when('/products/edit', {
            templateUrl: 'views/products/edit.php',
            controller: 'editProductController'
        }).when('/orders', {
            templateUrl: 'views/orders/list.php',
            controller: 'listOrdersController'
		}).otherwise({ redirectTo: '/products' })
});

