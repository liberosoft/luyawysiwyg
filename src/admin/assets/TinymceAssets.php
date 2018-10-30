<?php

namespace liberosoft\luyawysiwyg\admin\assets;

class TinymceAssets extends \luya\web\Asset
{
    public $sourcePath = '@bower';

    public $js = [
        'tinymce/tinymce.js',
        'angular-ui-tinymce/src/tinymce.js'
    ];
}