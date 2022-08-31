<?php 

require('dbconn.php');

if(isset($_POST['bookid']) && isset($_POST['carid'])) {
    $bookid = $_POST['bookid'];
    $carid = $_POST['carid'];
    
    $sql = "INSERT INTO booking VALUES ($bookid, $carid);";

    if ($connection->query($sql)) {
        echo "Car ID ".$carid." Booked Successfully<br>";
    } else {
        echo "Booking Failed<br>";
    }

}

?>