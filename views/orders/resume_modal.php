<div class="modal-outer" ng-if="showResumeModal">
    <div class="modal-container resume-modal">
        <div class="modal-header">
            Resumo do Pedido
        </div>
        <div class="modal-content">
            <div>
                <strong> Cliente: </strong> {{ resume.customer }}
            </div>
            <div>
                <strong> Distância: </strong> {{ resume.distance }}
            </div>
            <?php include "added_products_table.php" ?>
            <table class="values-table">
                <tr>
                    <td> Valor total dos produtos: </td>
                    <td> R${{ resume.calcs.productsValue }} </td>
                </tr>
                <tr>
                    <td> Valor do frete: </td>
                    <td> R${{ resume.calcs.freightTotal }} </td>
                </tr>
                <tr class="highlight-tr">
                    <td> Valor total do pedido: </td>
                    <td> R${{ resume.calcs.total }} </td>
                </tr>
            </table>
        </div>
        <div class="modal-btn-container">
            <button class="btn" ng-click="cancelResume()">
                <i class="fa fa-close"></i> Cancelar
            </button>
            <button class="btn btn-success" ng-click="save()">
                <i class="fa fa-check"></i> Finalizar
            </button>
        </div>
    </div>
</div>
