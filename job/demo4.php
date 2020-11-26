<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/10/30
 * Time: 11:31 AM
 */

function twoSum1($nums, $target) {

    $map = [];
    foreach ($nums as $key => $num) {
        $cur = $target - $num;

        $search = array_search($num, $map);
        if ($search !== false)  {
            return [$search, $key];
        } else {
            $map[$key] = $cur;
        }

    }

    return false;
}







function twoSum($nums, $target) {
    sort($nums);

    $left = 0;
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


$nums = [1, 2, 2, 1, 4, 9];

$target = 3;

print_r(twoSum($nums, $target));

