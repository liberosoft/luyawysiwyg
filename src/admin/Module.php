<?php

namespace liberosoft\luyawysiwyg\admin;

/**
 * Wysiwyg Admin Module.
 *
 * File has been created with `module/create` command.
 *
 * @author
 * @since 1.0.0
 */
class Module extends \luya\admin\base\Module
{
    public function getAdminAssets() {
        return [
            'liberosoft\luyawysiwyg\admin\assets\WysiwygAssets',
        ];
    }
}