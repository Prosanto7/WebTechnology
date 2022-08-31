<?php 

require('dbconn.php');

if(isset($_POST['id']) && isset($_POST['cartitle']) && isset($_POST['brand']) && isset($_POST['modelYear']) && isset($_POST['price']) ) {
    $id = $_POST['id'];
    $cartitle = $_POST['cartitle'];
    $brand = $_POST['brand'];
    $model_year = $_POST['modelYear'];
    $price = $_POST['price'];

    $sql = "INSERT INTO car VALUES ($id,'$cartitle','$brand','$model_year',$price);";

    if ($connection->query($sql)) {
        echo "Data Inserted Successfully<br>";
    } else {
        echo "Insertion Failed<br>";
    }

}

?>