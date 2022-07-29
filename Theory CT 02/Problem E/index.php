<?php

    function getName() {
        if (isset($_POST['userName'])) {
            return $_POST['userName'];
        }
    }

    function getPaymentMethod() {
        if (isset($_POST['payment'])) {
            return $_POST['payment'];
        } 
    }

    function printArray($array) {
        foreach($array as $value) {
            if ($value != "") {
                echo $value."<br>";
            }
        }
        echo "<br>";
    }


    function showValues() {
        echo "Your Name is           : ".getName()."<br><br>";
        echo "Your Products are <br>";
        $products = ["", "", ""];
        $productPrice = 0;

        if (isset($_POST['checkbox1'])) {
            $products[0] = "Four 100-watt light bulbs for TK 200";
            $productPrice =  $productPrice + 200;
        }

        if (isset($_POST['checkbox2'])) {
            $products[1] = "Eight 100-watt light bulbs for TK 400";
            $productPrice =  $productPrice + 400;
        }

        if (isset($_POST['checkbox3'])) {
            $products[2] = "Four 100-watt led bulbs for TK 600";
            $productPrice =  $productPrice + 600;
        }
        printArray($products);
        echo "Your Products Price is : ".$productPrice." TK<br>";
        echo "6% Sales Tax           : ".$productPrice * 0.06." TK<br>";
        echo "Total Payment          : ".$productPrice + $productPrice * 0.06." TK<br>";
        echo "<br>Your Payment Method is ".getPaymentMethod()."<br>";
    }

    showValues();
?>