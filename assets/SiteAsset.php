<?php

namespace app\assets;

use Yii;
use yii\web\AssetBundle;

class SiteAsset extends AssetBundle
{
    public $sourcePath = '@app/assets';
    public $css = [
        'less/site.less'
    ];
    public $js = [
        'js/lib.js',
        'js/site.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'promo\icons\IconsAsset'
    ];

    public function init()
    {
        parent::init();
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => []
        ];
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapPluginAsset'] = [
            'js' => []
        ];
    }

}
