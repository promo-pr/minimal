<?php

$config = [
    'id' => 'app',
    'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/base',
                'baseUrl' => '@web/themes/base',
                'pathMap' => [
                    '@app/views' => '@app/themes/base',
                    '@app/modules' => '@app/themes/base/modules',
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'cookieValidationKey' => '',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
