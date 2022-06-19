<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "exam";

    $connection = new mysqli($hostname, $username, $password, $databaseName);

    if ($connection->connect_error) {
        echo "Connection Unsuccessfull<br>";
    } else {
        echo "Connection Successfull<br>";
    }
?>