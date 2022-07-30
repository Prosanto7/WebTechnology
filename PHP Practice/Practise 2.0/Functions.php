<?php
function basic() {
    echo "This is basic function.<br>";
}

function parameterisedFunction($a, $b) {
    $count = 0;
    for ($i = $a; $i <= $b; $i++) {
        $flag = 0; 
        for ($j = 2; $j < $i; $j++) {
            if (($i % $j) == 0) {
                $flag = 1;
            }
        }
        if ($flag == 0) {
            echo $i."<br>";
            global $count;
            $count++;
        }
    }

    echo "Total Prime Numbers ".$count."<br>";
}

function bothFunction($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
       
    }
}

basic();
parameterisedFunction(10, 50);
bothFunction(30, 50);
?>