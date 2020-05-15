<?php

include "../bootstrap.php";

$con = openCon();

if($id_order = insertOrder($con)) {
    if(insertOrderProducts($id_order, $con)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

function insertOrder($con) {
    $data = json_decode($_POST['data'], true);

    $customer = $data['customer'];
    $distance = $data['distance'];
    $value = $data['calcs']['total'];
    $freight = $data['calcs']['freightTotal'];

    $sql = "
        INSERT INTO
            orders (
                customer,
                distance,
                value,
                freight,
                status
            ) VALUES (
                '$customer',
                $distance,
                $value,
                $freight,
                1
            )
    ";

    $result = insertionQuery($con, $sql);

    return $result['id'];

}

function insertOrderProducts($id_order, $con) {
    $data = json_decode($_POST['data'], true);

    foreach($data['products'] as $prod) {
        $id_product = $prod['product']['id'];
        $quantity = $prod['quantity'];

        $sql = "
            INSERT INTO
                order_product (id_order, id_product, quantity)
            VALUES
                ($id_order, $id_product, $quantity)
         ";

        if(!insertionQuery($con, $sql)) {
            // Trabalhar nas mensagens de erro e retorno ao usuário
            return false;
        }
    }

    return true;
}



closeCon($con);