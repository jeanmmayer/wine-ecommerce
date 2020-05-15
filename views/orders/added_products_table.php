<table class="products-table" ng-if="productsAdded.length">
    <thead>
        <tr>
            <td> ID </td>
            <td> Tipo </td>
            <td> Nome </td>
            <td> Peso (KG) </td>
            <td> Preço (R$) </td>
            <td> Quantidade </td>
            <td> Valor Parcial</td>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="p in productsAdded">

            <td>#{{ p.product.id }} </td>
            <td>{{ p.product.type_name }}</td>
            <td>
                <div class="prod-name">
                    {{ p.product.name }}
                </div>
            </td>
            <td>{{ p.product.weight }}</td>
            <td>{{ p.product.price }}</td>
            <td>{{ p.quantity }}</td>
            <td> {{ calculateIndividualPrice(p.product.price, p.quantity) }} </td>
        </tr>
    </tbody>
</table>