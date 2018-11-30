<?php

namespace liberosoft\luyawysiwyg\frontend\blocks;

use liberosoft\luyawysiwyg\frontend\Module;
use luya\admin\models\Config;
use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;

/**
 * Wysiwyg Text Editor Block.
 *
 * File has been created with `block/create` command.
 */
class WysiwygTextEditorBlock extends PhpBlock
{
    private $_plugins = 'link image code';
    private $_toolbar = 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | code';
    private $_height = '480';

    /**
     * @var string The module where this block belongs to in order to find the view files.
     */
    public $module = 'wysiwygfrontend';

    /**
     * @inheritDoc
     */
    public function blockGroup() {
        return ProjectGroup::class;
    }

    /**
     * @inheritDoc
     */
    public function name() {
        return Module::t('module_name');
    }

    /**
     * @inheritDoc
     */
    public function icon() {
        return 'text_format';
    }

    /**
     * @inheritDoc
     */
    public function config() {
        return [
            'vars' => [
                [
                    'var' => 'text',
                    'label' => Module::t('field_name'),
                    'type' => 'wysiwyg2'
                ],
            ],
            'cfgs' => [
                ['var' => 'cssClass', 'label' => Module::t('css_class'), 'type' => 'zaa-text'],
            ]
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @param {{vars.text}}
     */
    public function admin() {
        return '<h5 class="mb-3">' . Module::t('module_name') . '</h5>{{vars.text}}';
    }
}