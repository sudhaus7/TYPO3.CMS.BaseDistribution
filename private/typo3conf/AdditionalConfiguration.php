<?php


$currentApplicationContext = \TYPO3\CMS\Core\Core\Environment::getContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';

if (!$currentApplicationContext->isProduction()) {
    $contextConfigFile = \TYPO3\CMS\Core\Core\Environment::getProjectPath(). '/Configuration/' . (string)$currentApplicationContext . '.php';
    if (file_exists($contextConfigFile)) {
        require($contextConfigFile);
    }
}
