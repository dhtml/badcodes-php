<?php

function modifyArray($myArray) {
    $myArray[]="5";
    return $myArray;
}

$arr = ["2"];
$arr = modifyArray($arr);


var_dump($arr);
