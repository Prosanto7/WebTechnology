<?php
    $x = 123;
    echo var_dump($x)."<br>"; 
    $x = 214.34;
    echo var_dump($x)."<br>";
    $x = "This is a String";
    echo var_dump($x)."<br>";
    $x = false;
    echo var_dump($x)."<br>";
    $x = array("Apple", "Banana", "Mango");
    echo var_dump($x)."<br><br>";

    for ($i = 0; $i < 3; $i++) {
        echo $x[$i]."<br>";
    }

    echo "<br>";

    foreach ($x as $value) {
        echo $value."<br>";
    }

    echo "<br>";

    // Two Dimensional Array
    $x = array(array(10,20,30),array(100,200,300),array(1000,2000,3000));
    
    // Nested For Loop
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $x[$i][$j]." ";
        }
        echo "<br>";
    }

    echo var_dump($x)."<br><br>";

    // Key Value Pair
    $x = array("Prosnato"=>"Apple", "Mamun"=>"Banana", "Alif"=>"Mango");
    
    foreach ($x as $key => $value) {
        echo $key." ".$value."<br>";
    }

    echo var_dump($x)."<br><br>";
?>