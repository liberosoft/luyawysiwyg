<?php

namespace liberosoft\luyawysiwyg\admin\plugins;

use luya\admin\helpers\Angular;
use luya\admin\ngrest\base\Plugin;

class WysiwygPlugin extends Plugin
{
    public function renderList($id, $ngModel) {
        $this->createListTag($id, $ngModel);
    }

    public function renderUpdate($id, $ngModel) {
        return Angular::directive('wysiwyg2-label',
            ['model' => $ngModel, 'label' => $this->alias, 'data' => $this->getServiceName('data')]);
    }

    public function renderCreate($id, $ngModel) {
        return Angular::directive('wysiwyg2-label', ['model' => $ngModel, 'label' => $this->alias, 'data' => $this->getServiceName('data')]);
    }

    public function serviceData($event) {
        return [
            'data' => [
                ['label' => $this->alias]
            ],
        ];
    }
}