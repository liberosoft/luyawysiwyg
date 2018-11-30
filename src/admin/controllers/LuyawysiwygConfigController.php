<?php

namespace liberosoft\luyawysiwyg\admin\controllers;

/**
 * LuyawysiwygConfigController Controller.
 *
 * Config for module
 */
class LuyawysiwygConfigController extends \luya\admin\base\RestController
{
    /**
     * Get text editor config from module config
     * @return array
     */
    public function actionGet() {
        $mod = \Yii::$app->getModule('wysiwygadmin');
        return $mod->textEditorOptions;
    }
}