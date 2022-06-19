<?php
$fruits = array("Banana", "Mango", "JackFruit");
echo count($fruits)."<br>";
$hashMap = array("ASH1925005M"=>"Prosanto Deb","ASH1925015M"=>"Siyam","ASH1925009M"=>"Abdullah Alif");
foreach($hashMap as $key => $value) {
    echo $key." ".$value."<br>";
}

$matrix = array(array(1,2,3), array(3,4,5), array(6,7,8));

for ($row=0; $row<3; $row++) {
    for ($col=0; $col<3; $col++) {
        echo $matrix[$row][$col]." ";
    }
    echo "<br>";
}
?>