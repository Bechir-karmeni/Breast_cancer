<?php

    // Database connection information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cancer_care";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>