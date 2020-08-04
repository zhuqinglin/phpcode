<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/4
 * Time: 11:40 AM
 */

class UserService {

    public function doTest() {
        return false;
    }

}

$test = new UserService();

if ($test->doTest()) {
    echo 'success';
} else {
    echo 'fail';
}



abstract class TestCase {

    public function run() {
        if ($this->doTest()) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }

    abstract public function doTest();
}

class JunitApplication {

    private $list = [];

    public function register(TestCase $testCase) {

        $this->list[] = $testCase;

    }

    public function init() {
        foreach ($this->list as $testCase) {
            $testCase->run();
        }
    }

}