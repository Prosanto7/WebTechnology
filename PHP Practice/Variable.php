<?php
$globalVariable = 15;
function getVariable() {
    global $globalVariable;
    echo "This is a Global Variable Using global Keyword ".$globalVariable."<br>";
}

getVariable();
echo "This is a Global Variable Using \$GLOBALS['Variable'] Keyword ";
echo $GLOBALS["globalVariable"];
echo "<br>";

function getNumber() {
    static $staticVariable = 0;
    echo "Static Variable Using static Keyword ".$staticVariable."<br>";
    $staticVariable++;
}

getNumber();
getNumber();
getNumber();
getNumber();
?>