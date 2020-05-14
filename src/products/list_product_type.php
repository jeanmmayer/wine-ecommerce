<?php

include "../bootstrap.php";

$con = openCon();

$sql = "
    SELECT
        id,
        name
    FROM
        product_type
    WHERE
        status = 1
";

echo json_encode(listingQuery($con, $sql));

closeCon($con);