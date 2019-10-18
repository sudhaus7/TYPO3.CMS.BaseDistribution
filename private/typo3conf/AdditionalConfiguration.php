<?php


$currentApplicationContext = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

if (!$currentApplicationContext->isProduction()) {
    $contextConfigFile = dirname(PATH_site) . '/Configuration/' . (string)$currentApplicationContext . '.php';
    if (file_exists($contextConfigFile)) {
        require($contextConfigFile);
    }
}
