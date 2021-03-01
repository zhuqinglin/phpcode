<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/11/28
 * Time: 3:31 PM
 */






function getMinStep($nums, $coin) {

    $dp = [];

    dp($nums, $coin, $dp);

    echo $dp[$coin];

}


function dp($nums, $coin, &$dp) {

    if ($coin == 0) {
        return 0;
    }

    if ($coin < 0) {
        return -1;
    }

    $res = INF;

    foreach ($nums as $num) {

        if (isset($dp[$coin])) {
            return $dp[$coin];
        }

        $sub = dp($nums, $coin - $num, $dp);

        if ($sub < 0) {
            continue;
        }

        $res = min($res, 1 + $sub);
    }

    $dp[$coin] = $res == INF ? -1 : $res;


    return $dp[$coin];

}

$nums = [1, 2, 5];

$coin = 11;

getMinStep($nums, $coin);