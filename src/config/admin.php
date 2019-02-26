<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 7/30/18
 * Time: 10:11 PM
 */

return [
    'name' => 'Admin',
    'aliases' => [
        '@dashboard' => '/dashboard/index',
    ],
    'defaultRoute' => '@dashboard',
    'runtimePath' => '@root/runtime/admin',
    'controllerNamespace' => '\codexten\yii\admin\controllers',
    'controllerMap' => [
        'dashboard' => [
            'class' => 'codexten\yii\admin\controllers\DashboardController',
        ],
        'sign-in' => [
            'class' => 'codexten\yii\admin\controllers\SignInController',
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'entero:admin' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@codexten/yii/admin/messages',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => [
                        '@codexten/yii/admin/views',
                    ],
                ],
            ],
        ],
//        'user' => [
//            'loginUrl' => ['/sign-in/login'],
//        ],
    ],
    'as globalAccess' => [
        'class' => '\codexten\yii\behaviors\GlobalAccessBehavior',
        'rules' => [
            [
                'controllers' => ['site'],
                'allow' => true,
                'roles' => ['?', '@'],
                'actions' => ['error'],
            ],
            [
                'allow' => true,
                'roles' => ['admin'],
            ],
        ],
    ],
];