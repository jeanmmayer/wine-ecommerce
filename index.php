<!DOCTYPE html>
<html lang="pt-br" ng-app="baseApp">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="resources/images/favicon.png">

        <!-- Defining the viewport for width adaptive purpose -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SoftWine - SoftExpert</title>

        <!-- App css -->
        <link href="resources/css/libs/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="resources/css/bundle.css" rel="stylesheet">
    </head>

    <body ng-controller="mainController">

        <?php include_once "views/partials/header.php"; ?>

        <ng-view></ng-view>

        <?php include_once "views/partials/footer.php"; ?>

        <!-- angular scripts -->
        <script src="node_modules/angular/angular.min.js"></script>
        <script src="node_modules/angular-route/angular-route.min.js"></script>
        <script src="node_modules/angular-money-mask/rw-money-mask.min.js"></script>

        <!-- application scripts -->
        <script src="resources/js/app.js"></script>
        <script src="resources/js/main.js"></script>

        <!-- services -->
        <script src="resources/js/services/products.service.js"></script>
        <script src="resources/js/services/orders.service.js"></script>

        <!-- controllers -->
        <script src="resources/js/controllers/orders/list.controller.js"></script>
        <script src="resources/js/controllers/orders/new.controller.js"></script>
        <script src="resources/js/controllers/products/list.controller.js"></script>
        <script src="resources/js/controllers/products/new.controller.js"></script>
        <script src="resources/js/controllers/products/edit.controller.js"></script>

        <!-- plugins (all self-made) -->
        <script src="resources/js/plugins/confirm.js"></script>

    </body>

</html>

