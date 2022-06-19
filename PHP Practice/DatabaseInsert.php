<?php
require('DatabaseConnect.php');

    $sql = "INSERT INTO DEPARTMENT VALUES ('1021', 'SE', 70, 'LIBRARY BUILDING')";

    if ($conn->query($sql)) {
        echo "Data Inserted Successfully<br>";
    }
?>