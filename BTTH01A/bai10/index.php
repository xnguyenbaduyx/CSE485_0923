<?php
function convertToUppercase($arr) {
    $result = [];

    foreach ($arr as $value) {
        if (is_string($value)) {
            $result[] = strtoupper($value);
        } else {
            $result[] = $value;
        }
    }

    return $result;
}

// Áp dụng cho mảng ['1', 'B', 'C', 'E']
$arr1 = ['1', 'b', 'c', 'd'];
$result1 = convertToUppercase($arr1);
print_r($result1);
echo "<br>";
// Áp dụng cho mảng ['a', 0, null, false]
$arr2 = ['a', 0, null, false];
$result2 = convertToUppercase($arr2);
print_r($result2);