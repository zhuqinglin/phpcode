<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/1
 * Time: 2:25 PM
 */

function bubbltSort($arr) {

    if (empty($arr)) {
        return false;
    }

    $count = count($arr);

    if ($count == 1) {
        return $arr;
    }

    for ($i = 1; $i < $count; $i++) {
        $flag = true;
        for ($j = 0; $j < $count - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
                $flag = false;
            }
        }
        if (!empty($flag)) {
            return $arr;
        }
    }

    return $arr;

}

$arr = [2, 3, 5, 4];

print_r(bubbltSort($arr));