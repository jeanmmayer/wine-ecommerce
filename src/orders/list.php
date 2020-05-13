<?php

include "conn/connection.php";

$conn = openConn();

if ($result = $mysqli -> query("SELECT * FROM orders")) {
    error_log(print_r($result->num_rows, true));

    // Free result set
    // $result->free_result();
}