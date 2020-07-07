<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/1
 * Time: 3:17 PM
 */


function quickSort($arr) {

    if (count($arr) <= 1) {
        return $arr;
    }

    $temp = $arr[0];

    $right = $left = [];

    foreach ($arr as $item) {
        if ($item > $temp) {
            $right[] = $item;
        } else if ($item < $temp) {
            $left[] = $item;
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);

    $left[] = $temp;

    return array_merge($left, $right);

}

$arr = [4, 5, 2, 1, 8, 3];

print_r(quickSort($arr));