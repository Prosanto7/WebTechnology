<?php
include('dbconn.php');

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['mobilenumber'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobilenumber = $_POST['mobilenumber'];

    $sql = "INSERT INTO `information` VALUES ('$id', '$name', '$address', '$mobilenumber')";

    if(mysqli_query($connection, $sql)) {
        echo "Inserted";
    } else {
        echo "Not Inserted";
    }
}
?>

<form action="dbform.php" method="POST">
    Id <input type="text" name="id"><br>
    Name <input type="text" name="  name"><br>
    Address <input type="text" name="address"><br>
    Mobile Number <input type="text" name="mobilenumber"><br>
    <input type="submit" value="submit">
</form>