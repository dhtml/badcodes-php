<?php
$totalNumberToFetch = 10000;
$portionSize = 100; //chunk size

for ($i = 0; $i <= ceil($totalNumberToFetch / $portionSize); $i++) {
    $limitFrom = $portionSize * $i;

    //retrieve 100 records at a go
    $res = $connection->query(
        "SELECT `x`,`y` FROM `test` LIMIT $limitFrom, $portionSize");
}