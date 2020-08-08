<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/2
 * Time: 12:17 PM
 */

class EventGenerator {

    public $observer = [];

    public function addObserver(Observer $server) {
        $this->observer[] = $server;
    }

    public function notice() {
        foreach ($this->observer as $observer) {
            $observer->update();
        }
    }

}

interface Observer {

    public function update();
}