<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/28
 * Time: 12:15 PM
 */

// 动态规划一, 自顶向上
function dpFib($n) {

    for ($i = 0; $i <= $n; $i++) {
        $dp[$i] = 0;
    }

    $dp[1] = $dp[2] = 1;

    for ($i = 3; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    return $dp[$n];

}


// 动态规划二，自动向下
function dpFib2($n) {

    if ($n <= 0) {
        return 0;
    }

    $memo = [];
    for ($i = 0; $i <= $n; $i++) {
        $memo[$i] = 0;
    }

    return helper($memo, $n);

}

function helper(&$memo, $n) {

    if ($n == 1 || $n == 2) {
        return 1;
    }

    if (!empty($memo[$n])) {
        return $memo[$n];
    }

    $memo[$n] = helper($memo, $n - 1) + helper($memo, $n - 2);

    return $memo[$n];

}

dpFib2(3);