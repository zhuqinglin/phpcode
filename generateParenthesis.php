<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/10
 * Time: 5:04 PM
 */

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $count = $n * 2;

        $current_string = [];
        // 模拟Java解法，构造一个有2n个元素的数组对象，初始化每个值都是空字符串
        for ($i = 0; $i < $count; $i++) {
            $current_string[$i] = "";
        }

        $this->generateAll($current_string, 0, $result);

        return $result;
    }

    function generateAll($current, $pos, &$result) {


        if ($pos == count($current)) {


            if ($this->isValid($current)) {
                $result[] = implode('', $current);
            }

        } else {
            $current[$pos] = '(';
            $this->generateAll($current, $pos + 1, $result);
            $current[$pos] = ')';
            $this->generateAll($current, $pos + 1, $result);
        }
    }

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {

//        $count = strlen($s);

        $count = count($s);
        if ($count == 0) {
            return true;
        }

        $res = [];

        for ($i = 0; $i < $count; $i++) {

            if (in_array($s[$i], ['(', '[', '{'])) {
                array_push($res, $s[$i]);
            } else {

                if (empty($res)) {
                    return false;
                }

                $temp = array_pop($res);
                if (($temp == '(' && $s[$i] != ')') || ($temp == '{' && $s[$i] != '}') || ($temp == '[' && $s[$i] != ']')) {
                    return false;
                }
            }
        }

        if (!empty($res)) {
            return false;
        }

        return true;
    }
}

$test = new Solution();
$test->generateParenthesis(3);