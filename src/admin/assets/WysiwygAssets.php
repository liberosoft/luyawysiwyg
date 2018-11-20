<?php

namespace liberosoft\luyawysiwyg\admin\assets;

class WysiwygAssets extends \luya\web\Asset
{
    public $sourcePath = '@wysiwyg_resource/resources';

    public $css = [];

    public $js = [
        'js/directives.js',
    ];

    public $depends = [
        'luya\admin\assets\Main',
        'liberosoft\luyawysiwyg\admin\assets\TinymceAssets'
    ];
}