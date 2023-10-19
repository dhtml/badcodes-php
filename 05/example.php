<?php
// connect to mysql
$connection = new mysqli('localhost', 'username', 'password', 'database');
echo "Before: " . memory_get_peak_usage() . "\n";

$res = $connection->query('SELECT `x`,`y` FROM `test` LIMIT 1');
echo "Limit 1: " . memory_get_peak_usage() . "\n";

$res = $connection->query('SELECT `x`,`y` FROM `test` LIMIT 10000');
echo "Limit 10000: " . memory_get_peak_usage() . "\n";

/*
 * output
Before:  224704
Limit 1: 224704
Limit 10000: 224704
 */