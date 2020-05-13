<?php

function openCon() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "wineecommerce";
    $con = new mysqli($host, $user, $pass, $db) or die("Connect failed: %s\n". $conn->error);

    $con->set_charset('utf8mb4');

    return $con;
}

function closeCon($con) {
    $con->close();
}

function executeQuery($con, $query) {

    $result = $con->query($query)->fetch_all(MYSQLI_ASSOC);
    if (!$result) {
        throw new Exception($con->error);
    }

    return $result;
}