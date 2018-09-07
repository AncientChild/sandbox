<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MyVendor.Sandbox',
    'Pi1',
    [
        'Product' => 'list',
    ],
    // non-cacheable actions
    [
        'Product' => '',
    ]
);