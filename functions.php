<?php

// pass-by-value by pass-by-refernence 

function passByValue($val){
    $val = $val + 100;
}

// pass by reference using the '&'
function passByReference(&$val){
    $val = $val + 100;
}

$v1  = 12;
$v2 = 34;

passByValue($v1);
passByReference($v2);

var_dump($v1);
var_dump($v2);

// D:\xampp\htdocs\functions.php:19:int 12 >>>  pass by value,
// D:\xampp\htdocs\functions.php:20:int 134 >>> pass by reference. Hands off reference instead of creating new place in the ram. Changing one changes the other


// arrays

function passArrayByValue($arr){
    array_push($arr, "Toaster Strudels");
}

function passArrayByReference(&$arr){
    array_push($arr, "Eggos");
}

$groceries = array("Milk", "Bread", "Cheese");
echo "<hr>";
var_dump($groceries);

passArrayByValue($groceries);
passArrayByReference($groceries);

echo "<hr>";

var_dump($groceries);


function passObjectsByValue($obj){
    $obj->byValue = "New Value added byValue";
}

function passObjectsByReference(&$obj){
    $obj->byReference = "New value added byReference";
}

$myCar = new stdClass();
$myCar->make = "Ford";
$myCar->model = "Focus";

passObjectsByValue($myCar);
passObjectsByReference($myCar);

echo "<hr>";

var_dump($myCar);
?>