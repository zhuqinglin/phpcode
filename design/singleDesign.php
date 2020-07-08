<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/2
 * Time: 12:10 PM
 */

class SingleDesign {


    public static $instance;

    private function __construct() {

    }

    private function __clone() {

    }


    public static function getInstance() {
        if (isset(self::$instance)) {
            return self::$instance;
        }

        self::$instance = new self();

        return self::$instance;
    }

}