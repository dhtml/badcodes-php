<?php
// connect to mysql
$connection = new mysqli('localhost', 'admin', 'pass', 'testdb');

// create table of 400 columns
$query = 'CREATE TABLE `test`(`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT';
for ($col = 0; $col < 400; $col++) {
$query .= ", `col$col` CHAR(10) NOT NULL";
}
$query .= ');';
$connection->query($query);

// write 2 million rows
for ($row = 0; $row < 2000000; $row++) {
$query = "INSERT INTO `test` VALUES ($row";
for ($col = 0; $col < 400; $col++) {
$query .= ', ' . mt_rand(1000000000, 9999999999);
}
$query .= ')';
$connection->query($query);
}