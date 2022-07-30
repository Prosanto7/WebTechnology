<?php
    include('dbconn.php');

    $sql = "DELETE FROM department WHERE AGE =  24";

    if ($conn->query($sql)) {
        echo "SQL Sucessfull";
    } else {
        echo "SQL Unsucessfull";
    }
?>