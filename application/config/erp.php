<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * erp配置文件
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/14
 * Time: 11:26
 */
$config['orderStatus'] = [
    0  => [
        'note'  => '已下单',
        'color' => '#7F7F7F'
    ],
    10 => [
        'note'  => '已配货',
        'color' => '#F08080',
    ],
    15 => [
        'note'  => '已安排采购',
        'color' => '#EE82EE',
    ],

    40   => [
        'note'  => '已发货',
        'color' => '#FFBB1C',
    ],
    60   => [
        'note'  => '已填写运单',
        'color' => '#5D478B',
    ],
    90   => [
        'note'  => '已收货',
        'color' => '#FA9E74',
    ],
    1000 => [
        'note'  => '订单完成',
        'color' => '#9ACD32',
    ],
    -10  => [
        'note'  => '已退货',
        'color' => '#7F7F7F',
    ],
    -20  => [
        'note'  => '纠纷订单',
        'color' => '#7F7F7F',
    ],
    -30  => [
        'note'  => '异常订单',
        'color' => '#7F7F7F',
    ],
    -40  => [
        'note'  => '已销毁',
        'color' => '#7F7F7F',
    ],
];

//状态值
$config['order_status_key'] = [
    'ordered'      => 0,//已下单
    'peihuo'       => 10,//已配货
//    'arranged_buy' => 15,//已安排采购
    'shipped'      => 40,//已发货
    'received_ysk' => 90,//已收货
    'return'       => -10,//已退货
    'abnormal'     => -30,//异常订单
    'destroy'      => -40,//已销毁
];

//国家
$config['shippingCountry'] = [
    '沙特'  => ['name' => 'Saudi Arabia', 'en' => 'st', 'excelTemplate' => 'data/excelTemplate/order_shipping_st.xlsx'],
    '阿联酋' => [
        'name'          => 'United Arab Emirates',
        'en'            => 'uae',
        'excelTemplate' => 'data/excelTemplate/order_shipping_uae.xlsx'
    ],
    '马来'  => ['name' => 'Malaysia', 'en' => 'ma', 'excelTemplate' => 'data/excelTemplate/order_shipping_ma.xlsx'],
    '香港'  => ['name' => '香港', 'en' => 'ma', 'excelTemplate' => 'data/excelTemplate/order_shipping_ma.xlsx'],
    '台湾'  => ['name' => '台湾', 'en' => 'ma', 'excelTemplate' => 'data/excelTemplate/order_shipping_ma.xlsx'],
    '泰国'  => ['name' => '泰国', 'en' => 'ma', 'excelTemplate' => 'data/excelTemplate/order_shipping_ma.xlsx'],

];