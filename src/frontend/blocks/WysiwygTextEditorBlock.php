<?php

namespace liberosoft\luyawysiwyg\frontend\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;

/**
 * Wysiwyg Text Editor Block.
 *
 * File has been created with `block/create` command.
 */
class WysiwygTextEditorBlock extends PhpBlock
{
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
        return 'Edytor tekstu';
    }

    /**
     * @inheritDoc
     */
    public function icon() {
        return 'text_format'; // see the list of icons on: https://design.google.com/icons/
    }

    /**
     * @inheritDoc
     */
    public function config() {
        return [
            'vars' => [
                ['var' => 'text', 'label' => 'Text', 'type' => 'wysiwyg2'],
            ],
        ];
    }

    /**
     * {@inheritDoc}
     *
     * @param {{vars.text}}
     */
    public function admin() {
        return '<h5 class="mb-3">Edytor tekstu</h5>{{vars.text}}';
    }
}