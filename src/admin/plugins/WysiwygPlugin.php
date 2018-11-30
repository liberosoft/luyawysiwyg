<?php

namespace liberosoft\luyawysiwyg\admin\plugins;

use luya\admin\helpers\Angular;
use luya\admin\models\Config;
use luya\admin\ngrest\base\Plugin;

/**
 * Wysiwyg Plugin.
 *
 * @author andrzej
 * @since 1.0.0
 */
class WysiwygPlugin extends Plugin
{
    /**
     * @inheritDoc
     */
    public function renderList($id, $ngModel) {
        $this->createListTag($id, $ngModel);
    }

    /**
     * @inheritDoc
     */
    public function renderUpdate($id, $ngModel) {
        return Angular::directive('wysiwyg2-label',
            [
                'model' => $ngModel,
                'label' => $this->alias
            ]
        );
    }

    /**
     * @inheritDoc
     */
    public function renderCreate($id, $ngModel) {
        return Angular::directive('wysiwyg2-label',
            [
                'model' => $ngModel,
                'label' => $this->alias
            ]
        );
    }
}