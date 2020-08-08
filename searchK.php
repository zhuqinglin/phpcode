<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/6
 * Time: 4:56 PM
 */


function findMedianSortedArrays($nums1, $nums2) {

    $n = count($nums1);
    $m = count($nums2);

    $left = floor(($n + $m + 1) / 2);

    $right = floor(($n + $m + 2) / 2);

//    return getKthElement($nums1, 0, $n - 1, $nums2, 0, $m - 1, $right);

    return (getKthElement($nums1, 0, $n - 1, $nums2, 0, $m - 1, $left) + getKthElement($nums1, 0, $n - 1, $nums2, 0, $m - 1, $right)) / 2;

}

function getKthElement($nums1, $start1, $end1, $nums2, $start2, $end2, $k) {

    $len1 = $end1 - $start1 + 1;
    $len2 = $end2 - $start2 + 1;

    if ($len1 > $len2) {
        return getKthElement($nums2, $start2, $end2, $nums1, $start1, $end1, $k);
    }

    if ($len1 == 0) {
        return $nums2[$start2 + $k - 1];
    }

    if ($k == 1) {
        return $nums1[$start1] > $nums2[$start2] ? $nums2[$start2] : $nums1[$start1];
    }

    $i = $start1 + min($len1, floor($k / 2)) - 1;
    $j = $start2 + min($len2, floor($k / 2)) - 1;

    if ($nums1[$i] > $nums2[$j]) {
        return getKthElement($nums1, $start1, $end1, $nums2, $j + 1, $end2, $k - ($j - $start2 + 1));
    } else {
        return getKthElement($nums1, $i + 1, $end1, $nums2, $start2, $end2, $k - ($i - $start1 + 1));
    }
}


$nums1 = [1, 2, 3, 4, 5, 6, 7, 8];
$nums2 = [9, 10, 11, 12, 13, 14, 15, 16];

print_r(findMedianSortedArrays($nums1, $nums2));
