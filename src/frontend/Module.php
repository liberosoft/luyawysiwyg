<?php

namespace liberosoft\luyawysiwyg\frontend;

/**
 * Wysiwyg Admin Module.
 *
 * File has been created with `module/create` command.
 *
 * @author
 * @since 1.0.0
 */
class Module extends \luya\base\Module
{
    /**
     * @inheritdoc
     */
    public static function onLoad() {
        self::registerTranslation('luyawysiwyg', static::staticBasePath() . '/messages', [
            'luyawysiwyg' => 'luyawysiwyg.php',
        ]);
    }

    /**
     * Translations for CMS frontend Module.
     *
     * @param string $message
     * @param array $params
     * @return string
     */
    public static function t($message, array $params = []) {
        return parent::baseT('luyawysiwyg', $message, $params);
    }
}