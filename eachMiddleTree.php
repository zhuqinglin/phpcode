<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/11/24
 * Time: 2:15 PM
 */

/*
 * @lc app=leetcode.cn id=94 lang=php
 *
 * [94] 二叉树的中序遍历
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    public $list;

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    public function inorderTraversal($root) {

        $list = [];
        $this->inorder($root, $list);

        // return $this->list;

        return $list;
    }

    public function inorder($root, &$list) {
        if ($root == null) {
            return;
        }

        $this->inorder($root->left, $list);

        // $this->list[] = $root->val;

        $list[] = $root->val;

        $this->inorder($root->right, $list);
    }
}


