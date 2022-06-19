<?php
    require('DatabaseConnect.php');

    $sql = "SELECT * FROM DEPARTMENT";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo $row["dept_id"]." ".$row["dept_name"]." ".$row["student_quantity"]." ".$row["location"]."<br>";
    }
?>