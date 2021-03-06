<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30
 * Time: 10:28
 */
return [
    //请求码 词典
    'DICT' => [
        'A0130' => ['msg' => 'VIP邀请码升级'],
        'A0131' => ['msg' => '总代理邀请码升级'],
        'A0132' => ['msg' => '合伙人邀请码升级'],
        'A0230' => ['msg' => 'VIP缴费升级'],
        'A0231' => ['msg' => '总代理缴费升级'],
        'A0233' => ['msg' => '合伙人缴费升级'],
        'A0140' => ['msg' => '区代加盟'],
        'A0150' => ['msg' => '市代加盟'],
        'A0160' => ['msg' => '省代加盟'],
        'A0600' => ['msg' => '订单支付'],
        'A0610' => ['msg' => '订单分润'],
        'A0700' => ['msg' => '用户提现交易'],
        'A1140' => ['msg' => '原六个车合伙人转区代'],
        'A1233' => ['msg' => '原六个车合作商总代理'],
        'A2233' => ['msg' => '原六个车车巢转合伙人'],
    ],
    //PMS等级对应请求码
    'REQUEST_CODE' => [
        'P1201' => 'A0230',
        'P1301' => 'A0231',
        'P1311' => 'A0233',
        'P1401' => 'A0140',
        'P1501' => 'A0150',
        'P1601' => 'A0160',
    ],
];