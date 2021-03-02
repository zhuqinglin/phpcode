<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/6/29
 * Time: 4:25 PM
 */




function add (&$arr1, $add) {
    $arr1[] = $add;
}

function pop(&$arr1, &$arr2) {


    if (empty($arr1) && empty($arr2)) {
        return false;
    }

    if (empty($arr2)) {
        while (!empty($arr1)) {

            $arr2[] = array_pop($arr1);
        }
    }

    return array_pop($arr2);
}

$arr1 = [];
$arr2 = [];

add($arr1, 1);

add($arr1, 2);


echo pop($arr1, $arr2);

//print_r($arr2);