app.factory('orders', function($http) {

	var email_pesquisa = "";

    var setEmail = function(email) {
        email_pesquisa = email;
	};

	var getEmail = function() {
		return email_pesquisa;
	};

    return {
		setEmail: setEmail,
		getEmail: getEmail
	};
});
