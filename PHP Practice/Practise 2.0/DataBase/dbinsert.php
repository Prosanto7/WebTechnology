<?php
    include('dbconn.php');

    // $sql = "CREATE TABLE department (
    //     ID INT(6),
    //     STUDENTNAME VARCHAR(20),
    //     AGE INT(6),
    //     HOMEADRRESS VARCHAR(20),

    //     PRIMARY KEY (ID)
    // )";

    $sql = "INSERT INTO department VALUES (14, 'Prosanto', 23, 'Brahmanbaria')";

    if($conn->query($sql)) {
        echo "SQL Sucessfull";
    } else {
        echo "SQL Unsucessfull";
    }
?>