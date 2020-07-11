<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/11
 * Time: 2:48 PM
 */

/**
 * @param String $s
 * @param Integer $numRows
 * @return String
 */
function convert($s, $numRows) {
    $count = strlen($s);
    if (empty($count) || $count == 1 || $numRows == 1) {
        return $s;
    }

    $arr = [];
    $dir = 1;
    $index = 0;

    for ($i = 0; $i < $count; $i++) {
        $arr[$index][] = $s[$i];
        $index += $dir;

        if ($index == 0 || $index == $numRows - 1) {
            $dir = -$dir;
//            echo $dir . "\n";

        }

    }
    $str = '';
    foreach ($arr as $value) {
        $str .= implode('', $value);
    }
    return $str;
}


echo convert('PAYPALISHIRING', 3);