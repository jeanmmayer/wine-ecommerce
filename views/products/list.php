<div class="container products-container">
    <button
        class="btn-default"
        ng-click="redirect('products/new')"
    >

        <i class="fa fa-plus"></i> Cadastrar Produto
    </button>

    <table class="products-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Tipo</td>
                <td>Nome</td>
                <td>Peso (KG)</td>
                <td>Preço (R$)</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="p in products">
                <td>{{ p.id }}</td>
                <td>{{ p.type_name }}</td>
                <td>{{ p.name }}</td>
                <td>{{ p.weight }}</td>
                <td>{{ p.price }}</td>
                <td>
                    <button ng-click="editProduct(p.id)">Editar</button>
                    <button ng-click="removeProduct(p.id)">Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>