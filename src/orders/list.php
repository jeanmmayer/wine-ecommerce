<?php

include "../bootstrap.php";

$con = openCon();

$page = resolvePage($_POST['page']);

$sql = "
    SELECT
        *
    FROM
        orders
    WHERE
        status = 1
    LIMIT $page, 10";

echo json_encode(addProducts($con, listingQuery($con, $sql)));

function addProducts($con, $result) {
    $return = array();
    foreach($result as $key => $val) {
        $val['products'] = getProducts($con, $val['id']);
        $return[$key] = $val;
    }

    return $return;
}

function getProducts($con, $id_order) {
    $sql = "
        SELECT
            op.id_order,
            op.id_product,
            op.quantity,
            p.name
        FROM
            order_product op
        LEFT JOIN
            products p ON p.id = op.id_product
        WHERE
            op.id_order = $id_order
    ";

    return listingQuery($con, $sql);
}

closeCon($con);
