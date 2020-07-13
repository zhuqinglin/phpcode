<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/12
 * Time: 6:17 PM
 */

/*
 * @lc app=leetcode.cn id=9 lang=php
 *
 * [9] 回文数
 */


/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {

    $x = (string) $x;

    $count = strlen($x);

    if ($count <= 1) {
        return true;
    }

    $left = 0;
    $right = $count - 1;
    $flag = true;
    while ($left < $right) {
        if ($x[$left] != $x[$right]) {
            $flag = false;
            break;
        }
        $left++;
        $right--;
    }
    return $flag;

}