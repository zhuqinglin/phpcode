<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/24
 * Time: 5:29 PM
 */

/*
 * @lc app=leetcode.cn id=19 lang=php
 *
 * [19] 删除链表的倒数第N个节点
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {

        $dummy = new ListNode(0);

        $dummy->next = $head;

        $p = $dummy;

        $q = $dummy;

        //快指针先走n步

        for ($i = 0; $i <= $n; $i++) {
            $q = $dummy->next;
        }

        while ($q) {
            $q = $q->next;
            $p = $p->next;
        }

        $p->next = $p->next->next;

        return $dummy->next;


    }
}
// @lc code=end