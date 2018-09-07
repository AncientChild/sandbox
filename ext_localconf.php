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

if(TYPO3_MODE == 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers']['ExtensionName-MeaningFullName'] = 
        \MyVendor\Sandbox\Command\SimpleCommandController::class;
}