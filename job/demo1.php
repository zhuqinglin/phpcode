<?php
/**
 * Created by PhpStorm.
 * User: momo
 * Date: 2020/7/29
 * Time: 2:07 PM
 */

$pid = '1595298148943';

$event           = 'api_url_buy';
$s['url']        = 'room/sale/buyProduct';
$s['product_id'] = $pid;
$json_goto = [
    'm' => [
        'a_id' => 'live_event',
        't'    => '',
        'a'    => 'goto_live_event',
        'prm'  => json_encode([
            'event'       => $event,
            'event_param' => json_encode($s),
        ]),
    ],
];
echo json_encode($json_goto);