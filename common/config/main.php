<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    //เพิ่ม module kartik
    'modules' => [
        'gridview' =>  [
             'class' => '\kartik\grid\Module'
    ]
],    
];
