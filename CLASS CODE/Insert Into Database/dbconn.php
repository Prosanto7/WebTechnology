<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "university";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successfull";
}
?>