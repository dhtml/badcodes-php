<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo("Value => $value\n");
}

echo "\n\nFinal Result\n:";
var_dump($arr);
