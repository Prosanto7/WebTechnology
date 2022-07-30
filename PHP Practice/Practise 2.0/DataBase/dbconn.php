<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "university";

    $conn = new mysqli("localhost", "root", "", "university");

    if ($conn->connect_error) {
        echo "Connection Unsucessfull<br>";
    } else {
        echo "Connection Successfull<br>";
    }
?>