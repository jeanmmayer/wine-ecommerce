<?php

include "../bootstrap.php";

$con = openCon();

$id = $_POST['id'];

$sql = "
    SELECT
        p.id,
        p.name,
        p.description,
        p.weight,
        p.price,
        p.image,
        p.id_type,
        t.name type_name
    FROM
        products p
    LEFT JOIN
        product_type t ON t.id = p.id_type
    WHERE
        p.id = $id
    ";

echo json_encode(listingQuery($con, $sql));