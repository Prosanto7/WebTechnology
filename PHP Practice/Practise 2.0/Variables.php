<?php
    $name =  "Prosanto Deb";
    $age = 23;

    echo $name . " " . $age . "<br>"; 

    $globalVariable = 100;

    function printLocal() {
        $localVariable = 100;
        echo "This is Local Variable " . $localVariable . "<br>"; 
    }

    // Opition 01 Using Global Keyword
    function printGlobal() {
        global $globalVariable;
        echo "This is Global Variable Using Global Keyword " . $globalVariable . "<br>"; 
    }

    // Opition 02 Using $GLOBALS['variablename']
    function printGlobal2() {
        echo "This is Global Variable Using GLOBALS['variablename'] " . $GLOBALS['globalVariable'] . "<br>"; 
    }

    // Static Variable
    function printStatic() {
        static $staticVaribale = 10;
        echo "This is static variable " . $staticVaribale . "<br>"; 
        $staticVaribale = $staticVaribale + 100;
    }

    echo "This is Global Variable " . $globalVariable . "<br>"; 

    printLocal();
    printGlobal();
    printGlobal2();

    printStatic();
    printStatic();
    printStatic();
    printStatic();
?>