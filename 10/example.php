<?php
$array = [];
var_dump(empty($array));

$array = new ArrayObject();
var_dump(empty($array));        // outputs bool(false)
