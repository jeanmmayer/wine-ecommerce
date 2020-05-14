app.factory('orders', function($http) {

    var list = function(page) {
        return $http({
            method:"POST",
            data: "page=" + page,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/orders/list.php",
        }).then(function(result) {
            return result.data;
        });
    };

	var register = function(data) {
        return $http({
            method:"POST",
            data: data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/orders/new.php",
        }).then(function(result) {
            return result;
        });
	};

	var remove = function(data) {
        return $http({
            method:"POST",
            data: 'id=' + data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/orders/remove.php",
        }).then(function(result) {
            return result;
        });
	};

    return {
		list: list,
		register: register,
		remove: remove
    };
});
