app.controller('mainController', [
	"$scope",
	function(
		$scope
	) {

    $scope.redirect = function(url) {
        window.location.href = "#!/" + url;
    };

}]);