<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/1
 * Time: 4:48 PM
 */

class Solution{

    function permute($nums) {

        $list = [];
        $track = [];
        $this->loopTree($nums, $track, $list);

        return $list;

    }

    function loopTree($nums, &$track, &$list) {

        if (count($track) == count($nums)) {
            $list[] = $track;
        }

        foreach ($nums as $item) {
            if (in_array($item, $track)) {
                continue;
            }
            $track[$item] = $item;
            $this->loopTree($nums, $track, $list);
            unset($track[$item]);

        }

        return [];
    }

}

