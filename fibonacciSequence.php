<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/27
 * Time: 4:38 PM
 */

// 此方法效率低下
function fibonacciSequence($n) {

    if ($n == 1 || $n == 2) {
        return 1;
    }

    return fibonacciSequence($n - 1) + fibonacciSequence($n - 2);
}

//echo fibonacciSequence(1) . "\n";

// 动态规划版一
function dpFib($n) {

    if ($n < 1) {
        return 0;
    }

    $memo = [];
    for ($i = 0; $i <= $n; $i++) {
        $memo[$i] = 0;
    }

    echo helper($memo, $n);

}

function helper(&$memo, $n) {

    // 明确base case
    if ($n == 1 || $n == 2) {
        return 1;
    }

    if (!empty($memo[$n])) {
        return $memo[$n];
    }

    $memo[$n] = helper($memo, $n - 1) + helper($memo, $n - 2);

    return $memo[$n];

}

//dpFib(3);



// 动态规划版二
function dpFib2($n) {

    for ($i = 0; $i <= $n; $i++) {
        $dp[$i] = 0;
    }

    $dp[1] = $dp[2] = 1;

    for ($i = 3; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    return $dp[$n];

}






