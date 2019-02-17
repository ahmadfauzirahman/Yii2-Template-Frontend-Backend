<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "lib/fontawesome-free/css/all.min.css",
        "lib/ionicons/css/ionicons.min.css",
        "lib/typicons.font/typicons.css",
        "css/azia.css"
    ];
    public $js = [
        "lib/jquery/jquery.min.js",
        "lib/bootstrap/js/bootstrap.bundle.min.js",
        "lib/ionicons/ionicons.js",
        "js/azia.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
