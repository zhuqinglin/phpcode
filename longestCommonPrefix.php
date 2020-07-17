<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/16
 * Time: 10:50 PM
 */

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $count = count($strs);

    if ($count <= 0) {
        return '';
    }

    $maxStr = '';
    $j = 0;
    $flag = true;
    while ($flag) {
        $temp = '';
        $equal = true;
        for ($i = 0; $i < $count; $i++) {

            if (empty($strs[$i][$j])) {
                $flag = false;
                $equal = false;
                break;
            }

            if (!empty($temp) && $strs[$i][$j] != $temp) {

                $flag = false;
                $equal = false;
                break;
            }

            $temp = $strs[$i][$j];
        }

        if ($equal) {
            $maxStr .=  $strs[0][$j];
        }

        $j++;

    }

    return $maxStr;

}



echo longestCommonPrefix([]) . "\n";












