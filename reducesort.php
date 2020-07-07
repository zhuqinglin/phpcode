<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/2
 * Time: 3:37 PM
 */


function mergesort($arr) {

    $count = count($arr);

    if ($count <= 1) {
        return $arr;
    }

    $mid = floor($count / 2);

    $left = array_slice($arr, 0, $mid);

    $right = array_slice($arr, $mid);

    $left = mergesort($left);
    $right = mergesort($right);

    return merge($left, $right);


}

function merge($left, $right) {

}


//$arr = [3, 5, 1, 10, 4, 40, 17];
//mergesort($arr);