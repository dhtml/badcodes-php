<?php
$_POST = json_decode(file_get_contents('php://input'), true);

// php
/*
$_POST = json_decode(file_get_contents('php://input'), true);
Then when we dump the $_POST array, we see that it correctly includes the POST payload; e.g.:
array(2) { ["a"]=> string(1) "a" ["b"]=> string(1) "b" }
*/