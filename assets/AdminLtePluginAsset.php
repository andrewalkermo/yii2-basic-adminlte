<?php

namespace app\assets;

use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'jvectormap/jquery-jvectormap-1.2.2.min.js',
        'jvectormap/jquery-jvectormap-usa-en.js',
        'jvectormap/jquery-jvectormap-world-mill-en.js',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js',

        // more plugin Js here
    ];
    public $css = [
        'jvectormap/jquery-jvectormap-1.2.2.css',
            // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}