<?php 
    echo "Your Name is " . $_POST['userName'] ."<br><br>";
    echo "Your Selected Products <br>";

    $productPrice = 0;

    echo "<table border = '1px'>";

    if (isset($_POST['checkbox1'])) {
        echo "<tr><td>Four</td> <td>100-watt Light bulbs</td><td> TK 200</td></tr>";
        $productPrice = $productPrice + 200;
    }

    if (isset($_POST['checkbox2'])) {
        echo "<tr><td>Eight</td> <td>100-watt Light bulbs</td><td> TK 400</td></tr>";
        $productPrice = $productPrice + 400;
    }

    if (isset($_POST['checkbox3'])) {
        echo "<tr><td>Four</td> <td>100-watt Led bulbs</td><td> TK 600</td></tr>";
        $productPrice = $productPrice + 600;
    }

    echo "</table><br>";

    if (isset($_POST['payment'])) {
        echo "Payment Method ".$_POST['payment']."<br>";
    }

    echo "Your Amount ".$productPrice."<br>";
    echo "Your Tax ".$productPrice * 0.06."<br>";
    echo "Your Total Price ".$productPrice + $productPrice * 0.06."<br>";
?>