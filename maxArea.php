<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/12
 * Time: 7:09 PM
 */

/**
 * @param Integer[] $height
 * @return Integer
 */
function maxArea($height) {

    $left = 0;

    $right = count($height) - 1;

    $maxArea = 0;

    while ($left < $right) {

        $area = min($height[$left], $height[$right]) * ($right - $left);

        $maxArea = max($maxArea, $area);

        if ($height[$left] < $height[$right]) {
            $left++;
        } else {
            $right--;
        }
    }
    return $maxArea;
}