<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/1
 * Time: 2:57 PM
 */

function importSort($arr) {

    if (empty($arr)) {
        return false;
    }

    $count = count($arr);
    if ($count == 1) {
        return $arr;
    }

    for ($i = 1; $i < $count; $i++) {

        if ($arr[$i] < $arr[$i - 1]) {

            $temp = $arr[$i];

            for ($j = $i - 1; $arr[$j] > $temp; $j--) {
                $arr[$j + 1] = $arr[$j];
            }
            $arr[$j + 1] = $temp;
        }
    }
    return $arr;

}

$arr = [4, 5, 2, 1, 8, 3];

print_r(importSort($arr));