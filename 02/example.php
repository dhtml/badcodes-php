<?php
function fetchRecordFromStorage($key)
{
    if ($key === "employees") {
        return ["keyShouldBeSet" => 1];
    }
    if ($key === "department") {
        return ["keyShouldBeSet" => null];
    }
}

$data = fetchRecordFromStorage("employees");
if (!isset($data['keyShouldBeSet'])) {
    echo "Employee Key is not set\n";
} else {
    echo "Employee Key is set\n";
}


$data = fetchRecordFromStorage("department");
if (!isset($data['keyShouldBeSet'])) {
    echo "Department key is not set\n";
} else {
    echo "Department key is set\n";
}

$data = fetchRecordFromStorage("students");
if (!isset($data['keyShouldBeSet'])) {
    echo "Students key is not set\n";
} else {
    echo "Students key is set\n";
}
