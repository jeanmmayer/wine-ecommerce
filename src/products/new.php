<?php

include "../bootstrap.php";

$con = openCon();

$sql = generateSql();

error_log($sql);

if(isset($_POST['id'])) {
    echo json_encode(operationQuery($con, $sql));
} else {
    echo json_encode(insertionQuery($con, $sql));
}

function generateSql() {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $weight = isset($_POST['weight']) ? $_POST['weight'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $id_type = isset($_POST['id_type']) ? $_POST['id_type'] : '';

    if($id = isset($_POST['id'])) {
        return "
            UPDATE
                products
            SET
                name = '$name',
                description = '$description',
                weight = $weight,
                price = $price,
                id_type = $id_type,
                image = '$image'
            WHERE
                id = $id
        ";
    } else {
        return "
        INSERT INTO
            products (
                name,
                description,
                weight,
                price,
                image,
                id_type,
                status
            ) VALUES (
                '$name',
                '$description',
                $weight,
                $price,
                '$image',
                $id_type,
                1
            )
        ";
    }
}