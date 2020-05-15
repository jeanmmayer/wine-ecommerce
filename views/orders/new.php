<?php include_once "add_product_modal.php"; ?>
<?php include_once "resume_modal.php"; ?>

<div class="container orders-container">
    <div class="page-title">
        <h3>
            Realizar Venda
            <button
                class="btn-default"
                ng-click="redirect('orders')"
            >

                <i class="fa fa-chevron-left"></i> Voltar
            </button>
        </h3>
        <hr>
    </div>
    <form class="form" ng-submit="generateResume()">
        <div class="input-container">
            <div>
                Cliente
            </div>
            <input
                ng-model="customer"
                type="text"
                placeholder="Digite o nome do cliente"
                required
            />
        </div>
        <div class="input-container">
            <div>
                Distância
            </div>
            <input
                ng-model="distance"
                type="text"
                money-mask
                money-mask-prepend="km"
                required
            />
        </div>
        <div class="order-products-container">
            <div>
                Produtos
            </div>
            <div ng-if="!productsAdded.length" class="empty-data">
                Não há produtos adicionados a este pedido.
            </div>
            <?php include "added_products_table.php" ?>
        </div>
        <div class="text-center">
            <button class="btn btn-default" type="submit">
                <i class="fa fa-save"></i> Fechar Pedido
            </button>
            <button class="btn" ng-click="showAddProductModal = true" type="button">
                <i class="fa fa-plus"></i> Adicionar Produto
            </button>
        </div>
    </form>
</div>