<?php
    include('dbconn.php');

    $sql = "SELECT * FROM department WHERE HOMEADRRESS = 'Brahmanbaria'";

    $result = $conn->query($sql);
                                           
    while($row = $result->fetch_assoc()) {
        echo $row['ID']." ".$row['STUDENTNAME']." ".$row['AGE']." ".$row['HOMEADRRESS']."<br>";
    }
?>