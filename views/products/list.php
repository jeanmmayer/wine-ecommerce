<table>
    <tr>
        <td>ID</td>
        <td>Tipo</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Peso</td>
        <td>Preço</td>
        <td></td>
    </tr>
    <tr ng-repeat="p in products">
        <td>{{ p.id }}</td>
        <td>{{ p.type_name }}</td>
        <td>{{ p.name }}</td>
        <td>{{ p.description }}</td>
        <td>{{ p.weight }}</td>
        <td>{{ p.price }}</td>
        <td>
            <button ng-click="editProduct(p.id)">Editar</button>
            <button ng-click="removeProduct(p.id)">Excluir</button>
        </td>
    </tr>
</table>

<ul>
    <li >
        {{ item.id }}
    </li>
</ul>

<a href="#!/products/new"> cadastra produto </a>

<a href="#!/products/edit"> edita produto </a>


<a href="#!/orders"> lista pedidos </a>