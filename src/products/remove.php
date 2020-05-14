<?php

include "../bootstrap.php";

$con = openCon();

$id = $_POST['id'];

$sql = "
    UPDATE
        products
    SET
        status = 0
    WHERE
        id = $id
";

echo json_encode(operationQuery($con, $sql));