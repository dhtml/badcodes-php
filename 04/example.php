<?php

class ValueRepository {
    function findByValue($inputValue) {
        $query = "SELECT `x`,`y` FROM `values` WHERE `value`='$inputValue'";
        //$result = $connection->query($query);
        return $query;
    }
}

$valueRepository = new ValueRepository();

$models = [];

$inputValues =  ["1","2","3","4","5","6"];

foreach ($inputValues as $inputValue) {
    $models[] = $valueRepository->findByValue($inputValue);
}

var_dump($models);