<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "lib/fontawesome-free/css/all.min.css",
        "lib/line-awesome/css/line-awesome.min.css",
        "lib/line-awesome/css/line-awesome-font-awesome.min.css",
        "lib/typicons.font/typicons.css",
        "lib/jqvmap/jqvmap.min.css",
        "css/azia.css"
    ];
    public $js = [
        "lib/bootstrap/js/bootstrap.bundle.min.js",
        "lib/jquery.flot/jquery.flot.js",
        "lib/jquery.flot/jquery.flot.resize.js",
        "lib/jqvmap/jquery.vmap.min.js",
        "lib/jqvmap/maps/jquery.vmap.world.js",
        "lib/perfect-scrollbar/perfect-scrollbar.min.js",
        "js/azia.js",
        "js/dashboard.sampledata.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
