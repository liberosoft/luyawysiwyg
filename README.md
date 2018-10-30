# Wysiwyg Module
 
Module for tinymce wysiwyg editor
 
## Installation
Use angular-ui-tinymce

```php
bower install angular-ui-tinymce --save
```


In order to add the modules to your project go into the modules section of your config:

```php
return [
    'modules' => [
        // ...
        'wysiwygfrontend' => [
            'class' => 'app\modules\wysiwyg\frontend\Module',
            'useAppViewPath' => true
        ],
        'wysiwygadmin' => 'app\modules\wysiwyg\admin\Module',
    ],
];
```