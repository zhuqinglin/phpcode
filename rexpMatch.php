<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/16
 * Time: 9:55 PM
 */

function isMatch($s, $p) {
    $m = strlen($s);
    $n = strlen($p);

    $arr = [];
    for ($i = 0; $i <= $m; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            $arr[$i][$j] = false;
        }
    }

    $arr[0][0] = true;

    // ###b
    // ###b*

    for ($i = 0; $i <= $m; ++$i) {
        for ($j = 1; $j <= $n; ++$j) {
            if ($p[$j - 1] == '*') {
                $arr[$i][$j] = $arr[$i][$j - 2];

                if (matches($s, $p, $i, $j - 1)) {
                    $arr[$i][$j] = $arr[$i][$j] || $arr[$i - 1][$j];
                }
            } else {
                if (matches($s, $p, $i, $j)) {
                    $arr[$i][$j] = $arr[$i - 1][$j - 1];
                }
            }
        }
    }

    return $arr[$m][$n];
}
function matches($s, $p, $i, $j) {
    if ($i == 0) {
        return false;
    }

    if ($p[$j - 1] == '.') {
        return true;
    }

    if ($s[$i - 1] == $p[$j - 1]) {
        return true;
    }
    return false;


}

$a = '###b';
$b = '###b*';


isMatch($a, $b);