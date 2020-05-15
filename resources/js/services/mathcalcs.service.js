app.factory('mathCalcs', function($http) {

    var distance, products;

    var resumeTotal = function() {
        for(var i = 0; i < products.length; i++) {
            totalWeight += products[i].quantity * parseFloat(products[i].product.weight);
            productsValue += products[i].quantity * parseFloat(products[i].product.price);
        }

        return "ok";
    };

    // Peso total de todos os produtos
    var weightTotal = function() {
        let total = 0;

        for(var i = 0; i < products.length; i++) {
            total += products[i].quantity * parseFloat(products[i].product.weight);
        }

        console.log("Peso total: ")

        return total;
    };

    // Valor total do frete
    var freightTotal = function() {
        if(distance < 100) {

        }
    };

    // Valor da soma dos preços dos produtos
    var productsTotal = function() {
        let total = 0;

        for(var i = 0; i < products.length; i++) {
            total += products[i].quantity * parseFloat(products[i].product.weight);
        }

        console.log("Valor total dos produtos: " + total);

        return total;
    };

    var setProducts = function(p) {
        products = p;
    };

    var setDistance = function(d) {
        distance = d;
    };

    return {
		resumeTotal: resumeTotal,
		weightTotal: weightTotal,
        freightTotal: freightTotal,
        setDistance: setDistance,
        setProducts: setProducts
    };
});
