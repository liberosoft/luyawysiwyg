<?php

namespace liberosoft\luyawysiwyg\admin\assets;

class WysiwygAssets extends \luya\web\Asset
{
    public $sourcePath = '@wysiwygadmin/resources';

    public $css = [];

    public $js = [
        'js/directives.js',
        'js/langs/pl.js',
        //'js/plugins/powerpaste/'
    ];

    public $depends = [
        'luya\admin\assets\Main',
        'liberosoft\luyawysiwyg\admin\assets\TinymceAssets'
    ];
}