<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/1
 * Time: 2:47 PM
 */

function simpleSort($arr) {

    if (empty($arr)) {
        return false;
    }

    $count = count($arr);
    if ($count == 1) {
        return $arr;
    }

    for ($i = 0; $i < $count; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }

    return $arr;
}


$arr = [4, 5, 2, 1, 8, 3];

print_r(simpleSort($arr));