<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_lab',
        'label' => 'name',
        'iconfile' => 'EXT:sandbox/Resources/Public/Icons/Lab.png'
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_lab.item_label',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name']
    ]
];