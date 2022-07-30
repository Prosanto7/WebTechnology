<?php
// Normal Function
function shows() {
    echo "This is Prosanto<br>";
}

shows();

// Annonymous Function
$show = function() {
    echo "This is Prosanto Annonymous<br>";
};

$show();

// Annonymous With Parameter
$show = function($a, $b) {
    echo $a + $b."<br>";
};

$show(2,3);

// Annonymous With Return Type
$show = function($a, $b) {
    return $a + $b;
};

echo $show(12,3)."<br>";


// Closure Function
$variable = 20;

$show = function() use ($variable) {
    echo "This is annonymous using closure ".$variable."<br>";
};

$show();


// Call Back Function

function get5(){
    return 5;
}

function get10() {
    return 10;
}

function add($a, $b) {
    echo $a() + $b()."<br>";
}

add("get5", "get10");

function exclaim($str) {
    return $str."!";
}

function ques($str) {
    return $str."?";
}


function show($str, $fnc) {
    echo $fnc($str)."<br>";
}

show("This is prosanto", function ($str) {
    return $str."!";
});
show("This is prosanto", "ques");

function a(){
    return "P";
}

function sh($a) {
    echo "B".$a()."<br>";
}

sh("a");

sh(function(){
    return "S";
});

?>