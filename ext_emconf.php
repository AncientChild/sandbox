<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Sandbox',
    'description' => 'A sandbox-extension for practicing extbase',
    'category' => 'templates',
    'author' => 'Leon Fretter',
    'author_company' => 'lionsware',
    'author_email' => 'gebichdirnich@real.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-9.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\Sandbox\\' => 'Classes'
        ]
    ],
];