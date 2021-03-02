<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2021/3/2
 * Time: 11:26 AM
 */

class TreeNode {
    public $val   = null;
    public $left  = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val   = $val;
        $this->left  = $left;
        $this->right = $right;
    }
}

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {

        $queue[] = $root;
        $list    = [];

        while (!empty($queue)) {
            $count = count($queue);

            for ($i = 0; $i <= $count - 1; $i++) {
                $node = array_shift($queue);

                $list[] = $node->val;

                if ($node->left != null) {
                    $queue[] = $node->left;
                }

                if ($node->right != null) {
                    $queue[] = $node->right;
                }
            }
        }
        return $list;
    }
}

$left  = new TreeNode(4);
$right = new TreeNode(2);
$root  = new TreeNode(1, $left, $right);

$class = new Solution();

$list = $class->levelOrder($root);

print_r($list);