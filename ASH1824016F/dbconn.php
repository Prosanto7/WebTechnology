<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "car_booking";

    $connection = new mysqli($hostname, $username, $password, $databaseName);

    if ($connection->connect_error) {
        echo "Connection Unsuccessfull<br><br><br>";
    } else {
        echo "Connection Successfull<br><br><br>";
    }
?>