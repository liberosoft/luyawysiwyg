<?php
/**
 * View file for block: WysiwygTextEditorBlock
 *
 * File has been created with `block/create` command.
 *
 * @param $this ->varValue('text');
 * @param $this ->cfgValue('cssClass');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
$cssClass = $this->cfgValue('cssClass');
?>

<?php if (!empty($cssClass)): ?>
    <div class='<?= $cssClass ?>'>
<?php endif; ?>
<?= $this->varValue('text'); ?>
<?php if (!empty($cssClass)): ?>
    </div>
<?php endif; ?>