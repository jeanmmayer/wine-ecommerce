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

function listingQuery($con, $query) {
    $result = $con->query($query)->fetch_all(MYSQLI_ASSOC);
    if (!$result) {
        return [];
    }
    return $result;
}

function operationQuery($con, $query) {
    if($con->query($query)) {
        http_response_code(200);
        return ['success' => true];
    } else {
        http_response_code(400);
        return ['success' => false];
    }
}

function insertionQuery($con, $query) {
    if($con->query($query)) {
        http_response_code(200);
        return ['success' => true, 'id' => mysqli_insert_id($con)];
    } else {
        http_response_code(400);
        return ['success' => false];
    }
}