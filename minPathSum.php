<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/1
 * Time: 6:54 PM
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
        $dirs = [
            [1, 0],
            [0, 1]
        ];

        $min = PHP_INT_MAX;
        $this->dfs($grid, $dirs, 0, 0, $grid[0][0], $min);

        return $min;
    }

    function dfs($grid, $dirs, $row, $col, $sum, &$min) {

        if ($row == count($grid) - 1 && $col == count($grid[0]) -1) {
            $min = min($min, $sum);
        }

        foreach ($dirs as $dir) {

            $newRow = $row + $dir[0];
            $newCol = $col + $dir[1];

            if ($newRow >= count($grid) || $newCol >= count($grid[0])) {
                continue;
            }

            $sum += $grid[$newRow][$newCol];
            $this->dfs($grid, $dirs, $newRow, $newCol, $sum, $min);
            $sum -= $grid[$newRow][$newCol];
        }
    }
}


