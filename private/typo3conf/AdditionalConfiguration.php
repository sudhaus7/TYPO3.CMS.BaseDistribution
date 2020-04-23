<?php


use TYPO3\CMS\Core\Core\Environment;

$currentApplicationContext = Environment::getContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . (string)$currentApplicationContext . ')';


$contextConfigFile = dirname(Environment::getPublicPath()) . '/Configuration/' . (string)$currentApplicationContext . '.php';
if (file_exists($contextConfigFile)) {
    require($contextConfigFile);
}

