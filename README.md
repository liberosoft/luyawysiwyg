# Wysiwyg Module
 
Wysiwyg Module for luya CMS. Tinymce suppport.
 
## Installation

```shell
composer require liberosoft/luyawysiwyg
```

In order to add the modules to your project go into the modules section of your config:

```php
return [
    'modules' => [
        // ...
        'wysiwygfrontend' => [
            'class' => 'liberosoft\luyawysiwyg\frontend\Module',
            'useAppViewPath' => false,
        ],
        'wysiwygadmin' => [
            'class' => 'liberosoft\luyawysiwyg\admin\Module',
            'useAppViewPath' => false,
            'textEditorOptions' => [ // tinymce options
                'height' => '480',
                'plugins' => 'link image code lists textcolor',
                'toolbar' => 'undo redo | bold underline italic forecolor backcolor | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | code'
            ]
        ],
        // ...
    ],
];
```

run:
```shell
./luya import
```