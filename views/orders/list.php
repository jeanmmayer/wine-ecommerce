<div class="container products-container">
    <div class="page-title">
        <h3>
            Pedidos
            <button
                class="btn-default"
                ng-click="redirect('orders/new')"
            >

                <i class="fa fa-plus"></i> Cadastrar
            </button>
        </h3>
        <hr>
    </div>

    <table class="orders-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Cliente</td>
                <td>Distância</td>
                <td>Produtos</td>
                <td>Preço Total</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="p in products">
                <td>#{{ p.id }}</td>
                <td>{{ p.type_name }}</td>
                <td>{{ p.name }}</td>
                <td>{{ p.weight }}</td>
                <td>{{ p.price }}</td>
                <td>
                    <button class="btn" ng-click="editProduct(p.id)"><i class="fa fa-edit"></i></button>
                    <button class="btn" ng-click="removeProduct(p.id)"><i class="fa fa-close"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>