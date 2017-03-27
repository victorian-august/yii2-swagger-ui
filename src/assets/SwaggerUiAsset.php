<?php
namespace veksa\swagger\yii2\assets;

use yii\web\AssetBundle;

class SwaggerUiAsset extends AssetBundle
{
    public $sourcePath = '@bower/swagger-ui/dist';

    public $js = [
        'lib/backbone-min.js',
        'lib/handlebars-4.0.5.js',
        'swagger-ui.js',
        'lib/highlight.9.1.0.pack.js',
        'lib/highlight.9.1.0.pack_extended.js',
        'lib/jquery.ba-bbq.min.js',
        'lib/jquery.slideto.min.js',
        'lib/jquery.wiggle.min.js',
        'lib/jsoneditor.min.js',
        'lib/lodash.min.js',
        'lib/marked.js',
        'lib/object-assign-pollyfill.js',
        'lib/swagger-oauth.js'
    ];

    public $css = [
        'css/reset.css',
        'css/screen.css',
        'css/typography.css'
    ];

    public $depends = [
        'veksa\swagger\yii2\assets\JquerySwaggerUiAsset',
        'veksa\swagger\yii2\assets\UnderscoreAsset'
    ];
}
