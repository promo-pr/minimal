<?php

return [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'ro4YjJRZJ8WC46ISmfmEhTblNLufM42Y',
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => true,
            'appendTimestamp' => true,
            'bundles' => require(__DIR__ . '/assets.php'),
            'converter'=> [
                'class'=>'nizsheanez\assetConverter\Converter',
                'force'=> true,
                'parsers' => [
                    'less' => [ // file extension to parse
                        'class' => 'nizsheanez\assetConverter\Less',
                        'output' => 'css', // parsed output file type
                    ]
                ]
            ]
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'logFile' => '@app/runtime/logs/web-error.log'
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['warning'],
                    'logFile' => '@app/runtime/logs/web-warning.log'
                ],
            ],
        ],
    ],
];
