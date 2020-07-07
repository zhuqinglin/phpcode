<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/6/21
 * Time: 12:08 PM
 */




function add(&$arr1, &$arr2, $input) {
    if (!empty($arr2)) {
        $arr2[] = $input;
    } else {
        $arr1[] = $input;
    }
}

function pop(&$arr1, &$arr2) {
    if (empty($arr1) && empty($arr2)) {
        return false;
    }
    if (!empty($arr1)) {
        while (count($arr1) > 1) {
            $temp = array_shift($arr1);
            $arr2[] = $temp;
        }
        return array_shift($arr1);
    }
    if (!empty($arr2)) {
        while (count($arr2) > 1) {
            $temp = array_shift($arr2);
            $arr1[] = $temp;
        }
        return array_shift($arr2);
    }
}

$arr1 = [];
$arr2 = [];

add($arr1, $arr2, 1);
add($arr1, $arr2, 2);
add($arr1, $arr2, 3);
add($arr1, $arr2, 4);

echo pop($arr1, $arr2);
echo pop($arr1, $arr2);
add($arr1, $arr2, 5);

echo pop($arr1, $arr2);

print_r($arr1);
print_r($arr2);