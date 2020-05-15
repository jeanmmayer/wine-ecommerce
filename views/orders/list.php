<div class="container orders-container">
    <div class="page-title">
        <h3>
            Pedidos
            <button
                class="btn-default"
                ng-click="redirect('orders/new')"
            >

                <i class="fa fa-plus"></i> Realizar Venda
            </button>
        </h3>
        <hr>
    </div>

    <div class="empty-data" ng-if="!orders.length">
        Não há pedidos registrados.
    </div>
    <table class="orders-table" ng-if="orders.length">
        <thead>
            <tr>
                <td>ID</td>
                <td>Cliente</td>
                <td>Quantidade / Produtos</td>
                <td>Distância (km)</td>
                <td>Frete (R$)</td>
                <td>Preço Total (R$)</td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="o in orders">
                <td>#{{ o.id }}</td>
                <td>{{ o.customer }}</td>
                <td>
                    <table>
                        <tr ng-repeat="p in o.products">
                            <td>
                                <strong>{{ p.quantity }}</strong>
                            </td>
                            <td>
                                {{ p.name }}
                            </td>
                        </tr>
                    </table>
                </td>
                <td>{{ o.distance }}</td>
                <td>{{ o.freight }}</td>
                <td>{{ o.value }}</td>
            </tr>
        </tbody>
    </table>
</div>