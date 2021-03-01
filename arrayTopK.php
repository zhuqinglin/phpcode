<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/1
 * Time: 11:21 AM
 */

/*
 * @lc app=leetcode.cn id=347 lang=php
 *
 * [347] 前 K 个高频元素
 */

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer[]
 */
function topKFrequent($nums, $k) {

    // 拼装成（值=>出现次数）的map
    $map = [];
    foreach ($nums as $item) {
        $map[$item] = isset($map[$item]) ? $map[$item]++ : 1;
    }

}


class MyMinHeap extends SplMinHeap{
    protected function  compare( $value1, $value2 ) {//自定义比较方法
        return ( $value2[1] - $value1[1] );
    }
}

