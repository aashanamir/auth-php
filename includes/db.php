<?php

function db_connect() {
    $host = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'employee';
    
    // Create a connection
    $conn =  mysqli_connect($host, $dbUser, $dbPass, $dbName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function close_db($conn) {
    mysqli_close($conn);
}
