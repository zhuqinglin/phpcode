<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/2
 * Time: 10:42 AM
 */

class Solution {
    /**
     * 输入：grid = [
     *              [1, 3, 1],
     *              [1, 5, 1],
     *              [4, 2, 1]
     *             ]
     * 输出：7
     * 解释：因为路径 1→3→1→1→1 的总和最小。
     *
     * @param Integer[][] $grid
     * @return Integer
     */


    function minPathSum($grid) {

        $m = count($grid) - 1;
        $n = count($grid[0]) - 1;


        $dp[$m][$n] = $grid[$m][$n];
        for ($i = $m; $i >= 0; $i--) {

            for ($j = $n; $j >= 0; $j--) {

                if ($i == $m && $j != $n) { // 最后一行
                    $dp[$i][$j] = $grid[$i][$j] + $dp[$i][$j + 1];
                } else if ($i != $m && $j == $n) { // 最后一列
                    $dp[$i][$j] = $grid[$i][$j] + $dp[$i + 1][$j];
                } else if ($i != $m && $j != $n) {
                    $dp[$i][$j] = $grid[$i][$j] + min($dp[$i][$j + 1], $dp[$i + 1][$j]);
                }
            }
        }

        return $dp[0][0] ?? 0;
    }

}
