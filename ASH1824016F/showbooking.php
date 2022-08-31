<?php 

require('dbconn.php');

$sql = "SELECT * FROM car;";

    $result = $connection->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo $row['id']." ".$row['vehicle_title']." ".$row['brand']." ".$row['model_year']." ".$row['price']."<br>";
    } 
?>