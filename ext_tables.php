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

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . 'Configuration/TSConfig/BackendLayouts.tsconfig">');