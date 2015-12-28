<?php

return [
        'translatedLanguages'=>array(
        'ru'=>'ru',
        'en'=>'en',
        'uk'=>'ua',
    ),
    'defaultLanguage'=>'uk',
    'adminEmail' => 'admin@example.com',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
];
