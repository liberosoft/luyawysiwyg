# Wysiwyg Module
 
Wysiwyg Module for luya CMS. Tinymce suppport.
 
## Installation

```shell
bower install angular-ui-tinymce --save
composer require liberosoft/luyawysiwyg
```

In order to add the modules to your project go into the modules section of your config:

```php
return [
    'modules' => [
        // ...
        'wysiwygfrontend' => [
            'class' => 'liberosoft\luyawysiwyg\frontend\Module',
            'useAppViewPath' => true,
        ],
        'wysiwygadmin' => [
            'class' => 'liberosoft\luyawysiwyg\admin\Module',
            'aliases' => [
                '@wysiwyg_resource' => '@app/vendor/liberosoft/luyawysiwyg/src/admin'
            ],
            'useAppViewPath' => true,
        ],
        // ...
    ],
];
```

run:
```shell
./luya import
```