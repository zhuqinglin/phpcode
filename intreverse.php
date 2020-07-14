<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/11
 * Time: 6:47 PM
 */

/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {

    $x = (string) $x;
    $count = strlen($x);

    $left = 0;
    if ($x < 0) {
        $left = 1;
    }
    $right = $count - 1;
    while ($left < $right) {
        $temp = $x[$left];
        $x[$left] = $x[$right];
        $x[$right] = $temp;
        $left++;
        $right--;
    }

    $newNum = (int) $x;

    if ($newNum > (pow(2,31)-1) || $newNum < pow(-2,31)) {
        return 0;
    }

    return $newNum;
}

echo reverse(-123);