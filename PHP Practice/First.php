<?php
$sum = 0;
for($i = 1; $i <= 10; $i++) {
    $num = rand(1,20);
    $numbers[$i] = $num;
    $sum = $sum + $num;
    echo $num;
    echo "<br>";
}

printAverage($sum/10);
printGreaterValues($sum/10, $numbers);

function printAverage($average) {
    echo "Average is ",$average;
}

function printGreaterValues($average, $numbers) {
    for($i = 1; $i <= 10; $i++) {
        if($numbers[$i] > $average) {
            echo $numbers[$i]."<br>";
        }
    }
}

?>