<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/10/30
 * Time: 2:32 PM
 */


function twoSum($nums, $start, $target) {
    sort($nums);

    $left = $start;
    $right = count($nums) - 1;
    $map = [];

    while ($left < $right) {
        $sum = $nums[$left] + $nums[$right];

        if ($sum == $target) {
            array_push($map, [$nums[$left], $nums[$right]]);

            while ($nums[$left] == $nums[$left + 1]) {
                $left++;
            }

            while ($nums[$right] == $nums[$right - 1]) {
                $right--;
            }

            $left++;
            $right--;


        } elseif ($sum < $target) {

            while ($nums[$left] == $nums[$left + 1]) {
                $left++;
            }
            $left++;

        } elseif ($sum > $target) {
            while ($nums[$right] == $nums[$right - 1]) {
                $right--;
            }
            $right--;
        }
    }

    return $map;

}


function threeSum($nums, $target) {

    sort($nums);

    $n = count($nums);

    $res = [];
    for ($i = 0; $i < $n; $i++) {
        $tuples = twoSum($nums, $i + 1, $target - $nums[$i]);
        if (!empty($tuples)) {
            foreach ($tuples as $value) {
                $res[] = $value;
            }
        }

        while ($i < $n - 1 && $nums[$i + 1] == $nums[$i]) {
            $i++;
        }
    }

}


$nums = [1, 2, 2, 1, 4, 9, 5, 6];

$target = 4;

print_r(threeSum($nums, $target));