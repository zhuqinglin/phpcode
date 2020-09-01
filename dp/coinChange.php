<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/28
 * Time: 2:12 PM
 */

/**
 * @param array $coins
 * @param int   $amount
 */
function coinChange(array $coins, int $amount) {

    $memo = [];

    $res = dp($coins, $amount, $memo);

    echo $res;die;

}

function dp($coins, $amount, &$memo) {

    // 定义base case
    if ($amount == 0) {
        return 0;
    }

    if ($amount < 0) {
        return -1;
    }

    $res = INF;

    foreach ($coins as $coin) {

        if (isset($memo[$amount])) {
            return $memo[$amount];
        }

        $sub = dp($coins, $amount - $coin, $memo);

        if ($sub == -1) {
            continue;
        }
        $res = min($res, 1 + $sub);
    }

    $memo[$amount] = $res == INF ? -1 : $res;

    return $memo[$amount];
}

$coins = [1, 2, 5];
$amount = 6;
coinChange($coins, $amount);