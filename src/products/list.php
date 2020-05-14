<?php

include "../bootstrap.php";

$con = openCon();

$page = resolvePage($_POST['page']);

$sql = "
    SELECT
        p.id,
        p.name,
        p.description,
        p.weight,
        p.price,
        p.image,
        t.name type_name
    FROM
        products p
    LEFT JOIN
        product_type t ON t.id = p.id_type
    WHERE
        p.status = 1";

    if(!empty($_POST['page'])) {
        $sql .= " LIMIT $page, 10";
    }

echo json_encode(listingQuery($con, $sql));

closeCon($con);