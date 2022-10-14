<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'form_pincodes',
    'Configuration/TypoScript',
    'Form Pincodes'
);
