<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/3
 * Time: 11:51 AM
 *
 *
 *
 *
// * @property string $test
 *
 */



class Test {


    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
       return $this->$name = 123;
    }

}

$test = new Test();

echo $test->test . PHP_EOL;

//echo $test->test . PHP_EOL;