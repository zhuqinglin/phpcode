<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/27
 * Time: 4:38 PM
 */

function fibonacciSequence($n) {

    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    return fibonacciSequence($n - 1) + fibonacciSequence($n - 2);

}

echo fibonacciSequence(3) . "\n";

