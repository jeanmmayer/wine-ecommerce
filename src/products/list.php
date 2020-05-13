<?php

include "../bootstrap.php";

$con = openCon();

$page = resolvePage($_POST['page']);

$sql = "SELECT * FROM products LIMIT $page, 10";

echo json_encode(executeQuery($con, $sql));