<?php

defined('TYPO3_MODE') || die('Access denied.');

// include typoscript in folder EXT:Configuration/TypoScript/
// arguments are extension-key, folder-path in extension, name of template
call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sandbox', 'Configuration/TypoScript', 'Sandbox-Template');
    }
);


if(TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Leon.Sandbox',
        'tools', // Make module a submodule of 'tools'
        'lab', // Submodule-key
        '', // Position of module
        [ // Allowed controller action combinations
            'Lab' => 'index',
        ],
        [ // Additional configuration
            'access' => 'user,group',
            'icon' => 'EXT:sandbox/Resources/Public/Icons/Extension.png',
            'labels' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

