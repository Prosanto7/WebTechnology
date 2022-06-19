<?php

function printHeader() {
    echo "Printing An Array<br>";
}

function printArray($array) {
    foreach ($array as $number) {
        echo $number."<br>";
    }
    echo "<br>";
}

function printSum($array) {
    $sum = 0;
    foreach ($array as $number) {
        $sum = $sum + $number;
    }
    return $sum;
}

$array = array(12,-23,34,-453,24,53,-23,-42,4,214,27,-34,4,23,98,-44,66,7,503,6,7,53);
printHeader();
printArray($array);
sort($array);
printArray($array);
echo "Sum of the Array is ".printSum($array);
?>