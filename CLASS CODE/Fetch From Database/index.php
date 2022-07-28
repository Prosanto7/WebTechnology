<?php
    $connection = mysqli_connect("localhost","root","","university");

    $sql = "INSERT INTO `INFORMATION` VALUES ('1015','PROSANTO','BRAHMANBARIA',01793222825)";

    $query = $connection->query($sql);

    if($query) {
        echo "Successful";
    } else {
        echo "Unsuccessfull";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fetch From Database</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>