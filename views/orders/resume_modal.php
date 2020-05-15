<div class="modal-outer" ng-if="showResumeModal">
    <div class="modal-container">
        <div class="modal-header">
            Resumo do Pedido
        </div>
        <div class="modal-content">
            Todos os valores aqui
        </div>
        <div class="modal-btn-container">
            <button class="btn" ng-click="showResumeModal = false">
                <i class="fa fa-close"></i> Cancelar
            </button>
            <button class="btn btn-default" ng-click="save()">
                <i class="fa fa-plus"></i> Finalizar
            </button>
        </div>
    </div>
</div>
