<?php

function getLength($array) {
    $count = 0;

    foreach($array as $value) {
        $count++;
    }

    return $count;
}

function printAverage($array) {
    $sum = 0;

    foreach($array as $value) {
        $sum = $sum + $value;
    }

    $average = $sum / count($array);

    echo "Average is ".$average."<br>";
}


function printMedian($array) {
    sort($array);

    $arrayLength = getLength($array);

    if ($arrayLength % 2 == 0) {
        $median = ($array[($arrayLength / 2) - 1] + $array[(($arrayLength/2) + 1 ) - 1]) / 2;
    } else {
        $median = $array[(($arrayLength + 1) / 2) - 1];
    }
    echo "Median is ".$median."<br>";
}

function printArray($array) {
    echo "Array Values<br><br>";
    foreach($array as $value) {
        echo $value."<br>";
    }
    echo "<br>";
}

$array = array(11,2,13,4,35,66,71,29,180,34);

printArray($array);
printAverage($array);
printMedian($array);
?>