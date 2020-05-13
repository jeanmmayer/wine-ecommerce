app.factory('products', function($http) {

    var id_edit = "";

    var list = function(page) {
        return $http({
            method:"POST",
            data: "page=" + page,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/products/list.php",
        }).then(function(result) {
            return result.data;
        });
	};

	var register = function(data) {
        return $http({
            method:"POST",
            data: data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/products/new.php",
        }).then(function(result) {
            return result;
        });
	};

	var load = function() {
        return $http({
            method:"POST",
            data: "id=" + id_edit,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/products/load.php",
        }).then(function(result) {
            return result;
        });
	};

	var setIdEdit = function(id) {
		id_edit = id;
	};

	var remove = function(data) {
        return $http({
            method:"POST",
            data: data,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'} ,
            url: "src/products/remove.php",
        }).then(function(result) {
            return result;
        });
	};

    return {
		list: list,
		register: register,
		load: load,
		setIdEdit: setIdEdit,
		remove: remove
    };
});
