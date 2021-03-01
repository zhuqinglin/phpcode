<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/1
 * Time: 5:06 PM
 */

class Solution {

    /**
     * @param Integer[] $nums [-2,1,-3,4,-1,2,1,-5,4]
     * @return Integer
     */
    function maxSubArray($nums) {


        $res = $nums[0];

        $sum = 0;
        $len = count($nums);

        for ($i = 0; $i <= $len - 1; $i++) {

            if ($sum > 0) {
                $sum += $nums[$i];
            } else {
                $sum = $nums[$i];
            }
            $res = max($res, $sum);
        }

        return $res;
    }
}