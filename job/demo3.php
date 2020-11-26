<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/10
 * Time: 5:37 PM
 */


//$arr = [1, 2, 3, 4, 5, 6, 7];
//
//
//foreach ($arr as $key => $value) {
//
//
//    if (($key + 1) % 2 == 0) {
//        $temp = $arr[$key];
//
//        $arr[$key] = $arr[$key  -  1];
//        $arr[$key - 1] = $temp;
//    }
//
//}
//
//print_r($arr);die;


//$test = new Redis();
//
//$test->connect('localhost');
//
//$test->set('test', 123, ['ex'=>10]);


//$a = 0;
//
//for ($i = $a * 10; $i < 5; $i++) {
//    $a = 10;
//
//    echo 1 . "\n";
//}

function binarySearch($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($nums[$mid] == $target) {
            return $mid;
        } else if ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else if ($nums[$mid] > $target) {
            $right = $mid - 1;
        }
    }

    return -1;
}

function left_round($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($nums[$mid] == $target) {
            $right = $mid - 1;
        } else if ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else if ($nums[$mid] > $target) {
            $right = $mid - 1;
        }
    }

    if ($left == count($nums)) return -1;

    return $nums[$left] == $target ? $left : -1;
}

$nums = [1, 3, 3, 3, 5];

$target = 3;

echo binarySearch($nums, $target) . PHP_EOL;

echo left_round($nums, $target) . PHP_EOL;


























