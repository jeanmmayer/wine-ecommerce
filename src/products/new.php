<?php

include "../bootstrap.php";

$con = openCon();

$name = $_POST['name'];
$description = $_POST['description'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$image = $_POST['image'];
$id_type = $_POST['id_type'];

$sql = "
    INSERT INTO
        products (
            name,
            description,
            weight,
            price,
            image,
            id_type
        ) VALUES (
            '$name',
            '$description',
            $weight,
            $price,
            '$image',
            $id_type
    ";

error_log($sql);

echo json_encode(insertionQuery($con, $sql));