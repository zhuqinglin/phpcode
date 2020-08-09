<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class ListNode {
    public $val  = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

/**
 * @param ListNode[] $lists
 * @return ListNode
 */
function mergeKLists($lists) {

    $data = null;

    foreach ($lists as $list) {
        $data = mergetTwoLists($data, $list);
    }

    return $data;
}

function mergetTwoLists($a, $b) {

    $dummy = new ListNode(0);

    $prev = $dummy;


    while ($a || $b) {

        if (empty($a->next)) {
            $prev->next = $b;
            break;
        } else if (empty($b->next)) {
            $prev->next = $a;
            break;
        }

        if ($a->val > $b->val) {
            $prev->next = $a;
            $a = $a->next;
        } else {
            $prev->next = $b;
            $b = $b->next;
        }

        $prev = $prev->next;
    }

    return $dummy->next;

}