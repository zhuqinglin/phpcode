<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/17
 * Time: 4:10 PM
 */

/**
 * @param Integer[] $nums
 * @return Integer[][]
 */
function threeSum($nums) {

    $res = [];
    $count = count($nums);

    if ($count < 3) {
        return [];
    }

    sort($nums);

    foreach ($nums as $key => $value) {

        $l = $key + 1;
        $r = $count - 1;

        if ($value > 0) {
            break;
        }

        if ($key > 0 && $value == $nums[$key - 1]) {
            continue;
        }

        while($l < $r) {
            $sum = $value + $nums[$l] + $nums[$r];

            if ($sum === 0) {
                array_push($res, [$value, $nums[$l], $nums[$r]]);





                // 去重操作
                while ($l < $r && $nums[$l] === $nums[$l + 1]) {
                    $l++;
                }
                while ($l < $r && $nums[$r] === $nums[$r - 1]) {
                    $r--;
                }

                $l++;
                $r--;

            } elseif ($sum < 0) {
                $l++;
            } else {
                $r--;
            }

        }

    }
    return $res;

}


$nums = [-1,0,1,2,-1,-4];
print_r(threeSum($nums));




// 错误解法， 没有三元去重
//function threeSum($nums) {
//
//    $count = count($nums);
//
//    $res = [];
//    $hash = [];
//
//    for ($i = 0; $i < $count - 2; $i++) {
//        for ($j = $i + 1; $j < $count - 1; $j++) {
//            if (isset($hash[$nums[$j]]) && $hash[$nums[$j]] !== false) {
//
//
//                array_push($res, array_merge([$nums[$j]], $hash[$nums[$j]]));
//                $hash[$nums[$j]] = false;
//            } else {
//                $target = 0 - $nums[$i] - $nums[$j];
//
//                $hash[$target] = [$nums[$i], $nums[$j]];
//            }
//        }
//    }
//    return $res;
//}
