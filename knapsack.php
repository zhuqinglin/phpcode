<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/10/23
 * Time: 4:29 PM
 */


function knapsack($w, $n, $wt, $val) {

    $arr = [];
//    for ($i = 0; $i <= $n + 1; $i ++) {
//        for ($j = 0; $j <= $w + 1; $j++) {
//            $arr[$i][$j] = 0;
//        }
//    }

    for ($i = 0; $i <= $n + 1; $i++) {
        $arr[$i][0] = 0;
    }

    for ($i = 0; $i <= $w + 1; $i++) {
        $arr[0][$i] = 0;
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $w; $j++) {
            if ($j - $wt[$i - 1] < 0) {
                $arr[$i][$j] = $arr[$i - 1][$j];
            } else {
                $arr[$i][$j] = max(($arr[$i - 1][$j - $wt[$i - 1]] + $val[$i - 1]), $arr[$i - 1][$j]);
            }
        }
    }

    echo $arr[$n][$w] . PHP_EOL;die;

}


$w = 10;

$n = 5;

$wt = [2, 2, 6, 5, 6];

$val = [6, 3, 5, 4, 6];

knapsack($w, $n, $wt, $val);