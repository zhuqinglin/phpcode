<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/6/18
 * Time: 7:55 PM
 */

function bullueSort($arr) {
    $count = count($arr);

    for ($i = 1; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [6, 7, 3, 10, 2, 80, 23, 42];

print_r(bullueSort($arr));




