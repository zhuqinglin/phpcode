<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/8/1
 * Time: 7:08 PM
 */

class Alert {

    private $alertHandlers = [];

    public function addAlertHandler(AlertHandler $alertHandler) {
        $this->alertHandlers[] = $alertHandler;
    }

    public function check($apiStatInfo) {

        foreach ($this->alertHandlers as $alertHandler) {
            $alertHandler->check($apiStatInfo);
        }
    }

}


abstract class AlertHandler {

    protected $rule;

    protected $notification;


    public function __construct($rule, $notification) {
        $this->rule = $rule;
        $this->notification = $notification;
    }

    public abstract function check($rule);

}

class TpsAlertHandler extends AlertHandler {


    public function check($rule) {
        // TODO: Implement check() method.


    }

}

class ErrorAlertHandler extends AlertHandler {

    public function check($rule) {
        // TODO: Implement check() method.

    }
}