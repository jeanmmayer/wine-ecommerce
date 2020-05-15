app.factory('mathCalcs', function($http) {

    var distance, products;

    var resumeCalcs = function() {
        let totalWeight = 0;
        let productsValue = 0;
        let freightTotal = 0;

        // Soma o peso e o preço dos produtos
        for(var i = 0; i < products.length; i++) {
            totalWeight += products[i].quantity * parseFloat(products[i].product.weight);
            productsValue += products[i].quantity * parseFloat(products[i].product.price);
        }

        // Calcula o valor total to frete, considerando a distância
        freightTotal = this.freightTotal(totalWeight);

        return {
            "productsValue": parseFloat(productsValue).toFixed(2),
            "freightTotal": parseFloat(freightTotal).toFixed(2),
            "total": parseFloat((productsValue + freightTotal)).toFixed(2)
        };
    };

    // Valor total do frete
    var freightTotal = function(weight) {
        if(distance < 100 && distance > 0) {
            return weight * 5;
        }

        if(distance > 0) {
            return (weight * distance) / 100;
        }

        return 0;
    };

    var setProducts = function(p) {
        products = p;
    };

    var setDistance = function(d) {
        distance = d;
    };

    return {
		resumeCalcs: resumeCalcs,
        freightTotal: freightTotal,
        setDistance: setDistance,
        setProducts: setProducts
    };
});
