<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/10
 * Time: 2:58 PM
 */

/**
 * @param String $s
 * @return String
 */
function longestPalindrome($s) {
    $strLength = strlen($s);
    if ($strLength == 1) {
        return $s;
    }
    $arr = [];
    $maxLength = 1;
    $begin = 0;
    for ($i = 0; $i < $strLength; $i++) {
        $arr[$i][$i] = true;
    }

    for ($j = 1; $j < $strLength; $j++) {
        for ($i = 0; $i < $j; $i++) {

            if ($s[$i] == $s[$j]) {
                if ($j - $i <= 2) {
                    $arr[$i][$j] = true;
                } else {
                    $arr[$i][$j] = $arr[$i + 1][$j - 1];
                }
            } else {
                $arr[$i][$j] = false;
            }

            if ($arr[$i][$j] && $j - $i + 1 > $maxLength) {
                $maxLength = $j - $i + 1;
                $begin = $i;
            }

        }
    }
    return substr($s, $begin, $maxLength);
}

echo longestPalindrome('abbc') . "\n";
