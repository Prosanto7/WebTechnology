<?php
    $globalVariable1 = 10;
    $globalVariable2 = 100;
    $globalVariable3 = 1000; 

    function printGlobal() {
        echo $GLOBALS['globalVariable1']."<br>";
        echo $GLOBALS['globalVariable2']."<br>";
        echo $GLOBALS['globalVariable3']."<br>";
    }

    printGlobal();
?>