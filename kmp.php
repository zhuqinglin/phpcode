<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/6/30
 * Time: 6:56 PM
 */

function get_next($str) {

    $count = strlen($str);

    $i = 0;
    $j = -1;
    $next[0] = -1;

    while($i < $count) {

        if ($j == -1 || $str[$i] == $str[$j]) {
            $i++;
            $j++;

            $next[$i] = $j;
        } else {
            $j = $next[$j];
        }
    }
    return $next;
}

$str = 'abababac';

print_r(get_next($str));