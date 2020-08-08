<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/19
 * Time: 10:51 PM
 */


function threeSumNear($nums, $target) {

    sort($nums);

    $count = count($nums);

    $ans = $nums[0] + $nums[1] + $nums[2];

    for ($i = 0; $i < $count; $i++) {

        $left = $i + 1;
        $right = $count - 1;

        while ($left < $right) {
            $sum = $nums[$i] + $nums[$left] + $nums[$right];

            if (abs($target - $sum) < abs($target - $ans)) {
                $ans = $sum;
            } elseif ($sum < $target) {
                $left++;
            } elseif ($sum > $target) {
                $right++;
            } else {
                return $ans;
            }
        }

    }

    return $ans;


}