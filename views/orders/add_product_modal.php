<div class="modal-outer" ng-if="showAddProductModal">
    <div class="modal-container">
        <div class="modal-header">
            Adicionar Produto ao Pedido
        </div>
        <div class="modal-content">
            <div class="form">
                <div class="input-container">
                    <div>
                        Produto
                    </div>
                    <select ng-model="selecting.product" required>
                        <option value="" disabled selected>
                            Selecione um produto
                        </option>
                        <option ng-repeat="p in products" value="{{ p }}">
                            {{ p.name }}
                        </option>
                    </select>
                </div>
                <div class="input-container">
                    <div>
                        Quantidade
                    </div>
                    <input
                        ng-model="selecting.quantity"
                        type="number"
                        required
                    />
                </div>
            </div>
        </div>
        <div class="modal-btn-container">
            <button class="btn" ng-click="cancelAddProduct()">
                <i class="fa fa-close"></i> Cancelar
            </button>
            <button class="btn btn-default" ng-click="addProduct()">
                <i class="fa fa-plus"></i> Adicionar
            </button>
        </div>
    </div>
</div>
