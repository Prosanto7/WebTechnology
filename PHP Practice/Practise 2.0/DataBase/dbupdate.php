<?php
    include('dbconn.php');

    $sql = "UPDATE department SET AGE = 99 WHERE AGE =  23";

    if ($conn->query($sql)) {
        echo "SQL Sucessfull";
    } else {
        echo "SQL Unsucessfull";
    }
?>