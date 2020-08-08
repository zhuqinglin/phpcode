<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/6
 * Time: 12:15 PM
 */

function permutation($arr, $str) {
    $cnt = count($arr);
    if($cnt == 1){
        echo $str . $arr[0] . "\n";
    }  else {
        for ($i = 0; $i < count($arr); $i++) {
            $tmp = $arr[0];
            $arr[0] = $arr[$i];
            $arr[$i] = $tmp;
            permutation(array_slice($arr, 1), $str . $arr[0]);
        }
    }
}



$arr = [1, 2, 3, 4];

print_r(array_slice($arr, 1));

//permutation($arr, '');