<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/24
 * Time: 4:36 PM
 */

/*
 * 给定数组 nums = [1, 0, -1, 0, -2, 2]，和 target = 0。

    满足要求的四元组集合为：
    [
      [-1,  0, 0, 1],
      [-2, -1, 1, 2],
      [-2,  0, 0, 2]
    ]
 */

/**
 * @param Integer[] $nums
 * @param Integer   $target
 * @return Integer[][]
 */
function fourSum($nums, $target) {

    $count = count($nums);

    if ($count <= 3) {
        return [];
    }

    sort($nums);

    $res = [];

    for ($i = 0; $i <= $count - 4; $i++) {

        if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
            continue;
        }

        for ($j = $i + 1; $j <= $count - 3; $j++) {

            if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) {
                continue;
            }

            $left  = $j + 1;
            $right = $count - 1;

            while ($left < $right) {

                $sum = $nums[$i] + $nums[$j] + $nums[$left] + $nums[$right];

                if ($sum == $target) {
                    array_push($res, [$nums[$i], $nums[$j], $nums[$left], $nums[$right]]);

                    while ($left < $right && $nums[$left] == $nums[$left + 1]) {
                        $left++;
                    }

                    while ($left < $right && $nums[$right] == $nums[$right - 1]) {
                        $right--;
                    }

                    $left++;
                    $right--;
                } elseif ($sum < $target) {
                    $left++;
                } elseif ($sum > $target) {
                    $right--;
                }
            }
        }
    }

    return $res;
}

$nums   = [1, 0, -1, 0, -2, 2];
$target = 0;

print_r(fourSum($nums, $target));










