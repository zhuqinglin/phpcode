<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/10
 * Time: 5:52 PM
 */

class ListNode {
    public $val  = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {

        $shard = new ListNode(0);

        $shard->next = $head;

        $slow = $head;

        $fast = $head->next;


        while ($slow != null && $fast != null) {

            $temp = $slow->val;

            $slow->val = $fast->val;

            $fast->val = $temp;

            if ($fast->next == null) {
                $fast = null;
            } elseif ($fast->next->next == null) {
                $fast = null;
            } else {
                $fast = $fast->next->next;
                $slow = $slow->next->next;
            }
        }

        return $shard->next;

    }
}