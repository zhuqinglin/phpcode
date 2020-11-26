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



$arr = [1, 2, 3];

//print_r(array_slice($arr, 1));


function premu($nums) {
    $track = [];
    $res = [];

    backtrack($nums, $track, $res);

    print_r($res);


}

function backtrack($nums, &$track, &$res) {

    if (count($track) == count($nums)) {
        $res[] = $track;
    }

    foreach ($nums as $num) {
        if (in_array($num, $track)) {
            continue;
        }
        $track[$num] = $num;
        backtrack($nums, $track, $res);

        unset($track[$num]);

    }

}

premu($arr);


