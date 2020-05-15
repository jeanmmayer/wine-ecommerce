<div class="container products-container">
    <div class="page-title">
        <h3>
            Editar Produto #{{ product.id }}
            <button
                class="btn-default"
                ng-click="redirect('products')"
            >

                <i class="fa fa-chevron-left"></i> Voltar
            </button>
        </h3>
        <hr>
    </div>
    <form class="form" ng-submit="save()">
        <div class="input-container">
            <div>
                Nome
            </div>
            <input
                ng-model="product.name"
                type="text"
                placeholder="Nome"
                required
            />
        </div>
        <div class="input-container">
            <div>
                Tipo de produto
            </div>
            <select ng-model="product.id_type" required>
                <option value="" disabled selected>
                    Selecione um tipo
                </option>
                <option ng-repeat="t in productTypes" value="{{ t.id }}">
                    {{ t.name }}
                </option>
            </select>
        </div>
        <div class="input-container">
            <div>
                Descrição
            </div>
            <textarea
                ng-model="product.description"
                rows="5"
                required
            ></textarea>
        </div>
        <div class="input-container">
            <div>
                Peso
            </div>
            <input
                ng-model="product.weight"
                type="text"
                placeholder="Peso em kg"
                money-mask
                money-mask-prepend="kg"
                required
            />
        </div>
        <div class="input-container">
            <div>
                Preço
            </div>

            <input
                ng-model="product.price"
                type="text"
                placeholder="Preço em R$"
                money-mask
                money-mask-prepend="R$"
                required
            />
        </div>
        <div class="text-center">
            <button class="btn btn-success" type="submit">
                <i class="fa fa-save"></i> Salvar
            </button>
        </div>
    </form>
</div>