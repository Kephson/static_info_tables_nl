<?php
/** @noinspection PhpFullyQualifiedNameUsageInspection */
defined('TYPO3') || die('Access denied.');

call_user_func(function ($extensionKey, $table) {
    $sourceField = 'tr_name_en';
    $destField = 'tr_name_nl';

    $additionalColumns = [];
    $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '_item.' . $destField;

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
// Add as search field
    $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
}, 'static_info_tables_nl', basename(__FILE__, '.php'));
